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
    return view('home');
});

Route::get('/login', 'App\Http\Controllers\AuthController@showLogin')->middleware('guest');
Route::get('/register', 'App\Http\Controllers\AuthController@showRegister')->middleware('guest');
Route::post('/register', 'App\Http\Controllers\AuthController@prosesRegister')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\AuthController@prosesLogin')->middleware('guest');
Route::post('/logout', 'App\Http\Controllers\AuthController@prosesLogout');
