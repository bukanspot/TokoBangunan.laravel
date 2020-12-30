<?php

use Illuminate\Support\Facades\Route;

// Penjualan
Route::get('/', 'PenjualanController@index');
Route::get('/insert', 'PenjualanController@create');

// Pembelian
Route::get('/pembelian', 'PembelianController@index');
Route::post('/pembelian/insert', 'PembelianController@store');
Route::post('/pembelian/jenis', 'PembelianController@jenis');

// Stok Barang
Route::get('/stok', 'StokController@index');

// Report
Route::get('/report', 'ReportController');

// Lainnya
Route::get('/lainnya', 'LainnyaController@index');
Route::get('/lainnya/tambah/jenis', 'LainnyaController@create');

// Tambah
Route::get('/jenis', 'TambahController@jenis');