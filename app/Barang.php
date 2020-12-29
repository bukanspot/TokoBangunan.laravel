<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id_jenis', 'id_satuan', 'kode', 'nama_barang', 'stok', 'harga_jual', 'keterangan'];
}
