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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/about','pages_controller@about');
Route::get('/kontak','pages_controller@kontak');

// route ke kontroller Pendaftaran
Route::resource('pendaftaran', 'PendaftaranController');

Route::resource('posts', 'PostController');
Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
