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

Route::get('/', function () {
    return view('welcome');
});

//buat rute / jalan baru 
Route::get('/belajar', function () {
    echo '<h1>Hello Laravel</h1>';
});

//buat rute baru ambil data dari function controller di lempar ke View
// Route::get('belajarlaravel', 'HelloController@index');
// Route::get('belajarlaravel', 'HelloController@coba');
// Route::put('belajarlaravel/{id}/edit','HelloController@edit')
Route::resource('belajarlaravel', 'HelloController');


