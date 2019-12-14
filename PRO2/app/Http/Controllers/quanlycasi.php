<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp;
use Session;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
Session_start();
class quanlycasi extends Controller
{


    // UPDATE DETAIL CASI TRONG ĐÂY NHA  trong này đc hả làm thử thấy ko dính j tới bên model

    public 
    
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
        
         $emp1 = emp::all();
         return view('admin.qlcasi.ql_casi')->with('emp2',$emp1);
     }




    // HÀM INSERT 
    public function form_insert()
     {
       
         return view('admin.qlcasi.insert_casi');
     }
     public function store(Request $request)
     {
        
         $this->validate($request,[
            'hoten_casi'=>'required',
            'hot_casi'=>'required',
            'yeuthich'=>'required',
            'avatar_casi'=>'required',
            'poster_casi'=>'required',
            'gioithieu_casi'=>'required',
            'khuvuccasi'=>'required'
         ]);
         

         $emps= new emp;
         $emps->hoten_casi = $request->input('hoten_casi');
         $emps->hot_casi = $request->input('hot_casi');
         $emps->yeuthich = $request->input('yeuthich');
         $emps->avatar_casi = $request->input('avatar_casi');
         $emps->poster_casi = $request->input('poster_casi');
         $emps->gioithieu_casi = $request->input('gioithieu_casi');
         $emps->khuvuccasi = $request->input('khuvuccasi');
         $emps->save();

         return redirect('ql_casi');

     }



    //  HÀM EDIT



    public function form_edit($id) 
    {
        
        $emps = emp::find($id);
        return view('admin.qlcasi.edit_casi')->with('emp',$emps);
    } 

    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'hoten_casi'=>'required',
            'hot_casi'=>'required',
            'yeuthich'=>'required',
            'avatar_casi'=>'required',
            'poster_casi'=>'required',
            'gioithieu_casi'=>'required',
            'khuvuccasi'=>'required'
        ]);

        $emps= emp::find($id);

         $emps->hoten_casi = $request->input('hoten_casi');
         $emps->hot_casi = $request->input('hot_casi');
         $emps->yeuthich = $request->input('yeuthich');
         $emps->avatar_casi = $request->input('avatar_casi');
         $emps->poster_casi = $request->input('poster_casi');
         $emps->gioithieu_casi = $request->input('gioithieu_casi');
         $emps->khuvuccasi = $request->input('khuvuccasi');
         $emps->save();

        return redirect('ql_casi');


    }
     


    // HÀM DELETE 
    
    public function delete($id) 
    {
        
        $emps = emp::find($id);
        $emps->delete();

        return redirect('ql_casi');
        
    } 

    
    
}
