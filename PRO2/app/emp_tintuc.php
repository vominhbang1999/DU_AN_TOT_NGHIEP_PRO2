<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp_tintuc extends Model
{
    protected $primaryKey='id';
    protected $table='tintuc';
    protected $filltable=array('tieude_tintuc','mota_tintuc','tintuc_hot','noidung_tintuc','hinhanh_tintuc','ngaydang_tintuc','luotxem');
}
