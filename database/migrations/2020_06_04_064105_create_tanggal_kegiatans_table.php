<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTanggalKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggal_kegiatans', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('hari')->nullable();
            $table->date('tanggal')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tanggal_kegiatans');
    }
}
