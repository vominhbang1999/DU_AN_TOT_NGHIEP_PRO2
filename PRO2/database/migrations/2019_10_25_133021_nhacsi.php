<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nhacsi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacsi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hoten_nhacsi');
            $table->tinyInteger('hot_nhacsi')->nullable();
            $table->string('hinh_nhacsi');
            $table->text('gioithieu_nhacsi');
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
        Schema::dropIfExists('nhacsi');
    }
}
