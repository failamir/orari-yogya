<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWaktuKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waktu_kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_tanggal')->nullable();
            $table->time('mulai')->nullable();
            $table->time('selesai')->nullable();
            $table->string('detail')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('waktu_kegiatans');
    }
}
