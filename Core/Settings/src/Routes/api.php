<?php
Route::group(['namespace' => 'Core\Settings\Controllers'], function () {
    Route::resource('settings', 'SettingsController');
    Route::resource('sliders', 'SliderController');
    Route::resource('landing', 'LandingPageController');
    Route::get('landing/parents', ['as' => 'landing.parents', 'uses' => 'LandingPageController@parents']);
    Route::get('landing/parents/children', ['as' => 'landing.parents.children', 'uses' => 'LandingPageController@parentWithChildren']);
});