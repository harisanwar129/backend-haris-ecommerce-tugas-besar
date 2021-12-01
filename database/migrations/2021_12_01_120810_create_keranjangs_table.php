<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeranjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('customer_id');
            $table->integer('jumlah');
            $table->bigInteger('harga');
            $table->integer('berat');
            $table->timestamps();
      
            //relationship product
            $table->foreign('produk_id')->references('id')->on('produk');
      
            //relationship customer
            $table->foreign('customer_id')->references('id')->on('customers');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keranjangs');
    }
}
