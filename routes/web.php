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

// Route Antrian
Route::get('/print-antrian/{id}', 'AntrianController@print')->name('print-antrian');
Route::get('/print-antrian-sub/{id}/{id_sub}', 'AntrianController@printSub')->name('print-antrian-sub');


// Route User
Route::get('/layanan/{id}', 'HomeController@layanan');
Route::get('/display', 'HomeController@display')->name('antrian')->middleware('verified');

Route::get('/utama','HomeController@utama')->name('utama');
Route::get('/monitor', 'HomeController@monitor')->name('monitor');
Route::get('/display', 'HomeController@display')->name('antrian');

//route dashboard pelanggan
Route::get('/profile-edit','ProfileController@editProfile')->name('profile');
Route::resource('profile','ProfileController');
Route::get('/monitor-tiket','AntrianController@monitorTiket')->name('monitor-tiket');
Route::get('/lihat-tiket/{id}','AntrianController@lihatTiket')->name('lihat-tiket');


/*Custom*/
Route::get('/proses/total', 'pelayananController@total_antrian');
Route::get('/proses/sisa', 'pelayananController@sisa_antrian');
Route::get('/proses/akhir', 'pelayananController@nomor_terakhir');
Route::get('/proses/berikut', 'pelayananController@nomor_berikut');
Route::get('/proses/konversi_nomor', 'pelayananController@konversi');
Route::get('/proses/check status', 'pelayananController@check_status');
Route::get('/proses/layanan/update', 'pelayananController@update_status');


//sublayanan
Route::resource('sublayanan','SublayananController');
Route::get('/sublayanan/delete/{id}', 'SublayananController@delete')->name('sublayanan.delete');

Route::get('pilih-sublayanan', 'AntrianController@pilih_sublayanan');


Route::get('count-antrian', 'AntrianController@count_antrian');
Route::get('cek-setting-hari', 'AntrianController@cekSettingHari');
Route::get('cek-setting-hari-sub', 'AntrianController@cekSettingHariSub');



//setting hari
Route::resource('settinghari','SettingHariController');
Route::get('/settinghari/delete/{id}', 'SettingHariController@delete')->name('settinghari.delete');


Route::get('cek-pilih-lantai', 'SettingHariController@cekPilihLantai');


/*Route pelayanan loket*/
Route::get('/layanan-antrian/{lantai}/{layanan}/{loket}', 'LoketController@petugas');

/*Monitoring Layar*/
Route::get('/monitoring/1', 'monitoringController@layanan_satu');
Route::get('/monitoring/2', 'monitoringController@layanan_dua');
Route::get('/monitoring/3', 'monitoringController@layanan_tiga');
Route::get('/monitoring/4', 'monitoringController@layanan_empat');
Route::get('/monitoring/5', 'monitoringController@layanan_lima');
Route::get('/monitoring/6', 'monitoringController@layanan_enam');
Route::get('/monitoring/aktif', 'monitoringController@layanan_aktif');

//setting hari
Route::resource('settingharisub','SettingHariSubController');
Route::get('/settingharisub/delete/{id}', 'SettingHariSubController@delete')->name('settingharisub.delete');