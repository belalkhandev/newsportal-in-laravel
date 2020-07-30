<?php

/*
|--------------------------------------------------------------------------
| LaravelTimes Web Routes
|--------------------------------------------------------------------------
|
*/

// LaravelTimes Newsportal frontend routes
Route::namespace('Web')->group(function () {
    Route::get('/', 'FrontendController@index')->name('fr.home');
});
