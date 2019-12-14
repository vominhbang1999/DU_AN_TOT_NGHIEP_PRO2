<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp_bltintuc extends Model
{
    protected $primaryKey='id';
        protected $table='binhluantintuc';
        protected $filltable=array('id_user	','id_tintuc','noidung_binhluan','parent_id');
}
