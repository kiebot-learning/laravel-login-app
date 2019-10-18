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

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index');
Route::get('/login/success', 'LoginController@successLogin');
Route::get('/logout', 'LoginController@logout');
Route::post('/login/checkLogin', 'LoginController@checkLogin');