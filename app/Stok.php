<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = 'barang';
    protected $fillable = ['stok'];
}
