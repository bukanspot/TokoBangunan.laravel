<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['jenis_id', 'satuan_id', 'kode', 'nama_barang', 'stok', 'harga_jual'];

    public function jenis(){
        return $this->belongsTo(Jenis::class);
    }

    public function satuan(){
        return $this->belongsTo(Satuan::class);
    }
}
