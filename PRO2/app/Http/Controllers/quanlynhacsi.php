<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_nhacsi;
use Session;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
Session_start();
class quanlynhacsi extends Controller
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
        
         $emp1 = emp_nhacsi::all();
         return view('admin.qlnhacsi.ql_nhacsi')->with('emp2',$emp1);
     }




    // HÀM INSERT 
    public function form_insert()
     {
        
         return view('admin.qlnhacsi.insert_nhacsi');
     }
     public function store(Request $request)
     {
        
         $this->validate($request,[
            'hoten_nhacsi'=>'required',
            'hot_nhacsi'=>'required',
            'hinh_nhacsi'=>'required',
            'gioithieu_nhacsi'=>'required'
         ]);

         $emps= new emp_nhacsi;
         $emps->hoten_nhacsi = $request->input('hoten_nhacsi');
         $emps->hot_nhacsi = $request->input('hot_nhacsi');
         $emps->hinh_nhacsi = $request->input('hinh_nhacsi');
         $emps->gioithieu_nhacsi = $request->input('gioithieu_nhacsi');

         $emps->save();

         return redirect('ql_nhacsi');

     }



    //  HÀM EDIT



    public function form_edit($id) 
    {
        
        $emps = emp_nhacsi::find($id);
        return view('admin.qlnhacsi.edit_nhacsi')->with('emp',$emps);
    } 

    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'hoten_nhacsi'=>'required',
            'hot_nhacsi'=>'required',
            'hinh_nhacsi'=>'required',
            'gioithieu_nhacsi'=>'required'
        ]);

        $emps= emp_nhacsi::find($id);

        $emps->hoten_nhacsi = $request->input('hoten_nhacsi');
        $emps->hot_nhacsi = $request->input('hot_nhacsi');
        $emps->hinh_nhacsi = $request->input('hinh_nhacsi');
        $emps->gioithieu_nhacsi = $request->input('gioithieu_nhacsi');

        $emps->save();

        return redirect('ql_nhacsi');


    }
     


    // HÀM DELETE 
    
    public function delete($id) 
    {
        
        $emps = emp_nhacsi::find($id);
        $emps->delete();

        return redirect('ql_nhacsi');
        
    } 

    
    
}

