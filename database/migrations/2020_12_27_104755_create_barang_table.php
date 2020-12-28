<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jenis');
            // $table->foreign('id_jenis')->references('id')->on('jenis');
            $table->unsignedBigInteger('id_satuan');
            // $table->foreign('id_satuan')->references('id')->on('satuan');
            $table->bigInteger('kode');
            $table->string('nama_barang', 255);
            $table->bigInteger('stok');
            $table->bigInteger('harga_jual');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
