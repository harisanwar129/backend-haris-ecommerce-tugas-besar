<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTinjauansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinjauans', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('produk_id');
      $table->unsignedBigInteger('pesanan_id');
      $table->unsignedBigInteger('customer_id');
      $table->integer('penilaian');
      $table->text('tinjauan');
      $table->timestamps();

      //relationship product
      $table->foreign('produk_id')->references('id')->on('produk');

      //relationship order
      $table->foreign('pesanan_id')->references('id')->on('pesanan');
            
      //relationship customer
      $table->foreign('customer_id')->references('id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tinjauans');
    }
}
