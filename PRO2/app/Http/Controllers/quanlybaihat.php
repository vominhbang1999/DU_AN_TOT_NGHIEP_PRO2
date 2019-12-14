<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_baihat;
use App\emp_tloainhac;
use App\emp_album;
use App\emp_nhacsi;
use App\emp_playlist;
use App\emp;
use Session;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
Session_start();
class quanlybaihat extends Controller
{
    
     // login
     public function AuthLogin(){
        $id_admin = Session::get('id_admin');
        if($id_admin){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/admin')->send();
        }
    }

    // HÀM HIỂN THỊ DỮ LIỆU
    public function index()
     {
        
         $emp2 = emp_baihat::orderBy('created_at','DESC')->paginate(10);
         
         return view('admin.qlbaihat.ql_baihat',compact('emp2'));
     }




    // HÀM INSERT 
    public function form_insert()
     {
        
        $tentheloai = emp_tloainhac::all();
        $tennhacsi = emp_nhacsi::all();
        $tenalbum = emp_album::all();


         return view('admin.qlbaihat.insert_baihat',compact('tentheloai','tennhacsi','tenalbum')); 
     }


     public function store(Request $request)                  
     {
         $this->validate($request,[                                                                                  

            'ten_baihat'       =>'required',         
            'loi_baihat'       =>'required',
            'hinh_baihat'      =>'required',
            'hot_baihat'       =>'required',
            'src_baihat'     =>'required',
            'mota_baihat'      =>'required',
            'solannghe'        =>'required',
            'solantai'         =>'required',
            'playlist'         =>'required',
            'solanyeuthich'    =>'required',
            'theloainhac'      =>'required',
            'album'            =>'required',
            'nhacsi'           =>'required'

         ]);

         $emps= new emp_baihat();
         
         $emps->ten_baihat      = $request->ten_baihat;
         $emps->loi_baihat      = $request->loi_baihat;
         $emps->hinh_baihat     = $request->hinh_baihat;
         $emps->hot_baihat      = $request->hot_baihat;
         $emps->src_baihat    = $request->src_baihat;
         $emps->mota_baihat     = $request->mota_baihat;
         $emps->solannghe       = $request->solannghe;
         $emps->solantai        = $request->solantai;
         $emps->solanyeuthich   = $request->solanyeuthich;
         $emps->id_theloainhac  = $request->theloainhac;
         $emps->id_album        = $request->album;
         $emps->id_nhacsi       = $request->nhacsi;
         
         $emps->save();

         return redirect('ql_baihat');

     }  



    //  HÀM EDIT



    public function form_edit($id) 
    {
        
        
        $baihat= emp_baihat::where('id',$id)->first();

        $theloai = emp_tloainhac::all();
        $nhacsi = emp_nhacsi::all();
        $album = emp_album::all();

        return view('admin.qlbaihat.edit_baihat',compact('baihat','theloai','nhacsi','album'));
    } 

    public function update(Request $request, $id)
    {
        
        $this->validate($request,[

            'ten_baihat'       =>'required',         
            'loi_baihat'       =>'required',
            'hinh_baihat'      =>'required',
            'hot_baihat'       =>'required',
            'src_baihat'     =>'required',
            'mota_baihat'      =>'required',
            'solannghe'        =>'required',
            'solantai'         =>'required',
            'playlist'         =>'required',
            'solanyeuthich'    =>'required',
            'theloainhac'      =>'required',
            'album'            =>'required',
            'nhacsi'           =>'required'
        ]);



        $emps= emp_baihat::find($id);

         $emps->ten_baihat      = $request->ten_baihat;
         $emps->loi_baihat      = $request->loi_baihat;
         $emps->hinh_baihat     = $request->hinh_baihat;
         $emps->hot_baihat      = $request->hot_baihat;
         $emps->src_baihat    = $request->src_baihat;
         $emps->mota_baihat     = $request->mota_baihat;
         $emps->solannghe       = $request->solannghe;
         $emps->solantai        = $request->solantai;
         $emps->playlist        = $request->playlist;
         $emps->solanyeuthich   = $request->solanyeuthich;
         $emps->id_theloainhac  = $request->theloainhac;
         $emps->id_album        = $request->album;
         $emps->id_nhacsi       = $request->nhacsi;

        $emps->save();


        return redirect('ql_baihat');


    }
     


    // HÀM DELETE 
    
    public function delete($id) 
    {
        $emps = emp_baihat::find($id); 
        $emps->delete();
        return redirect('ql_baihat');
    } 

    
    
}
