<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $fillable = ['jenis'];

    public function barang(){
        return $this->hasMany(Barang::class);
    }
}
