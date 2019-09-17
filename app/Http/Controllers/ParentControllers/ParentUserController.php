<?php
namespace App\Http\Controllers\ParentControllers;
use App\Http\Controllers\Controller;
use App\Enums\UsersEnums;
use App\Models\Member;
use App\Models\Role;
use App\Models\UserRole;
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
use Webpatser\Uuid\Uuid;


class ParentUserController extends Controller
{
    public function parentSaveUserData($inputs = []){
        //check normal Validation
        $validation = $this->checkSaveUserNormalValidation($inputs);
        if($validation['errors'] == "1"){
            return $validation;
        }else{
            $inputs = (object) $inputs;
            if($inputs->user_id){
                $user = Member::getByUUID($inputs->user_id);
                if(!count($user)){
                    return [
                        'errors' => 1,
                        'msg' => [trans('users.thisUserNotFound')]
                    ];
                }
                $validateEditUser = $this->checkSaveUserEditData($inputs , $user);
                if($validateEditUser['errors'] == "1"){
                    return $validateEditUser;
                }
                //delete old roles
                UserRole::where("user_id" , $user->id)->delete();
                //add new roles
                $this->addUserRoles($inputs , $user);
                //save data
                Member::edit([
                    'name' => $inputs->name,
                    'username' => $inputs->username,
                    'email' => $inputs->email,
                    'user_type' => $inputs->user_type,
                ] , $user->uuid);
                $member  = $user;
            }else{
                $validateAddUser = $this->checkSaveUserAddData($inputs);
                if($validateAddUser['errors'] == '1'){
                    return $validateAddUser;
                }
                //save data
              $member =  Member::add([
                   'name' => $inputs->name,
                   'username' => $inputs->username,
                   'email' => $inputs->email,
                   'password' => Hash::make($inputs->password),
                  'user_type' =>$inputs->user_type,
                  'just_registered' => 1
                ]);
                //add new roles
                if(isset($inputs->roles) && $inputs->roles != ""){
                     $this->addUserRoles($inputs , $member);
                }
            }

            return [
                "errors" =>0,
                'userData' => $member,
                'is_edit' => (isset($inputs->user_id) && $inputs->user_id != "") ? 1 :0 ,
                'msg' => [trans('users.datSaved')]
            ];
        }

    }

    public function parentUserBlock($uuid = ''){
        //check if this user exist
        $checkUser = Member::getByUUID($uuid);
        if(!count($checkUser)){
            return [
                'errors' => 1,
                'msg' => [trans('users.thisUserNotFound')]
            ];
        }
        //update block
        Member::edit(['user_status' => 0] , $uuid);
        return [
            'errors' => 0,
            'msg' => trans('users.userblocked')
        ];

    }

    public function parentUserResetPasswordByAdmin($uuid = ''){
        //check if this user exist
        $checkUser = Member::getByUUID($uuid);
        if(!count($checkUser)){
            return [
                'errors' => 1,
                'msg' => [trans('users.thisUserNotFound')]
            ];
        }

        $this->resetPasswordAndSendEmailToUser($checkUser);
        return [
            'errors' => 0,
            'msg' => trans('users.userPasswordReset')
        ];

    }

    public function parentUserUnBlock($uuid = ''){
        //check if this user exist
        $checkUser = Member::getByUUID($uuid);
        if(!count($checkUser)){
            return [
                'errors' => 1,
                'msg' => [trans('users.thisUserNotFound')]
            ];
        }
        //update block
        Member::edit(['user_status' => 1] , $uuid);
        return [
            'errors' => 0,
            'msg' => trans('users.userUnblocked')
        ];

    }


    protected function resetPasswordAndSendEmailToUser($member = []){
        // set Forget_token
        $forget_token = time().'-'.$member->uuid;

        $data =  ['message' => trans('users.please use the link below to change your password ').'<a href="'.url('user-reset-password/'.$member->uuid.'/'.$forget_token).'">'.trans('users.here').'</a>'];
        $to = $member->email;
        sendResetPassword($to , $data);
        Member::edit(['forget_token' => $forget_token] , $member->uuid);
    }

    // check normal validation for add and edit
    private function checkSaveUserNormalValidation($inputs = []){
        $validator = Validator::make($inputs, [
            'name' => 'required',
            'password' => '',
            'email' => 'required',
            'username' => 'required',
            'user_type' => 'required|min:0|max:1',
            'user_id' => '',
            'roles' => '',
        ]);

        if ($validator->fails()) {
            return [
                "errors" => 1,
                'msg' => $validator->errors()->all()
            ];
        }
        return [
            'errors' => 0,
            "msg" => $inputs
        ];
    }

    public function parentGetUserData($uuid = ''){
        $user = Member::getByUUID($uuid);
//        return $user->roles[0]->roleData;
        $error = 0;
        if(!count($user)){
            $error = 1;
            $msg = trans('users.noUserFoundWithThisData');
        }else{
            $array = array();
            $roles = $user->roles;
            foreach ($roles as $role){
                array_push($array , $role->roleData->uuid);
            }
            $user['rolesUUID']  = $array;
            $msg = $user;
        }
        return [
            'errors' => $error,
            'msg' => $msg
        ];
    }

    /**
     * i use this function to check if the username is exist for andother user
     * or email exist for another user
     * or invalid user _d
     * @param array $inputs
     */
    private function checkSaveUserEditData($inputs = [] , $user = []){
        $errors = 0;
        $msg = '';
        $checkUsername = Member::getByUsername($inputs->username);
        $checkEmail = Member::getByEmail($inputs->email);
        //check if this email is uniq and not mine
        if(count($checkEmail)){
            if($checkEmail->id != $user->id ){
                $errors = 1;
                $msg =trans('users.thisEmailIsAlreadyExist');
            }
        }
//        check if this username is uniq and not mine
        if(count($checkEmail)){
            if($checkEmail->id != $user->id ){
                $errors = 1;
                $msg =trans('users.thisEmailIsAlreadyExist');
            }
        }
        return ['errors'=>$errors,'msg'=>[$msg]];
    }

    /**
     * i use this function to check if the username is exist for andother user
     * or email exist for another user
     * @param array $inputs
     * @return array
     */
    private function checkSaveUserAddData($inputs = []){
        $errors = 0;
        $msg = '';
        $checkUsername = Member::getByUsername($inputs->username);
        $checkEmail = Member::getByEmail($inputs->email);
        //check if this email is uniq and not mine
        if(count($checkUsername)){
            $errors = 1;
            $msg = trans('users.thisEmailAlreadyExistForAnotherUsere');
        }
        //check if this user name is uniq and not mine
        if(count($checkUsername)){
            $errors = 1;
            $msg = trans('users.thisusernameAlreadyExistForAnotherUsere');
        }
        return ['msg' => [$msg], 'errors' => $errors];
    }

    private function addUserRoles($inputs = [] , $member=''){
        $roles = explode(',' , $inputs->roles);
        foreach ($roles as $role){
            $getRoleId = Role::getRoleByUuId($role);
            if(count($getRoleId)){
                UserRole::add([
                    "role_id" => $getRoleId->id,
                    'user_id' => $member->id
                ]);
            }
        }
    }
}