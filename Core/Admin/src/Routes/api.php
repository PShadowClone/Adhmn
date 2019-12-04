<?php
Route::group(['namespace' => 'Core\Admin\Controllers'],function(){
    Route::resource('admin', 'AdminController');
});