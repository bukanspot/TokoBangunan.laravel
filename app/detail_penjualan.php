<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    public function penjualans(){
        return $this->belongsTo(Penjualan::class);
    }

    public function barangs(){
        return $this->belongsTo(Barang::class);
    }
}
