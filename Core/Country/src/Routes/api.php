<?php
Route::group(['namespace' => 'Core\Country\Controllers'],function(){
    Route::resource('countries', 'CountryController');
});