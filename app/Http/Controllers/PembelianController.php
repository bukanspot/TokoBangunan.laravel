<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $barang = Barang::get();
        $jenis = Jenis::get();
        $satuan = Satuan::get();
        return view('pembelian.index')
            ->with(['barang' => $barang])
            ->with(['jenis' => $jenis])
            ->with(['satuan' => $satuan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        // menangkap data pencarian
		// $search = $request;
    
        // mengambil data dari table pegawai sesuai pencarian data
        // $hasil = DB::table('pegawai')
        // ->where('pegawai_nama','like',"%".$cari."%")
        // ->paginate();

        // $hasil = Barang::get()
        //     ->where('nama_barang', 'like', "%".$search."%");

        // $hasil = Barang::whereRaw('kode = ',$request->kode,' or nama_barang = ',$request->stok)->get();

        // // mengirim data pegawai ke view index
        // $barang = Barang::get();
        // $jenis = Jenis::get();
        // $satuan = Satuan::get();
        // return view('pembelian.index')
        //     ->with(['barang' => $barang])
        //     ->with(['jenis' => $jenis])
        //     ->with(['satuan' => $satuan]);

        return $request;
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
    public function update(Request $request)
    {
        $barang = Barang::where('kode', $request->kode)->firstOrFail();

        $request->validate(
            ['stok' => 'required']
        );

        Barang::where('kode', $request->kode)
            ->update(
                ['stok' => $request->stok + $barang->stok]
            );
        return back();
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
