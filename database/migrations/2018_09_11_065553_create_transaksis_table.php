<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('kategori_wisatawan_id');
            $table->string('asal_provinsi')->nullable();
            $table->string('asal_kabupaten')->nullable();
            $table->string('asal_kecamatan')->nullable();
            $table->double('total_harga')->nullable();
            $table->integer('is_lunas');
            $table->double('jumlah_bayar')->nullable();
            $table->string('email_wisatawan')->nullable();
            $table->integer('wisata_id');
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
        Schema::dropIfExists('transaksis');
    }
}
