<?php
// changing Site Language
Route::get('/language/{lang}', 'SiteSettingController@getChangelanguage');

Route::get('lock-screen',  [
    'as' => 'lockScreen',
    'uses' => 'SiteSettingController@lockScreen'
]);

Route::get('login-page',  [
    'as' => 'loginPage',
    'uses' => 'SiteSettingController@loginPage'
]);

Route::get('reset-page',  [
    'as' => 'resetPage',
    'uses' => 'SiteSettingController@resetPage'
]);