<?php
namespace App\Http\Controllers;
use App\Enums\SiteEnums;
use App\Enums\UsersEnums;
use App\Models\GroupPermission;
use App\Models\Permissions;
use App\Models\Role;
use App\Models\RolePermissions;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Mcamara\LaravelLocalization\LaravelLocalization;
use Validator;
use Illuminate\Support\Facades\Auth;
class PermissionsController extends Controller
{
    function __construct() {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->userPermissions = getUserPermissions(Auth::user()->id);
            \Illuminate\Support\Facades\View::share('userPermissions', $this->userPermissions);
            return $next($request);
        });
    }
    public function index(){
        $permissions = Permissions::orderBy("id" , "DESC")->with("groupPermission")->paginate(SiteEnums::numOfPages);
        return View('permissions.index' )->with(["permissions" => $permissions]);
    }

    public function adminAddEditGroupPermission(Request $request){
        $inputs = array_except($request , ["_token"]);
        $is_edit = 0;
        if($request->uuid){
            $is_edit = 1;
        }
        if($is_edit == "1"){
            $validator = Validator::make($request->all(), [
                'name_ar' => 'required',
                'uuid' => 'required',
                'name_ar' => 'required',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'name_ar' => 'required',
                'name_en' => 'required',
            ]);

        }
//        return "aaaaaaaaaa'";
        if (!$validator->passes()) {
            return[
                "msg" => getErrorMessageDataForLiTag($validator->errors()->all() ),
                "errors" => 1
            ];
        }

//        check if uuid is not found then i must enter password
        if($request->uuid) {
//          check if valid uuid
            $checkIfGroupPermissionIsFound = GroupPermission::getGroupPermissionByUuId($request->uuid); // ();
            if (!count($checkIfGroupPermissionIsFound)) {
                return[
                    "msg" => getErrorMessageDataForLiTag([ trans('groupPermissions.noGroupPermissionFound')] ),
                    "errors" => 1
                ];
            }
        }
//        save Data
        if($is_edit == "1"){
            GroupPermission::updateGroupPermission($request->uuid , $inputs);
        }else{
            GroupPermission::add($inputs);
        }
        return [
            "msg" => getErrorMessageDataForLiTag([ trans('groupPermissions.groupPermissionsSaved')] , "success" ),
            "errors" => 0
        ];
    }

    public function adminAddEditPermission(Request $request){
        $inputs = array_except($request , ["_token"]);
        $is_edit = 0;
        if($request->uuid){
            $is_edit = 1;
        }
//        return $inputs;
        if($is_edit == "1"){
            $validator = Validator::make($request->all(), [
                'name_ar' => 'required',
                'uuid' => 'required',
                'group_permission_id' => 'required|exists:group_permissions,uuid',
                'permission_name' => 'required',
                'name_ar' => 'required',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'name_ar' => 'required',
                'group_permission_id' => 'required|exists:group_permissions,uuid',
                'permission_name' => 'required|unique:permissions,permission_name',
                'name_ar' => 'required',
            ]);

        }
//        return "aaaaaaaaaa'";
        if (!$validator->passes()) {
            return[
                "msg" => getErrorMessageDataForLiTag($validator->errors()->all() ),
                "errors" => 1
            ];
        }

//        check if uuid is not found then i must enter password
        if($request->uuid) {
//          check if valid uuid
            $checkIfPermissionIsFound = Permissions::getPermissionByUuId($request->uuid); // ();
            if (!count($checkIfPermissionIsFound)) {
                return[
                    "msg" => getErrorMessageDataForLiTag([ trans('groupPermissions.noPermissionFound')] ),
                    "errors" => 1
                ];
            }
            //check ifthe permission name is already exist for another permission
            $checkValidPermissionName = Permissions::getPermissionByPermissionName($request->permission_name);
            if(count($checkValidPermissionName)){
                if($checkValidPermissionName->uuid != $request->uuid){
                    return[
                        "msg" => getErrorMessageDataForLiTag([ trans('groupPermissions.sorryThsPermissionNameAlreadyExistforAnotherPermission')] ),
                        "errors" => 1
                    ];
                }
            }
        }

        //getGroupPermission_id
        $groupPermission = GroupPermission::getGroupPermissionByUuId($request->group_permission_id);
        $inputs['group_permission_id'] = $groupPermission->id;

//        return $inputs;
//        save Data
        if($is_edit == "1"){
            Permissions::updatePermission($request->uuid , $inputs->toArray());
        }else{
            Permissions::add($inputs);
        }
        return [
            "msg" => getErrorMessageDataForLiTag([ trans('groupPermissions.permissionsSaved')] , "success" ),
            "errors" => 0
        ];
//        return $this->parentAddEditUser($inputs);
    }

    public function adminListAllGroupPermission(Request $request , $returnType = 0){
        $GroupPermissions = GroupPermission::getAll();
        if($request->ajax()){
            if(!count($GroupPermissions)){
                return [
                    "msg" => trans('groupPermissions.noGroupPermissionsFound'),
                    "errors" => 1,
                ];
            }

            $html = '';
            if($returnType == "1"){
                foreach ($GroupPermissions as $groupPermission){
                    $html .= "<option value='".$groupPermission->uuid."'>".$groupPermission->name_en."</option>";
                }
            }else{
                foreach ($GroupPermissions as $groupPermission){
                    $html .= View('permissions.templates.allGroupPermissions_template' , ["groupPermission" => $groupPermission])->render();
                }
            }
            return [
                'msg' => $html,
                'errors' => 0
            ];
        }else{
            return "not Ajax";
        }
    }

    public function adminGetGroupPermissionData($uuid =''){
        $groupPermission = GroupPermission::getGroupPermissionByUuId($uuid);
        if(!count($groupPermission)){
            return [
                "msg" => trans('groupPermissions.noGroupPermissionFoundWithThisData'),
                "errors" => 1
            ];
        }

        return [
            "msg" => $groupPermission,
            "errors" => 0
        ];
    }
    public function adminGetPermissionData($uuid =''){
        $permission = Permissions::getPermissionByUuId($uuid);
        if(!count($permission)){
            return [
                "msg" => trans('groupPermissions.noPermissionFoundWithThisData'),
                "errors" => 1
            ];
        }
        $permission->group_permission_id = $permission->groupPermission->uuid;
        return [
            "msg" => $permission,
            "errors" => 0
        ];
    }


