<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // AUTH ROUTES
    Route::get('/home', 'HomeController@index')->name('home');

    // ROLEADMIN ROUTES
    Route::group(['middleware' => 'RoleAdmin'], function () {
        Route::get('/admin', 'HomeController@admin');

        // 1. Categories Routes
        Route::get('/categories', 'CategoryController@index')->name('indexCategory');
        Route::post('/categories', 'CategoryController@store')->name('storeCategory');
        Route::get('/categories/edit/{id}', 'CategoryController@edit')->name('editCategory');
        Route::put('/categories/edit/{id}', 'CategoryController@update')->name('updateCategory');
        Route::delete('/categories/delete/{id}', 'CategoryController@destroy')->name('deleteCategory');

        // 2. Blog Routes
        Route::get('/blog', 'BlogController@index')->name('indexBlog');
        Route::post('/blog', 'BlogController@store')->name('storeBlog');
        Route::get('/blog/edit/{id}', 'BlogController@edit')->name('editBlog');
        Route::put('/blog/edit/{id}', 'BlogController@update')->name('updateBlog');
        Route::delete('/blog/delete/{id}', 'BlogController@destroy')->name('deleteBlog');
    });

    // ROLEMEMBER ROUTES
    Route::group(['middleware' => 'RoleMember'], function () {
        Route::get('/member', 'HomeController@member');
    });
});
