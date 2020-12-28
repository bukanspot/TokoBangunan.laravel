<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_penjualan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_penjualan');
            // $table->foreign('id_penjualan')->references('id')->on('penjualan');
            $table->unsignedBigInteger('id_barang');
            // $table->foreign('id_barang')->references('id')->on('barang');
            $table->bigInteger('qty');
            $table->bigInteger('harga');
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
        Schema::dropIfExists('detail_penjualan');
    }
}
