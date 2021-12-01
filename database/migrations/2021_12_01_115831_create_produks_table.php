<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('judul');
            $table->string('permalink');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('user_id');
            $table->text('deskripsi');
            $table->integer('berat');
            $table->bigInteger('harga');
            $table->integer('stok');
            $table->integer('diskon');
            $table->timestamps();

            
      //relationship kategori
      $table->foreign('kategori_id')->references('id')->on('kategori');

      //relationship user
      $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
