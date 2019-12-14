<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp_blbaihat extends Model
{
    protected $primaryKey='id';
        protected $table='binhluanbaihat';
        protected $filltable=array('id_user	','id_baihat','noidung_binhluan','parent_id');
}
