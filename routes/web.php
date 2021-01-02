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
Route::post('/barang', 'BarangController@create');
Route::delete('/barang/{barang}', 'BarangController@destroy');
Route::patch('/barang/{barang}', 'BarangController@update');

// Jenis
Route::get('/jenis', 'JenisController@index');
Route::post('/jenis', 'JenisController@create'); 
Route::delete('/jenis/{jenis}', 'JenisController@destroy');
Route::patch('/jenis/{jenis}', 'JenisController@update');

//Satuan
Route::get('/satuan', 'SatuanController@index');
Route::post('/satuan', 'SatuanController@create'); 
Route::delete('/satuan/{satuan}', 'SatuanController@destroy');
Route::patch('/satuan/{satuan}', 'SatuanController@update');

// Report
Route::get('/stok', 'StokController');