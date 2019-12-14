<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baihat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baihat', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('ten_baihat');
            $table->text('loi_baihat');
            $table->string('hinh_baihat');
            $table->tinyInteger('hot_baihat');
            $table->string('src_baihat')->unique();
            $table->string('mota_baihat');
            $table->integer('solannghe');
            $table->integer('solantai');
            $table->boolean('playlist')->nullable();
            $table->integer('solanyeuthich');
            $table->unsignedBigInteger('id_theloainhac');
            $table->unsignedBigInteger('id_nhacsi');
            $table->unsignedBigInteger('id_album');
            $table->foreign('id_theloainhac')->references('id')->on('theloainhac');
            $table->foreign('id_nhacsi')->references('id')->on('nhacsi');
            $table->foreign('id_album')->references('id')->on('album');
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
        Schema::dropIfExists('baihat');
    }
}
