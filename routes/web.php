<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'dashboard');
Route::view('/pembelian', 'pembelian');
Route::view('/penjualan', 'penjualan');
Route::view('/stok', 'stok');

Route::get('./#', function () {
    return view('sample');
});