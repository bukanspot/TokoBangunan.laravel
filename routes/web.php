<?php

use Illuminate\Support\Facades\Route;

// Penjualan
Route::get('/', 'PenjualanController@index');
Route::get('/insert', 'PenjualanController@create');

// Pembelian
Route::get('/pembelian', 'PembelianController@index');
Route::post('/pembelian/insert', 'PembelianController@store');
Route::post('/pembelian/jenis', 'PembelianController@jenis');
Route::post('/pembelian/satuan', 'PembelianController@satuan');
Route::patch('/pembelian/stok/', 'PembelianController@update');

// Report
Route::get('/report', 'ReportController');
Route::get('/stok', 'StokController@index');

// Lainnya
Route::get('/lainnya', 'LainnyaController@index');
Route::get('/lainnya/jenis', 'LainnyaController@jenis');
Route::get('/lainnya/satuan', 'LainnyaController@satuan');

Route::get('/barang', 'BarangController');