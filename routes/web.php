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
Route::get('/lantai', 'HomeController@lantai')->name('lantai');

Route::resource('loket','LoketController');
Route::get('/loket/delete/{id}', 'LoketController@delete')->name('loket.delete');

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

//route dashboard pelanggan
Route::get('/profile-edit','ProfileController@editProfile')->name('profile');
Route::resource('profile','ProfileController');
Route::get('/monitor-tiket','ProfileController@monitorTiket')->name('monitor-tiket');
Route::get('/lihat-tiket','ProfileController@lihatTiket')->name('lihat-tiket');


/*Custom*/
Route::get('/proses/total', 'pelayananController@total_antrian');
Route::get('/proses/sisa', 'pelayananController@sisa_antrian');
Route::get('/proses/akhir', 'pelayananController@nomor_terakhir');
Route::get('/proses/konversi_nomor', 'pelayananController@konversi');
Route::get('/proses/layanan/update', 'pelayananController@update_status');