<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailCasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_casi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_casi');
            $table->unsignedBigInteger('id_baihat');
            $table->foreign('id_casi')->references('id')->on('casi');
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
        Schema::dropIfExists('detail_casi');
    }
}
