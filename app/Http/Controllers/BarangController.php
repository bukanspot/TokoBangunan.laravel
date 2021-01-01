<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::get();
        $jenis = Barang::get();
        $satuan = Barang::get();
        $edit = Barang::get();

        return view('main.barang')
            ->with(['barang' => $barang])
            ->with(['jenis' => $jenis])
            ->with(['satuan' => $satuan])
            ->with(['edit' => $edit])
        ;
    }

    public function create(Request $request)
    {
        Barang::create($request->all());
        return back();
    }

    public function destroy($id)
    {
        Barang::destroy($id);
        return back();
    }

}
