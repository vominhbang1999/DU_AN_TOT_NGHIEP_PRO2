<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp_nhacsi extends Model
{
    protected $primaryKey='id';
    protected $table='nhacsi';
    protected $filltable=array('hoten_nhacsi','hot_nhacsi','hinh_nhacsi','gioithieu_nhacsi');
}

 