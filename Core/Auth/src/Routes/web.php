<?php
Route::group(['namespace' => 'Core\Auth\Controllers'],function(){
    Route::resource('auth', 'AuthController');
});