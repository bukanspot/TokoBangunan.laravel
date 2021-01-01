<?php

use Illuminate\Support\Facades\Route;

// Menu Utama
Route::get('/', 'MainController');

// Penjualan
Route::get('/penjualan', 'PenjualanController@index');

// Pembelian
Route::get('/pembelian', 'PembelianController@index');

// Barang
Route::get('/barang', 'BarangController@index');

// Jenis
Route::get('/jenis', 'JenisController@index');
Route::post('/jenis', 'JenisController@create'); 
Route::delete('/jenis/{jenis}', 'JenisController@destroy');
Route::patch('/jenis/{jenis}', 'JenisController@update');