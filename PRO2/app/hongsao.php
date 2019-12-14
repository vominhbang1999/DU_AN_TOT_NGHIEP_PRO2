<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hongsao extends Model
{
    protected $primaryKey='id';
    protected $table='tintuc';
    protected $filltable=array('title_tintuc','tintuc_hot','noidung_tintuc','hinhanh_tintuc','luotxem');
}
