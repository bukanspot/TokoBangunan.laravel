<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    protected $fillable = ['penjualan_id', 'barang_id', 'qty', 'harga'];

    public function penjualans(){
        return $this->belongsTo(Penjualan::class);
    }

    public function barangs(){
        return $this->belongsTo(Barang::class);
    }
}
