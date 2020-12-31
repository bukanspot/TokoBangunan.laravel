<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;
use App\Jenis;
use App\Satuan;
use App\Stok;

class LainnyaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $listbarang = Barang::paginate(10);
        $barang = DB::select('SELECT barang.`nama_barang`, barang.`kode`, jenis.`jenis`, satuan.`satuan`, barang.`stok` FROM barang, jenis, satuan WHERE barang.`id_jenis` = jenis.`id` AND barang.`id_satuan` = satuan.`id` ORDER BY barang.`id` DESC');
        $jenis = DB::table('jenis')->get();
        $satuan = DB::table('satuan')->get();
        $pembelian = Barang::all();
        return view('lainnya.index')
            ->with(['barang'=>$barang])
            ->with(['jenis'=>$jenis])
            ->with(['satuan'=>$satuan])
            // ->with(['listbarang'=>$listbarang])
            ;
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
