<?php

use Illuminate\Support\Facades\Route;

// Penjualan
Route::get('/', 'PenjualanController@index');
Route::get('/insert', 'PenjualanController@create');

// Pembelian
Route::get('/pembelian', 'PembelianController@index');
Route::post('/pembelian/insert', 'PembelianController@store');

// Stok Barang
Route::get('/stok', 'StokController@index');

// Dashboard
Route::get('/report', 'ReportController');