<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp_tloainhac extends Model
{
    protected $primaryKey='id';
    protected $table='theloainhac';
    protected $filltable=array('ten_theloainhac','hinh_theloainhac','danhmuc');
}
 