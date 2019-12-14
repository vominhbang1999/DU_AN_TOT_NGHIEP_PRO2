<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bangxephang extends Model
{
    protected $primaryKey='id';
    protected $table='theloainhac';
    protected $filltable=array('ten_theloainhac','hinh_theloainhac','mota_theloainhac');
}
