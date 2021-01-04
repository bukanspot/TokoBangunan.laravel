<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPembelian extends Model
{
    public function pembelians(){
        return $this->belongsTo(Penjualan::class);
    }

    public function barangs(){
        return $this->belongsTo(Barang::class);
    }
}
