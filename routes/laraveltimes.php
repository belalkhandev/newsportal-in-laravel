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
    Route::get('/post', 'FrontendController@post')->name('fr.post');
    Route::get('/category', 'FrontendController@category')->name('fr.category');
});
