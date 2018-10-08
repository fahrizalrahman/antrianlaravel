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

Route::get('/', 'HomeController@home')->middleware('verified');


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
Route::get('/layanan/{id}', 'HomeController@layanan');
Route::get('/display', 'HomeController@display')->name('antrian')->middleware('verified');

Route::get('/utama','HomeController@utama')->name('utama');
Route::get('/monitor', 'HomeController@monitor')->name('monitor');
Route::get('/display', 'HomeController@display')->name('antrian');

<<<<<<< HEAD
=======
//route dashboard pelanggan
Route::get('/profile-edit','ProfileController@editProfile')->name('profile');
Route::resource('profile','ProfileController');
Route::get('/monitor-tiket','ProfileController@monitorTiket')->name('monitor-tiket');
Route::get('/lihat-tiket/{id}','ProfileController@lihatTiket')->name('lihat-tiket');


/*Custom*/
Route::get('/proses/total', 'pelayananController@total_antrian');
Route::get('/proses/sisa', 'pelayananController@sisa_antrian');
Route::get('/proses/akhir', 'pelayananController@nomor_terakhir');
Route::get('/proses/konversi_nomor', 'pelayananController@konversi');
Route::get('/proses/layanan/update', 'pelayananController@update_status');



Route::resource('sublayanan','SublayananController');
Route::get('/sublayanan/delete/{id}', 'SublayananController@delete')->name('sublayanan.delete');

Route::get('pilih-sublayanan', 'ProfileController@pilih_sublayanan');
>>>>>>> cb9c27cb771930aec605206fd4fee22dc24a3d6c
