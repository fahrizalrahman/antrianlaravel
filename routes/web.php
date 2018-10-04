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

Route::get('/', 'AntrianController@logout')->middleware('verified');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/lantai', 'HomeController@lantai')->name('lantai');

Route::resource('loket','LoketController');
Route::get('/loket/delete/{id}', 'LoketController@delete')->name('loket.delete');

// Route Tambah User
Route::Get('/User','UserController@createUser')->name('loket.add');
Route::get('/pelanggan','UserController@addPelanggan')->name('loket.addPelanggan');
// Route User
Route::get('/print-antrian/{id}', 'AntrianController@print')->name('print-antrian');

// Route User

Route::get('/layanan/{lantai}', 'HomeController@layanan')->name('layanan');
Route::get('/display', 'HomeController@display')->name('antrian')->middleware('verified');

Route::get('/utama','HomeController@utama')->name('utama');
Route::get('/monitor', 'HomeController@monitor')->name('monitor');
Route::get('/display', 'HomeController@display')->name('antrian');
