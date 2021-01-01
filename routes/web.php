<?php

use Illuminate\Support\Facades\Route;

// Menu Utama
Route::get('/', 'MainController');

// Penjualan
Route::get('/penjualan', 'PenjualanController@index');

// Pembelian
Route::get('/pembelian', 'PembelianController@index');