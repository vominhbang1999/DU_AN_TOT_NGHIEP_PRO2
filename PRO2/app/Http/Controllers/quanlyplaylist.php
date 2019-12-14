<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_playlist;
use App\emp_baihat;
use App\emp_users;
use Session;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
Session_start();
class quanlyplaylist extends Controller
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
         $emp1 = emp_playlist::all();
         return view('admin.qlplaylist.ql_playlist')->with('emp2',$emp1);
     }




    // HÀM INSERT 
    public function form_insert()
     {
         $tenusers = emp_users::all();
         return view('admin.qlplaylist.insert_playlist',compact('tenusers'));
     }
     public function store(Request $request)
     {


         $this->validate($request,[
            'users'             =>'required',
            'hinhanh_playlist'  =>'required',
            'ten_playlist'      =>'required',
            'mota_playlist'     =>'required'
         ]);

         $emps= new emp_playlist();
         $emps->id_user      = $request->users;
         $emps->hinhanh_playlist = $request->hinhanh_playlist;
         $emps->ten_playlist     = $request->ten_playlist;
         $emps->mota_playlist    = $request->mota_playlist;

         $emps->save();

         return redirect('ql_playlist');

     }



    //  HÀM EDIT



    public function form_edit($id) 
    {
         $playlist = emp_playlist::where('id',$id)->first();

         $tenbaihat = emp_baihat::all();
         $tenusers = emp_users::all();
        return view('admin.qlplaylist.edit_playlist',compact('playlist','tenbaihat','tenusers'));
    } 

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'users'=>'required',
            'hinhanh_playlist'=>'required',
            'ten_playlist'=>'required',
            'mota_playlist'=>'required'
        ]);

        $emps= emp_playlist::find($id);

        $emps->id_user         = $request->users;
        $emps->hinhanh_playlist = $request->hinhanh_playlist;
        $emps->ten_playlist     = $request->ten_playlist;
        $emps->mota_playlist    = $request->mota_playlist;

        $emps->save();

        return redirect('ql_playlist');


    }
     


    // HÀM DELETE 
    
    public function delete($id) 
    {
        $emps = emp_playlist::find($id);
        $emps->delete();

        return redirect('ql_playlist');
        
    } 

    
    
}
