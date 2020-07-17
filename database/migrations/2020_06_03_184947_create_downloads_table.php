<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('callsign')->nullable();
            $table->timestamp('checkin')->nullable();
            $table->string('kategori')->nullable();
            $table->integer('counter')->nullable();
            $table->string('file')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('downloads');
    }
}
