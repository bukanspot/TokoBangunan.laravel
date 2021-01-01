<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::get();
        return view('main.barang')
            ->with(['barang' => $barang])
        ;
    }
}
