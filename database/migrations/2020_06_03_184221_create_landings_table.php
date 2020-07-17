<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_perusahaan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('tentang')->nullable();
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->string('juknis')->nullable();
            $table->string('izin')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('telpon')->nullable();
            $table->string('gambar_tentang')->nullable();
            $table->string('link_video')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('landings');
    }
}
