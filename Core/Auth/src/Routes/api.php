<?php

Route::group(['namespace' => 'Core\Auth\Controllers', 'prefix' => 'super'], function () {
    Route::post('login', ['as' => 'super.login', 'uses' => 'AuthController@login']);
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', ['as' => 'super.logout', 'uses' => 'AuthController@logout']);
        Route::get('refresh', ['as' => 'super.refresh', 'uses' => 'AuthController@refresh']);
    });
});