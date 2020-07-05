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
    return view('erd.index');
});

Route::get('/artikel/create', 'ArtikelController@create'); // menampilkan halaman form

Route::post('/artikel', 'ArtikelController@store'); // menyimpan data

Route::get('/artikel/{id}/detail', 'ArtikelController@show')->name('artikel.detail'); // menampilkan 1

Route::get('/artikel', 'ArtikelController@index')->name('artikel.index'); // menampilkan semua

Route::get('/artikel/{id}/edit', 'ArtikelController@edit')->name('artikel.edit'); // menampilkan form untuk edit Artikel

Route::post('/artikel/{id}/update', 'ArtikelController@update'); // menyimpan perubahan dari form edit

Route::get('/artikel/{id}/delete', 'ArtikelController@delete'); // menghapus data dengan id