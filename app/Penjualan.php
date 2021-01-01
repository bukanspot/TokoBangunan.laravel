<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
