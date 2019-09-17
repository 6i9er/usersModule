<?php
namespace App\Http\Controllers;
use App\Enums\UsersEnums;
use App\Http\Controllers\ParentControllers\ParentUserController;
use App\Models\Member;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\LaravelLocalization;
use Illuminate\Support\Facades\Validator;


class UserController extends ParentUserController
{
    function __construct() {
        $this->middleware("auth" ,["except" => [
            "getUserRecovery","sendUserRecovery","firstLogin",
            "userResetPassword","saveUserResetPassword"
        ] ]);

            if(!in_array(\Request::route()->getName() , [
                    "getUserRecovery","sendUserRecovery","firstLogin",
                    "userResetPassword","saveUserResetPassword"
                ])){
                $this->middleware(function ($request, $next) {
                    $this->userPermissions = getUserPermissions(Auth::user()->id);
                    return $next($request);
                });
            }
    }
    public function index(){
//        return getUserPermissions(Auth::user()->id);
        if(!in_array(Auth::user()->user_type , UsersEnums::$systemIds) && (!in_array("listUsers" , $this->userPermissions))){
            return view('errors.403');
        }

        $data['roles'] = Role::getAll();
        $data['users'] = Member::getAll();
        return View('users.index' , $data);
    }

    public function saveUserData(Request $request){
        $parent = $this->parentSaveUserData($request->all());
        if($parent['errors'] == "1"){
            return [
              "errors" => 1,
              'msg' => getErrorMessageDataForLiTag($parent['msg'])
            ];
        }
        $user = $parent['userData'];
        return [
            "errors" => 0,
            'userUUID' => "#user_".$parent['userData']->uuid,
            'is_edit' => $parent['is_edit'],
            'viewHtml' => view('users/templates/allUser_template' , ['user' => $user , 'is_edit'=> $parent['is_edit']])->render(),
            'msg' => getErrorMessageDataForLiTag($parent['msg'] , "success")
        ];
    }

    public function getUserData($uuid = ''){
        return $user = $this->parentGetUserData($uuid);
    }

    public function userBlock($uuid = ''){
       $blockUser = $this->parentUserBlock($uuid);
       if($blockUser['errors'] == "1"){
            return \redirect()->back()->with("errors" , $blockUser['msg']);
       }
        return \redirect()->back()->with("success" , $blockUser['msg']);
    }

    public function userUnBlock($uuid = ''){
       $unBlockUser = $this->parentUserUnBlock($uuid);
       if($unBlockUser['errors'] == "1"){
            return \redirect()->back()->with("errors" , $unBlockUser['msg']);
       }
        return \redirect()->back()->with("success" , $unBlockUser['msg']);
    }




    public function userChangePassword(){
        return View('users.changePassword');
    }
    public function getUserRecovery(){
        return View('auth.passwordRecovery');
    }


    public function userResetPasswordByAdmin($uuid = ''){
        $resetUserPsasword = $this->parentUserResetPasswordByAdmin($uuid);
        if($resetUserPsasword['errors'] == "1"){
            return \redirect()->back()->with("errors" , $resetUserPsasword['msg']);
        }
        return \redirect()->back()->with("success" , $resetUserPsasword['msg']);
    }

    public function sendUserRecovery(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
            '_token' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $member = Member::where("email" , $request->email)->first();

//        // set Forget_token
//        $forget_token = time().'-'.$member->uuid;
//
//        $data =  ['message' => 'please use the link below to change your password <a href="'.url('user-reset-password/'.$member->uuid.'/'.$forget_token).'">Here</a>'];
//        $to = $request->email;
//        sendResetPassword($to , $data);
//        Member::edit(['forget_token' => $forget_token] , $member->uuid);

        $this->resetPasswordAndSendEmailToUser($member);
        return Redirect::back()->with('message' , trans('login.userPasswordReset'));
    }

    public function userChangeProfilePicture(){
        return View('users.changeProfilePicture');
    }


    public function userChangeSettings(){
        return View('users.changeSettings');
    }

    public function firstLogin(Request $request){
        // grab credentials from the request
         $credentials = $request;
        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = Auth::attempt(["email" => $credentials['email'] , "password" => $credentials['password'] ]) || Auth::attempt(["username" => $credentials['email'] , "password" => $credentials['password'] ])) {
                return Redirect::to('login')->withErrors([ trans('login.invalid_credentials')]);
            }
        } catch (AuthenticationException $e) {
            // something went wrong whilst attempting to encode the token
            return Redirect::to('login')->withErrors([ trans('login.could_not_create_token')]);

        }

        //check if user is blocked
        if(Auth::user()->user_status == "0"){
            Auth::logout();
            return Redirect::to('login')->withErrors([ trans('login.sorryThisUserBlocked')]);
        }

        //check if user is just registered
        if(Auth::user()->just_registered == "1" ){
            //redirect to enter new Complex password
            $forgetToken = time();
            Member::edit(['forget_token' => $forgetToken] , Auth::user()->uuid);
            return Redirect::to('user-reset-password/'.Auth::user()->uuid.'/'.$forgetToken);
        }

        return Redirect::to('/');
    }

    public function userResetPassword($userUUID = '' , $userToken = ''){
        $member = Member::where("uuid" , $userUUID)->where('forget_token' , $userToken)->first();
        if(!count($member)){
            return View('errors.404');
        }
        return View('auth/userRecoverPassword' , ['member'=>$member]);
    }


    public function saveUserResetPassword(Request $request){

        $validator = Validator::make($request->all(), [
            'forget_token' => 'required|exists:users,forget_token',
            'user_uuid' => 'required|exists:users,uuid',
            'password' => 'required',
            'confirmPassword' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        $member = Member::where("uuid" , $request->user_uuid)->where("forget_token" , $request->forget_token)->first();
        if(!count($member)){
            return Redirect::back()
                ->withErrors([trans('login.invalid_credentials')])
                ->withInput();
        }
        Member::edit([
            'password' => Hash::make($request->password),
            'forget_token' => time().'-'.$member->uuid,
            'just_registered' => 0
        ] , $member->uuid);
        return Redirect::to('/');
    }

    public function email(){
        $data = ['message' => 'This is a test!'];
        $to = 'eng.mina23@gmail.com';
        testMail($to , $data);
        return "aaaaa";
    }



}