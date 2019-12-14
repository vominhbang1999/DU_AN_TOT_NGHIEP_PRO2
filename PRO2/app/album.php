<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $primaryKey='id';
    protected $table='album';
    protected $filltable=array('ten_album','hot_album','hinh_album','slider_album','mota_album','created_at');

       public function baihatalbum()
    {
        return $this->hasMany('App\baihat','id_album');
    }
}
