<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function jenis(){
        return $this->hasOne(Jenis::class);
    }

    public function satuans(){
        return $this->hasOne(Satuan::class);
    }
}
