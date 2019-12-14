<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baihat extends Model
{
    protected $primaryKey='id';
    protected $table='baihat';
    protected $filltable=array('ten_baihat','loi_baihat','hinh_baihat','hot_baihat','audio_baihat','video_baihat','mota_baihat','solannghe','solantai','playlist','solanyeuthich','create_at');

    public function casi()
    {
    	// Hàng thứ nhất là model bảng liên kết , thứ 2 là tên bảng phụ , thứ 3 là hàng ở bảng hiện tại ( bài hat) , thứ 4 là hàng ở bảng cần truy vấn ( casi) -> có sự thay đổi vị trí ở 2 row cuối
    	
    	return $this->belongsToMany('App\casi','detail_casi','id_baihat','id_casi');
    }


}
