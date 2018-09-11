<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiayaMarketingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_marketings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alokasi_dana');
            $table->dateTime('waktu_penggunaan');
            $table->bigInteger('jumlah_dana');
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
        Schema::dropIfExists('biaya_marketings');
    }
}
