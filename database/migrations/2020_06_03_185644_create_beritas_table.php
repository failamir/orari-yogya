<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('judul')->nullable();
            $table->text('konten')->nullable();
            $table->date('tanggal')->nullable();
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
        Schema::drop('beritas');
    }
}
