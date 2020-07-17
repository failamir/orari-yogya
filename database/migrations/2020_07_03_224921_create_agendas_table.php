<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_agenda')->nullable();
            $table->text('deskripsi_agenda')->nullable();
            $table->string('lokasi_agenda')->nullable();
            $table->date('tanggal_mulai')->nullable();
            $table->time('jam_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->time('jam_selesai')->nullable();
            $table->string('gambar')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agendas');
    }
}
