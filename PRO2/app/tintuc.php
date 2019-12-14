<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $primaryKey='id';
    protected $table='tintuc';
    protected $filltable=array('id_tintuc','mota_tintuc','tintuc_hot','noidung_tintuc','hinhanh_tintuc','luotxem','ngaydang_tintuc');
}
