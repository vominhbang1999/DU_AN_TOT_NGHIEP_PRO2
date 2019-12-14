<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp extends Model
{
    protected $primaryKey='id';
        protected $table='casi';
        protected $filltable=array('hoten_casi','hot_casi','yeuthich','avatar_casi','poster_casi','gioithieu_casi','khuvuccasi');

       public function baihatadmin(){
        return $this->belongsToMany('App\emp_baihat', 'detail_casi', 'id_casi', 'id_baihat');
    }
    
        
}
