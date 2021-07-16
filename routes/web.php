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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//mahasiswa
route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
route::get('mahasiswa-create', 'MahasiswaController@create')->name('tambah-mahasiswa');
route::post('mahasiswa-save', 'MahasiswaController@store')->name('simpan-mahasiswa');
route::get('mahasiswa-edit/{id}', 'MahasiswaController@edit')->name('edit-mahasiswa');
route::post('mahasiswa-update/{id}', 'MahasiswaController@update')->name('update-mahasiswa');
route::get('mahasiswa-delete/{id}', 'MahasiswaController@destroy')->name('hapus-mahasiswa');

//makul
route::get('makul', 'MakulController@index')->name('makul');
route::get('makul-create', 'MakulController@create')->name('tambah-makul');
route::post('makul-save', 'MakulController@store')->name('simpan-makul');
route::get('makul-edit/{id}', 'MakulController@edit')->name('edit-makul');
route::post('makul-update/{id}', 'MakulController@update')->name('update-makul');
route::get('makul-delete/{id}', 'MakulController@destroy')->name('hapus-makul');

//nilai
route::get('nilai', 'NilaiController@index')->name('nilai');
route::get('nilai-create', 'NilaiController@create')->name('tambah-nilai');
route::post('nilai-save', 'NilaiController@store')->name('simpan-nilai');
route::get('nilai-edit/{id}', 'NilaiController@edit')->name('edit-nilai');
route::post('nilai-update/{id}', 'NilaiController@update')->name('update-nilai');
route::get('nilai-delete/{id}', 'NilaiController@destroy')->name('hapus-nilai');