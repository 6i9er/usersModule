<?php

use  App\Enums\UsersEnums;
function isAdmin(){
    if(in_array(Auth::user()->type , UsersEnums::$systemIds)){
        return true;
    }
    return false;
}

function getUserPermissions ($user_id = 0){
//    $getRoles = \App\Models\UserRole::where("user_id" , $user_id)->with("roleData" )->get();
//    $returnArray = array();
//    if(count($getRoles)){
//        foreach ($getRoles as $getRole){
//            if(count($getRole->roleData->permissions)){
//                $getRole->roleData->permissions;
//                foreach($getRole->roleData->permissions as $permission){
//                    if($permission->permissionData){
//                        array_push($returnArray , $permission->permissionData->permission_name);
//                    }
//                }
//            }
//        }
//    }

    $getRoles = \App\Models\UserRole::where("user_id" , $user_id)->with("roleData" )->select('role_id')->get();
    $permissions =  \App\Models\RolePermissions::whereIn("role_id" , $getRoles)->with("permissionData")->get();
    $returnArray = array();
    if(count($permissions)){
        foreach($permissions as $permission){
            if($permission){
                array_push($returnArray , $permission->permissionData->permission_name);
            }
        }
    }


    return $returnArray;
}

function removeJavaScriptTags($text = ''){
    return preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', "", $text);
}