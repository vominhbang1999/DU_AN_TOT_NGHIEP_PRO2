<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_album;
use Session;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
Session_start();
class quanlyalbum extends Controller
{
    // login
    public function AuthLogin(){
        $id_admin = Session::get('id_admin');
        if($id_admin){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('/')->send();
        }
    }

    // HÀM HIỂN THỊ DỮ LIỆU
    public function index()
     {
        
         $emp1 = emp_album::all();
         return view('admin.qlalbum.ql_album')->with('emp2',$emp1);
     }




    // HÀM INSERT 
    public function form_insert()
     {
        
         return view('admin.qlalbum.insert_album');
     }
     public function store(Request $request)
     {
        
         $this->validate($request,[
            'ten_album'=>'required',
            'hot_album'=>'required',
            'hinh_album'=>'required',
            'slider_album'=>'required',
            'mota_album'=>'required',
         ]);

         $emps= new emp_album;
         $emps->ten_album = $request->input('ten_album');
         $emps->hot_album = $request->input('hot_album');
         $emps->hinh_album = $request->input('hinh_album');
         $emps->slider_album = $request->input('slider_album');
         $emps->mota_album = $request->input('mota_album');
         $emps->save();

         return redirect('ql_album');

     }



    //  HÀM EDIT



    public function form_edit($id) 
    {
        
        $emps = emp_album::find($id);
        return view('admin.qlalbum.edit_album')->with('emp',$emps);
    } 

    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'ten_album'=>'required',
            'hot_album'=>'required',
            'hinh_album'=>'required',
            'slider_album'=>'required',
            'mota_album'=>'required',
        ]);

        $emps= emp_album::find($id);

         $emps->ten_album = $request->input('ten_album');
         $emps->hot_album = $request->input('hot_album');
         $emps->hinh_album = $request->input('hinh_album');
         $emps->slider_album = $request->input('slider_album');
         $emps->mota_album = $request->input('mota_album');

        $emps->save();

        return redirect('ql_album');


    }
     


    // HÀM DELETE 
    
    public function delete($id) 
    {
        
        $emps = emp_album::find($id);
        $emps->delete();

        return redirect('ql_album');
        
    } 
}
