<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use DB;
use Session;
use App\emp_baihat;
use App\emp_users;
use App\emp_blbaihat;
use App\emp_bltintuc;
use App\Http\Requests;


class AdminController extends Controller
{
    
    public function index(){
    
        $tenadmin = 'bangchodien';
        $baihat_count = emp_baihat::count();
        $users_count = emp_users::count();
        $binhluanbaihat_count = emp_blbaihat::count();
        $binhluantintuc_count = emp_bltintuc::count();
        return view('admin.dashboard', compact('baihat_count','tenadmin','users_count','binhluanbaihat_count','binhluantintuc_count'));
    }

    public function show_dashboard(){
        $baihat_count = emp_baihat::count();
        $users_count = emp_users::count();
        $binhluanbaihat_count = emp_blbaihat::count();
        $binhluantintuc_count = emp_bltintuc::count();
        return view('admin.dashboard', compact('baihat_count','users_count','binhluanbaihat_count','binhluantintuc_count'));
    }
    // public function dashboard(Request $request){
        
    //     $email_admin = $request->input('email_admin');
	// 	$password_admin = $request->input('password_admin');

    //     $result = DB::table('admin')->where('email_admin',$email_admin)->where('password_admin',$password_admin)->first();
    //     if($result){
    //         Session::put('name_admin',$result->name_admin);
    //         Session::put('id_admin',$result->id_admin);
    //         return Redirect::to('dashboard');
    //     }else{
    //         Session::put('message','Email hoặc password không đúng');
    //         return Redirect::to('/admin');
    //     }
    // }
    public function dangxuat(){
        
        Auth::logout();
    
        return Redirect::to('/admin');
    }
}

