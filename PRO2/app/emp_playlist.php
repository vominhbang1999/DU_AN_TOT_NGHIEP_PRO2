<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp_playlist extends Model
{
    protected $primaryKey='id';
    protected $table='playlist';
    protected $filltable=array('id_user','hinhanh_playlist','ten_playlist','mota_playlist');
}
