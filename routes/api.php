<?php

use Illuminate\Http\Request;


// 认证接口
Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
});


Route::namespace('Attachment')->group(function () {
    Route::post('attachment/import/user', 'ImportController@user');
});