//    start Roles Section
    public function getAllRoles(){
//        if(!in_array(Auth::user()->user_type , UsersEnums::$systemIds) && !in_array("listRoles" , $this->userPermissions)){
//            return view('errors.403');
//        }
        $groupPermissions = GroupPermission::with(['permissions'])->get();
        $allRoles = Role::all();
        return View('roles.index' )->with(["groupPermissions" => $groupPermissions , "roles" => $allRoles]);
    }


    public function adminAddEditRole(Request $request){
//        if(!in_array(Auth::user()->user_type , UsersEnums::$systemIds) && !in_array("addRoles" , $this->userPermissions)){
//            return[
//                "msg" => getErrorMessageDataForLiTag([trans('errors.youDontHavePermissions')] ),
//                "errors" => 1
//            ];
//        }
        $inputs = array_except($request , ["_token"]);
        $is_edit = 0;
        if($request->uuid){
            $is_edit = 1;
        }
        if($is_edit == "1"){
            $validator = Validator::make($request->all(), [
                'name_ar' => 'required',
                'uuid' => 'required',
                'name_ar' => 'required',
            ]);
        }else{
            $validator = Validator::make($request->all(), [
                'name_ar' => 'required',
                'name_en' => 'required',
            ]);

        }
        if (!$validator->passes()) {
            return[
                "msg" => getErrorMessageDataForLiTag($validator->errors()->all() ),
                "errors" => 1
            ];
        }

//        check if uuid is not found then i must enter password
        if($request->uuid) {
//          check if valid uuid
            $checkIfRoleIsFound = Role::getRoleByUuId($request->uuid);
            if (!count($checkIfRoleIsFound)) {
                return[
                    "msg" => getErrorMessageDataForLiTag([ trans('groupPermissions.noRolesFound')] ),
                    "errors" => 1
                ];
            }
        }
//        save Data
        $role_id = 0;
        if($is_edit == "1"){
            $role_id = $checkIfRoleIsFound->id;
            $addRole = Role::updateRole($request->uuid , ["name_ar" => $request->name_ar , "name_en" => $request->name_en]);
            $deleteRole = RolePermissions::where("role_id" , $checkIfRoleIsFound->id)->delete();
        }else{
            // add Role To Roles Modal
            $addRole = Role::add(["name_ar" => $request->name_ar , "name_en" => $request->name_en]);
            $role_id = $addRole->id;
        }

        if($request->permissions != ""){
            $allPermissions = explode(":::" , $request->permissions);
            $getAllPermissions = Permissions::whereIn("uuid" , $allPermissions)->get();
            if(count($getAllPermissions)){
                foreach ($getAllPermissions as $permission){
                    // add to role Permissions Table
                    $addRolePermission = RolePermissions::add([
                        "permission_id" => $permission->id ,
                        "role_id" => $role_id
                    ]);

                }
            }
        }
        return [
            "msg" => getErrorMessageDataForLiTag([ trans('groupPermissions.rolesSaved')] , "success" ),
            "errors" => 0,
            "is_edit" => $is_edit
        ];
    }

    public function adminGetRoleData($uuid =''){
        if(!in_array(Auth::user()->user_type , UsersEnums::$systemIds) && !in_array("editRoles" , $this->userPermissions)){
            return view('errors.403');
        }
        $groupPermissions = GroupPermission::with(['permissions'])->get();
        $role = Role::getRoleByUuId($uuid);
        $permissionsUUIDs = array();
        if(count($role)){
            if(count($role->permissions)){
                foreach ($role->permissions as $permission){
                    if($permission->permissionData){
                        array_push($permissionsUUIDs , $permission->permissionData->uuid);
                    }
                }
            }
            $role->permissionsUUIDs = $permissionsUUIDs;
            return view('roles.edit')->with([
                'groupPermissions' => $groupPermissions,
                'role' => $role,
            ]);
        }

        return view('errors.404');



    }

}