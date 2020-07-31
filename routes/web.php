<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//newsportal admin/dashboard routes

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::namespace('Web')->group(function () {

        Route::prefix('admin')->group(function () {
            Route::get('/', 'DashboardController@index')->name('admin');
            Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');

            // category manage routes
            Route::prefix('category')->group(function () {
                Route::get('/', 'CategoryController@index')->name('admin.category.list');
                Route::get('/create', 'CategoryController@create')->name('admin.category.create');
                Route::post('/create', 'CategoryController@store')->name('admin.category.store');
                Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.category.edit');
                Route::post('/edit/{id}', 'CategoryController@update')->name('admin.category.update');
                Route::delete('/{id}/delete', 'CategoryController@destroy')->name('admin.category.delete');
            });

            // SubCategory manage routes
            Route::prefix('sub-category')->group(function () {
                Route::get('/', 'SubCategoryController@index')->name('admin.sub-category.list');
                Route::get('/create', 'SubCategoryController@create')->name('admin.sub-category.create');
                Route::post('/create', 'SubCategoryController@store')->name('admin.sub-category.store');
                Route::get('/edit/{id}', 'SubCategoryController@edit')->name('admin.sub-category.edit');
                Route::post('/edit/{id}', 'SubCategoryController@update')->name('admin.sub-category.update');
                Route::delete('/delete/{id}', 'SubCategoryController@destroy')->name('admin.sub-category.delete');
            });
        });

        

    });
});
