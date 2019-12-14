<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emp_baihat extends Model
{
    protected $primaryKey='id';
        protected $table='baihat';
        protected $filltable=array('ten_baihat','loi_baihat','hot_baihat','src_baihat','mota_baihat','solannghe','solantai','playlist','solanyeuthich','id_theloainhac','id_album','id_nhacsi');

     public function casiadmin()
	    {
	    	return $this->belongsToMany('App\casi','detail_casi','id_baihat','id_casi');
	    }

}
