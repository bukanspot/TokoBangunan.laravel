<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/', 'DashboardController');

// Pembelian
Route::get('/pembelian', 'PembelianController@create');
Route::post('/pembelian', 'PembelianController@store');

// Penjualan
Route::view('/penjualan', 'penjualan');

// Stok Barang
Route::get('/stok', 'StokController@index');