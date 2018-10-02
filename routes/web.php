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

Route::Resource('/buat','BuatController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lantai', 'HomeController@lantai')->name('lantai');
Route::get('/lantai1', 'HomeController@lantai1')->name('lantai1');

Route::resource('loket','LoketController');

Route::get('/lantai2', 'HomeController@lantai2')->name('lantai2');
Route::get('/lantai3', 'HomeController@lantai3')->name('lantai3');
Route::get('/lantai4', 'HomeController@lantai4')->name('lantai4');
Route::get('/lantai5', 'HomeController@lantai5')->name('lantai5');
Route::get('/lantai6', 'HomeController@lantai6')->name('lantai6');

Route::get('/layanan', 'HomeController@layanan')->name('layanan');
Route::get('/display', 'HomeController@display')->name('antrian');

Route::get('/utama','HomeController@utama')->name('utama');
Route::get('/index', 'HomeController@index1')->name('index1');
Route::get('/display', 'HomeController@display')->name('antrianUtama');
Route::get('/monitor', 'HomeController@monitor')->name('monitor');
