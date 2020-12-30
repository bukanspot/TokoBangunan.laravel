<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;
use App\Jenis;
use App\Satuan;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = DB::select('SELECT barang.`nama_barang`, barang.`kode`, jenis.`jenis`, satuan.`satuan`, barang.`stok` FROM barang, jenis, satuan WHERE barang.`id_jenis` = jenis.`id` AND barang.`id_satuan` = satuan.`id`');
        $jenis = DB::table('jenis')->get();
        $satuan = DB::table('satuan')->get();
        $pembelian = Barang::all();
        return view('pembelian.index')
            ->with(['barang'=>$barang])
            ->with(['jenis'=>$jenis])
            ->with(['satuan'=>$satuan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Barang::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pembelian = new Barang;
        // $pembelian->nama_barang = $request->namabarang;
        // $pembelian->kode = $request->kodebarang;
        // $pembelian->id_jenis = $request->jenis;
        // $pembelian->id_satuan = $request->satuan;
        // $pembelian->stok = $request->jumlah;
        // $pembelian->harga_jual = $request->harga;
        // $pembelian->keterangan = $request->keterangan;
        // PembelianController::create($request->all());
        // DB::insert('insert into barang (id_jenis, satuan, kode, nama_barang, stok, harga_jual, keterangan) values (?, ?, ?, ?, ?, ?, ?)', [1, 'Marc']);
        Barang::create($request->all());
        return redirect('/pembelian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function jenis(Request $request)
    {
        Jenis::create($request->all());
        return redirect('/pembelian');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function satuan(Request $request)
    {
        Satuan::create($request->all());
        return redirect('/pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
