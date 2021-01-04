<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewData extends Model
{
    public $name;

        public function array()
        {
            $array = ["id", "jenis_id", "satuan_id", "kode", "nama_barang", "jumlah", "harga_jual", "total_harga"];
        }
    }
