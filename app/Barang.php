<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function jenis(){
        return $this->belongsTo(Jenis::class);
    }

    public function satuan(){
        return $this->belongsTo(Satuan::class);
    }
}
