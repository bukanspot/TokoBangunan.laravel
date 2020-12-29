<?php

use Illuminate\Support\Facades\Route;

// Penjualan
Route::view('/', 'penjualan.penjualan');

// Pembelian
Route::get('/pembelian', 'PembelianController@create');
Route::post('/pembelian', 'PembelianController@store');

// Stok Barang
Route::get('/stok', 'StokController@index');

// Dashboard
Route::get('/report', 'ReportController');