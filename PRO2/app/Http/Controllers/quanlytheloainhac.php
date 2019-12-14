<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_tloainhac;
use Session;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
Session_start();
class quanlytheloainhac extends Controller
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
        
         $emp1 = emp_tloainhac::all();
         return view('admin.qltheloainhac.ql_theloainhac')->with('emp2',$emp1);
     }




    // HÀM INSERT 
    public function form_insert()
     {
        
         return view('admin.qltheloainhac.insert_theloainhac');
     }
     public function store(Request $request)
     {
        
         $this->validate($request,[
            'ten_theloainhac'=>'required',
            'hinh_theloainhac'=>'required',
            'danhmuc'=>'required'
         ]);

         $emps= new emp_tloainhac;
         $emps->ten_theloainhac = $request->input('ten_theloainhac');
         $emps->hinh_theloainhac = $request->input('hinh_theloainhac');
         $emps->danhmuc = $request->input('danhmuc');

         $emps->save();

         return redirect('ql_theloainhac');

     }



    //  HÀM EDIT



    public function form_edit($id) 
    {
        
        $emps = emp_tloainhac::find($id);
        return view('admin.qltheloainhac.edit_theloainhac')->with('emp',$emps);
    } 

    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'ten_theloainhac'=>'required',
            'hinh_theloainhac'=>'required',
            'danhmuc'=>'required'
        ]);

        $emps= emp_tloainhac::find($id);

        $emps->ten_theloainhac = $request->input('ten_theloainhac');
        $emps->hinh_theloainhac = $request->input('hinh_theloainhac');
        $emps->danhmuc = $request->input('danhmuc');

        $emps->save();

        return redirect('ql_theloainhac');


    }
     


    // HÀM DELETE 
    
    public function delete($id) 
    {
        
        $emps = emp_tloainhac::find($id);
        $emps->delete();

        return redirect('ql_theloainhac');
        
    } 

    
    
}
