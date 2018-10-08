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
// Route Lantai
Route::get('/lantai', 'HomeController@lantai')->name('lantai');
Route::get('/lantai2', 'HomeController@lantai2')->name('lantai2');
Route::get('/lantai3', 'HomeController@lantai3')->name('lantai3');
Route::get('/lantai4', 'HomeController@lantai4')->name('lantai4');
Route::get('/lantai5', 'HomeController@lantai5')->name('lantai5');
Route::get('/lantai6', 'HomeController@lantai6')->name('lantai6');

Route::resource('loket','LoketController');
Route::get('/loket/delete/{id}', 'LoketController@delete')->name('loket.delete');

// Route Tambah Gambar
Route::resource('inputImg','FileController');
Route::resource('inputImgFoot','FotterController');
Route::resource('inputImgSid','SidebarController');

// Route Tambah User
Route::resource('user','AddUserController');
// Tambah Petugas
Route::resource('petugas','addPetugasController');

// Route User
Route::get('/print-antrian/{id}', 'AntrianController@print')->name('print-antrian');

// Route User

Route::get('/layanan/{lantai}', 'HomeController@layanan')->name('layanan');
Route::get('/display', 'HomeController@display')->name('antrian')->middleware('verified');

Route::get('/utama','HomeController@utama')->name('utama');
Route::get('/monitor', 'HomeController@monitor')->name('monitor');
Route::get('/display', 'HomeController@display')->name('antrian');

