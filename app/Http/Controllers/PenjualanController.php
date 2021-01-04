<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;
use App\Penjualan;
use App\DetailPenjualan;

class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

class PenjualanController extends Controller
{
    public function index()
    {
        $status = 0;
        $barang = Barang::get('id');
        return view('penjualan.index')
            ->with(['status' => $status])
            ->with(['barang' => $barang]);
    }

    public function insert(Request $request)
    {
        $status = 1;
        Penjualan::create($request->all());
        
        $penjualan = Penjualan::get()->max('id');
        $barang = DetailPenjualan::where('penjualan_id', $penjualan);
        return view('penjualan.index')
            ->with(['status' => $status])
            ->with(['barang' => $barang])
            ->with(['penjualan' => $penjualan]);
    }

    public function update(Request $request)
    {
        $status = 1;
        $request->validate([
            'kode'=> 'required',
            'jumlah'=> 'required'
        ]);
        
        $input = Barang::where('kode', $request->kode)->firstOrFail();

        DetailPenjualan::create(array(
            'penjualan_id' => $request->penjualan_id,
            'barang_id' => $input->id,
            'qty' => $request->jumlah,
            'harga' => $input->harga_jual
        ));

        $penjualan = Penjualan::get()->max('id');
        // $total = DB::select('SELECT SUM(column_name)FROM table_name');
        $barang = DB::select('SELECT * FROM detail_penjualans WHERE penjualan_id = ?', array($penjualan));
        return view('penjualan.index')
            ->with(['status' => $status])
            ->with(['barang' => $barang])
            ->with(['penjualan' => $penjualan]);
    }
}
