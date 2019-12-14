<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_tintuc;
use Session;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
Session_start();
class quanlytintuc extends Controller
{
    
     // login
    //  public function AuthLogin(){
    //     $id_admin = Session::get('id_admin');
    //     if($id_admin){
    //         return Redirect::to('/dashboard');
    //     }else{
    //         return Redirect::to('/')->send();
    //     }
    // }

    // HÀM HIỂN THỊ DỮ LIỆU
    public function index()
     {
        
         $emp1 = emp_tintuc::all();
         return view('admin.qltintuc.ql_tintuc')->with('emp2',$emp1);
     }




    // HÀM INSERT 
    public function form_insert()
     {
        
         return view('admin.qltintuc.insert_tintuc');
     }
     public function store(Request $request)
     {
        
         $this->validate($request,[
            'tieude_tintuc'=>'required',
            'mota_tintuc'=>'required',
            'tintuc_hot'=>'required',
            'noidung_tintuc'=>'required',
            'hinhanh_tintuc'=>'required',
            'luotxem'=>'required',
         ]);

         $emps= new emp_tintuc;
         $emps->tieude_tintuc = $request->input('tieude_tintuc');
         $emps->mota_tintuc = $request->input('mota_tintuc');
         $emps->tintuc_hot = $request->input('tintuc_hot');
         $emps->noidung_tintuc = $request->input('noidung_tintuc');
         $emps->hinhanh_tintuc = $request->input('hinhanh_tintuc');
         $emps->luotxem = $request->input('luotxem');

         $emps->save();

         return redirect('ql_tintuc');

     }



    //  HÀM EDIT



    public function form_edit($id) 
    {
        
        $emps = emp_tintuc::find($id);
        return view('admin.qltintuc.edit_tintuc')->with('emp',$emps);
    } 

    public function update(Request $request, $id)
    {
        
        $this->validate($request,[
            'tieude_tintuc'=>'required',
            'mota_tintuc'=>'required',
            'tintuc_hot'=>'required',
            'noidung_tintuc'=>'required',
            'hinhanh_tintuc'=>'required',
            'luotxem'=>'required',
        ]);

        $emps= emp_tintuc::find($id);

        $emps->tieude_tintuc = $request->input('tieude_tintuc');
        $emps->mota_tintuc = $request->input('mota_tintuc');
        $emps->tintuc_hot = $request->input('tintuc_hot');
        $emps->noidung_tintuc = $request->input('noidung_tintuc');
        $emps->hinhanh_tintuc = $request->input('hinhanh_tintuc');
        $emps->luotxem = $request->input('luotxem');
        $emps->save();

        return redirect('ql_tintuc');


    }
     


    // HÀM DELETE 
    
    public function delete($id) 
    {
        
        $emps = emp_tintuc::find($id);
        $emps->delete();

        return redirect('ql_tintuc');
        
    } 

    
    
}
