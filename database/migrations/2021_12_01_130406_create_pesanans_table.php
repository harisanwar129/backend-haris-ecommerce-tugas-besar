<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('invoice_id');
      $table->unsignedBigInteger('produk_id');
      $table->integer('jumlah');
      $table->bigInteger('harga');
      $table->timestamps();

      //relationship invoice
      $table->foreign('invoice_id')->references('id')->on('invoice');

      //relationship product
      $table->foreign('produk_id')->references('id')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
