<?php


Route::get('/',[
    'as'=>'/',
    'uses'=> 'UserController@index'
]);

Route::get('users',[
    'as'=>'users',
    'uses'=> 'UserController@index'
]);

Route::post('users/add',[
    'as'=>'saveUserData',
    'uses'=> 'UserController@saveUserData'
]);

Route::post('users/edit',[
    'as'=>'editUser',
    'uses'=> 'UserController@editUser'
]);

Route::post('login',[
    'as'=>'login',
    'uses'=> 'LoginController@login'
]);

Route::post('first-login',[
    'as'=>'firstLogin',
    'uses'=> 'UserController@firstLogin'
]);

Route::post('submit-first-login',[
    'as'=>'submitFirstLogin',
    'uses'=> 'UserController@submitFirstLogin'
]);

Route::get('logout',[
    'as'=>'userLogout',
    'uses'=> 'Auth\LoginController@logout'
]);

Route::get('home',[
    'as'=>'homess',
    'uses'=> 'Auth\LoginController@home'
]);



Route::get('get-user-data/{uuid?}',[
    'as'=>'getUserData',
    'uses'=> 'UserController@getUserData'
]);

Route::get('user-change-password',[
    'as'=>'userChangePassword',
    'uses'=> 'UserController@userChangePassword'
]);

Route::get('user-change-profile-picture',[
    'as'=>'userChangeProfilePicture',
    'uses'=> 'UserController@userChangeProfilePicture'
]);

Route::get('user-change-settings',[
    'as'=>'userChangeSettings',
    'uses'=> 'UserController@userChangeSettings'
]);

// user recover password  : GET
Route::get('get-user-recovery',[
    'as'=>'getUserRecovery',
    'uses'=> 'UserController@getUserRecovery'
]);

// user recover password  : POST
Route::post('send-user-recovery',[
    'as'=>'sendUserRecovery',
    'uses'=> 'UserController@sendUserRecovery'
]);


// user recover password  : GET
//this route will be send through email
Route::get('user-reset-password/{uuid?}/{forget_token?}',[
    'as'=>'userResetPassword',
    'uses'=> 'UserController@userResetPassword'
]);

// user recover password  : GET
Route::post('user-reset-password',[
    'as'=>'saveUserResetPassword',
    'uses'=> 'UserController@saveUserResetPassword'
]);

Route::get('user-reset-password-by-admin/{id?}',[
    'as'=>'userResetPasswordByAdmin',
    'uses'=> 'UserController@userResetPasswordByAdmin'
]);

// user Block
Route::get('user-block/{id?}',[
    'as'=>'userBlock',
    'uses'=> 'UserController@userBlock'
]);

// user Un Block
Route::get('user-un-block/{id?}',[
    'as'=>'userUnBlock',
    'uses'=> 'UserController@userUnBlock'
]);



