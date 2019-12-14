<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluantintuc extends Model
{
    protected $primaryKey='id';
    protected $table='binhluantintuc';
    protected $filltable=array('id','id_tintuc','noidung_binhluan','ngay_binhluan');
}
