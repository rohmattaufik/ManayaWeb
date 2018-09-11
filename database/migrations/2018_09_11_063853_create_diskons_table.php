<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiskonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_diskon');
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_selesai');
            $table->integer('jumlah_persen');
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
        Schema::dropIfExists('diskons');
    }
}
