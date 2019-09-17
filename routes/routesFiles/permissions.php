<?php
//
//Route::get('permissions',[
//    'as'=>'permissions',
//    'uses'=> 'PermissionsController@index'
//]);
//
//Route::get('permissions/all',[
//    'as'=>'getAllPermissions',
//    'uses'=> 'PermissionsController@getAllPermissions'
//]);
//
//Route::post('permissions/add',[
//    'as'=>'addPermission',
//    'uses'=> 'PermissionsController@addPermission'
//]);
//
//Route::post('permissions/edit',[
//    'as'=>'editPermission',
//    'uses'=> 'PermissionsController@editPermission'
//]);
//
//Route::get('permissions/delete',[
//    'as'=>'deletePermission',
//    'uses'=> 'PermissionsController@deletePermission'
//]);
//
//Route::get('permissions/dublicate',[
//    'as'=>'dublicatePermission',
//    'uses'=> 'PermissionsController@dublicatePermission'
//]);


Route::get('permissions',[
    'as'=>'permissions',
    'uses'=> 'PermissionsController@index'
]);

Route::post('groups/add',[
    'as'=>'adminAddEditGroupPermission',
    'uses'=> 'PermissionsController@adminAddEditGroupPermission'
]);

Route::post('permissions/add',[
    'as'=>'adminAddEditPermission',
    'uses'=> 'PermissionsController@adminAddEditPermission'
]);

Route::get('groups/list/{id?}',[
    'as'=>'adminListAllGroupPermission',
    'uses'=> 'PermissionsController@adminListAllGroupPermission'
]);

Route::get('groups/get-group-permission-data/{id?}',[
    'as'=>'adminGetGroupPermissionData',
    'uses'=> 'PermissionsController@adminGetGroupPermissionData'
]);

Route::get('groups/get-permission-data/{id?}',[
    'as'=>'adminGetPermissionData',
    'uses'=> 'PermissionsController@adminGetPermissionData'
]);



//Route::get('permissions/dublicate',[
//    'as'=>'dublicatePermission',
//    'uses'=> 'PermissionsController@dublicatePermission'
//]);

/**\
 *  Start Roles Routes
 */

Route::get('roles',[
    'as'=>'getAllRoles',
    'uses'=> 'PermissionsController@getAllRoles'
]);

Route::post('role/add',[
    'as'=>'adminAddEditRole',
    'uses'=> 'PermissionsController@adminAddEditRole'
]);

Route::get('role/get-role-data/{id?}',[
    'as'=>'adminGetRoleData',
    'uses'=> 'PermissionsController@adminGetRoleData'
]);
