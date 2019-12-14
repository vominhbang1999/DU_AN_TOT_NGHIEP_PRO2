<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Casi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hoten_casi');
            $table->tinyInteger('hot_casi')->nullable();
            $table->integer('yeuthich')->nullable();
            $table->string('avatar_casi');
            $table->string('poster_casi');
            $table->text('gioithieu_casi');
            $table->string('khuvuccasi');
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
        Schema::dropIfExists('casi');
    }
}
