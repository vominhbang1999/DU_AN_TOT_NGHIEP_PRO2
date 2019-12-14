<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emp_bltintuc;
use Session;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect;
Session_start();
class quanlybltintuc extends Controller
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
        
         $emp1 = emp_bltintuc::all();
         return view('admin.qlbltintuc.ql_bltintuc')->with('emp2',$emp1);
     }




    // HÀM INSERT 
    // public function form_insert()
    //  {
       
    //      return view('admin.qlusers.insert_users');
    //  }
    //  public function store(Request $request)
    //  {
        
    //      $this->validate($request,[
    //         'vip'=>'required',
    //         'admin'=>'required',
    //         'xu'=>'required',
    //         'name'=>'required',
    //         'hinhanh'=>'required',
    //         'dienthoai'=>'required',
    //         'email'=>'required',
    //         'email_verified_at'=>'required',
    //         'status'=>'required',
    //         'password'=>'required',
    //         're_password'=>'required',
    //         'remember_token'=>'required'
    //      ]);
         

    //      $emps= new emp_users;
    //      $emps->vip = $request->input('vip');
    //      $emps->admin = $request->input('admin');
    //      $emps->xu = $request->input('xu');
    //      $emps->name = $request->input('name');
    //      $emps->hinhanh = $request->input('hinhanh');
    //      $emps->dienthoai = $request->input('dienthoai');
    //      $emps->email = $request->input('email');
    //      $emps->email_verified = $request->input('email_verified');
    //      $emps->status = $request->input('status');
    //      $emps->token = $request->input('token');
    //      $emps->password = $request->input('password');
    //      $emps->re_password = $request->input('re_password');
    //      $emps->remember_token = $request->input('remember_token');
    //      $emps->save();

    //      return redirect('ql_users');

    //  }



    //  HÀM EDIT



    // public function form_edit($id) 
    // {
        
    //     $emps = emp_users::find($id);
    //     return view('admin.qlusers.edit_users')->with('emp',$emps);
    // } 

    // public function update(Request $request, $id)
    // {
        
    //     $this->validate($request,[
    //         'vip'=>'required',
    //         'admin'=>'required',
    //         'xu'=>'required',
    //         'name'=>'required',
    //         'hinhanh'=>'required',
    //         'dienthoai'=>'required',
    //         'email'=>'required',
    //         'email_verified_at'=>'required',
    //         'status'=>'required',
    //         'password'=>'required',
    //         're_password'=>'required',
    //         'remember_token'=>'required'
    //     ]);

    //     $emps= emp_users::find($id);

    //      $emps->hoten_users = $request->input('hoten_users');
    //      $emps->hot_users = $request->input('hot_users');
    //      $emps->yeuthich = $request->input('yeuthich');
    //      $emps->avatar_users = $request->input('avatar_users');
    //      $emps->poster_users = $request->input('poster_users');
    //      $emps->gioithieu_users = $request->input('gioithieu_users');
    //      $emps->khuvucusers = $request->input('khuvucusers');
    //     $emps->save();

    //     return redirect('ql_users');


    // }
     


    // HÀM DELETE 
    
    public function delete($id) 
    {
        
        $emps = emp_bltintuc::find($id);
        $emps->delete();

        return redirect('ql_bltintuc');
        
    } 

    
    
}
