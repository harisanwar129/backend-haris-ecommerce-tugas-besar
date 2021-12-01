<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->unsignedBigInteger('customer_id');
            $table->string('kurir');
            $table->string('kurir_servis');
            $table->bigInteger('kurir_harga');
            $table->integer('berat');
            $table->string('nama');
            $table->string('nohp');
            $table->unsignedBigInteger('kota_id');
            $table->unsignedBigInteger('provinsi_id');
            $table->text('alamat');
            $table->enum('status', array('pending', 'success', 'expired', 'failed'));
            $table->bigInteger('grand_total');
            $table->string('snap_token')->nullable();
            $table->timestamps();
      
            //relationship customer
            $table->foreign('customer_id')->references('id')->on('customer');
      
            //relationship city
            $table->foreign('kota_id')->references('id')->on('kota');
      
            //relationship province
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
