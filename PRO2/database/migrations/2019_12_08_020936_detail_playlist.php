<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailPlaylist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_playlist', function (Blueprint $table) {
            $table->unsignedBigInteger('id_playlist');
            $table->unsignedBigInteger('id_baihat');
            $table->foreign('id_playlist')->references('id')->on('playlist');
            $table->foreign('id_baihat')->references('id')->on('baihat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_playlist');
    }
}
