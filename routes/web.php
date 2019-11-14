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

//router welcome laravel yang membawa pada homepage beasiswa polban
Route::get('home', function () {
    return view('template');
});


//route home
Route::get('/home', 'mahasiswa@home');

//route mahasiswa
Route::get('/profile', 'mahasiswa@index');
Route::get('/loginform','mahasiswa@login');
Route::get('/pilihform','mahasiswa@pilih_form');
Route::get('/form_data_diri','mahasiswa@form_data_diri');
Route::get('/form_data_keluarga','mahasiswa@form_data_keluarga');

Route::get('/simpan_data_diri','mahasiswa@simpan_data_diri');
Route::get('/simpan_data_keluarga','mahasiswa@simpan_data_keluarga');

//route list beasiswa
Route::get('/list_beasiswa', 'mahasiswa@list_beasiswa');
Route::get('/daftar_beasiswa', 'mahasiswa@daftar_beasiswa');


//route login
Route::get('/login', 'login_Controller@login');
Route::get('/logout', 'login_Controller@logout');


//route Wali dosen
Route::get('/dashboard_wali', 'WaliController@index');
