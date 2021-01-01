<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    public function penjualans(){
        return $this->hasOne(Penjualan::class);
    }

    public function barangs(){
        return $this->hasOne(Barang::class);
    }
}
