<?php
Route::group(['namespace' => 'Core\Admin\Controllers' , 'middleware' => ['auth:'.SUPER_ADMIN]],function(){
    Route::resource('admins', 'AdminController');
});