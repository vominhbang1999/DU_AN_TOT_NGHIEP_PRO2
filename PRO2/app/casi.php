<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class casi extends Model
{
	protected $primaryKey='id';
    protected $table='casi';
    protected $filltable=array('loaicasi','hoten_casi','hot_casi','yeuthich','hinh_casi','gioithieu_casi');

     public function baihat()
    {
    	// Hàng thứ nhất là model bảng liên kết , thứ 2 là tên bảng phụ , thứ 3 là hàng ở bảng hiện tại (casi) , thứ 4 là hàng ở bảng cần truy vấn (baihat) -> có sự thay đổi vị trí ở 2 row cuối

        return $this->belongsToMany('App\baihat','detail_casi','id_casi','id_baihat');
   	}
}
