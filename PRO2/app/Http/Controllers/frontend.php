<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class frontend extends Controller
{
    public function getdetailmv (Request $req, $id) {

        $detailmv = baihat::where('id',$req->id)->first();


        return $this->belongsTo('App\baihat');

        $detailmv = DB::table('baihat')
            ->join('casi', 'casi.id', '=', 'baihat.id_casi')
            ->select('casi.*','baihat.*')
            ->where('ten_baihat',$id)
            ->get();

        dd($detailmv);

        return view('client.detailmv',compact('detailmv'));
    }
}
