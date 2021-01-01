<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;

class StokController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $stok = Barang::get();
        // $stok = Barang::table('barangs')
        //     ->where('stok', '<=', 20)
        //     ->get();

        // return view('report.stok', compact('stok'))
        //     // ->with(['barang' => $barang])
        //     ->where($stok->stok, '<=', 20);
        // ;

        // $stok = DB::table('barangs', 'jenis', 'satuan')
        //     ->where('barang.jenis_id', '=', 'jenis.id')
        //     ->where('barang.satuan_id', '=', 'satuan.id')
        //     ->where('stok', '<=', 20)
        //     ->get();

        $stok = DB::select('SELECT barangs.`nama_barang`, jenis.`jenis`, satuans.`satuan`, barangs.`stok` FROM barangs, jenis, satuans WHERE barangs.`jenis_id` = jenis.`id` AND barangs.`satuan_id` = satuans.`id` AND barangs.`stok` <= 20 ORDER BY stok');
        // $jumlah = DB::select('SELECT COUNT(barangs.`stok` <= 20) FROM barangs');
        return view('report.stok', compact('stok'));
    }
}
