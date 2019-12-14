<?php
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\Request; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ============================= ROUTE CHUYỂN TRANG CLIENT ================================= //

Route::get('/', function () {
    return view('./client/index');
});

Route::get('/index', function () {
    return view('./client/index');
});

Route::get('/bangxephang','pagecontroller@Getbangxephang');

Route::get('/nghesi', function () {
    return view('./client/casi');
});

Route::get('/chude', function () {
    return view('./client/chude');
});

Route::get('/hongsao', function () {
    return view('./client/hongsao');
});

Route::get('/makhuyenmai', function () {
    return view('./client/makhuyenmai');
});


// ============================================= MUSIC VIDEO ========================================//

Route::get('musicvideo', function () {

    $thanghientai = Carbon::now()->month;

    $mv_nghenhieu = App\baihat::orderBy('solannghe','DESC')
        ->paginate(32);

   
    $mv_moinhat = App\baihat::orderBy('created_at','DESC')
        ->paginate(32);


    $mv_yeuthich = App\baihat::orderBy('solanyeuthich','DESC')
        ->paginate(32);


    $nhacviet = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where([
                    ['baihat.id_theloainhac','<>','7'],
                    ['baihat.id_theloainhac','<>','8'],
                    ['baihat.id_theloainhac','<>','2']
                ])
        ->whereMonth('baihat.created_at','=',$thanghientai)
        ->orderBy('solannghe','DESC')
        ->get();



        
    $nhacaumi = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where([['baihat.id_theloainhac','=','2']])
        ->whereMonth('baihat.created_at','=',$thanghientai)
        ->orderBy('solannghe','DESC')
        ->get();


    $nhacchaua = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where('baihat.id_theloainhac','=','7')
        ->orWhere('baihat.id_theloainhac','=','8')
        ->whereMonth('baihat.created_at','=',$thanghientai)
        ->orderBy('solannghe','DESC')
        ->get();


    return view('client.musicvideo',compact('mv_nghenhieu','mv_yeuthich','mv_moinhat','nhacviet','nhacaumi','nhacchaua'));


})->name('detailmv');


// ============================================= SEARCH ============================================//
Route::get('search', function() {
    return view('./client/search');
});
// ============================================= MUSIC VIDEO ========================================//



Route::get('/rank', function () {
    return view('./client/rank');
});



// ============================================= ALBUM ==============================================//

Route::get('album', function () {

    $thanghientai = Carbon::now()->month;

    $albumbaihat = App\album::orderBy('created_at','DESC')
        ->get();



    // foreach ($albumbaihat as $detailcasi123) {

    //     echo $detailcasi123->ten_album;

    //     echo '<br>';

    //     foreach ($detailcasi123->baihatalbum->sortByDesc('solannghe') as $baihat123) {

    //         echo $baihat123->ten_baihat.',';

    //     }


    //     echo '<br>';
    // }


    //     $albumandbaihat = DB::table('album')
    //         ->leftJoin('baihat', 'album.id', '=', 'baihat.id_album')
    //         ->select('baihat.*','album.*')
    //         ->orderBy('album.created_at','DESC')
    //         ->where('ten_baihat','<>',NULL)
    //         ->paginate(40);


    //     $albumandbaihatnghenhieu = DB::table('album')
    //         ->leftJoin('baihat', 'album.id', '=', 'baihat.id_album')
    //         ->select('baihat.*','album.*')
    //         ->orderBy('album.created_at','DESC')
    //         ->where('ten_baihat','<>',NULL)
    //         ->paginate(40);



        $nhacviet = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where([
                    ['baihat.id_theloainhac','<>','7'],
                    ['baihat.id_theloainhac','<>','8'],
                    ['baihat.id_theloainhac','<>','2']
                ])
        ->whereMonth('baihat.created_at','=',$thanghientai)
        ->orderBy('solannghe','DESC')
        ->get();



        
        $nhacaumi = DB::table('detail_casi')
            ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
            ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
            ->where([['baihat.id_theloainhac','=','2']])
            ->whereMonth('baihat.created_at','=',$thanghientai)
            ->orderBy('solannghe','DESC')
            ->get();


        $nhacchaua = DB::table('detail_casi')
            ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
            ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
            ->where('baihat.id_theloainhac','=','7')
            ->orWhere('baihat.id_theloainhac','=','8')
            ->whereMonth('baihat.created_at','=',$thanghientai)
            ->orderBy('solannghe','DESC')
            ->get();


     return view('client.album',compact('albumbaihat','nhacviet','nhacchaua','nhacaumi'));


})->name('album');


// ============================================= ALBUM ==============================================//

Route::get('/vip', function () {
    return view('./client/vip');
});


Route::get('/userdetail', function () {
    return view('./client/userdetail');
});

Route::get('detailtintuc/{id}', [
    'as'=>'detailtintuc',
    'uses'=>'pagecontroller@getdetailtintuc',
]);

Route::post('updatebl/{id}', [
    'as'=>'updatebl',
    'uses'=>'pagecontroller@updatebl',
]);


Route::get('detailcasi/{id}', function ($id) {

    // $detailcasi = App\casi::find(12);

    // $detailcasi->baihat()->detach(98);


    $detailcasi = App\casi::where('id',$id)->first();

    $casiguiy = App\casi::get()->random(10);

    $videocasi = $detailcasi->baihat()->get()->random(4);


    return view('client.detailcasi',compact('detailcasi','casiguiy','videocasi'));



//     foreach ($detailcasi as $detailcasi123) {


//         echo $detailcasi123->avatar_casi;
//         echo '<br>';

//         foreach ($detailcasi123->baihat as $baihat123) {
//             echo $baihat123->ten_baihat.',';

//         }


//         echo '<br>';
//     }

})->name('detailcasi');



Route::get('nghesi', 'pagecontroller@getnghesi');



Route::get('detailmv/{id}', function ($id) {

    $casibaihat = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where('baihat.id',$id)
        ->get();

    $get_id_casi = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where('baihat.id',$id)
        ->first();


    $baihatcuacasi = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where('id_casi', $get_id_casi->id_casi)
        ->get();


    $detailmv = DB::table('baihat')
        ->where('baihat.id','=',$id)
        ->rightJoin('theloainhac', 'baihat.id_theloainhac', '=', 'theloainhac.id')
        ->rightJoin('nhacsi', 'baihat.id_nhacsi', '=', 'nhacsi.id')
        ->rightJoin('album', 'baihat.id_album', '=', 'album.id')
        ->first();

     $theloainhac = DB::table('baihat')
        ->where('id_theloainhac',$detailmv->id_theloainhac)
        ->where('id','<>',$id)
        ->get()
        ->random(8);

    return view('client.detailmv',compact('detailmv','casibaihat','baihatcuacasi','theloainhac','get_id_casi'));


})->name('detailmv');



Route::get('detailaudio/{id}', function ($id) {

    $detailcasi = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where('baihat.id',$id)
        ->get();

    $casibaihat = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where('baihat.id',$id)
        ->first();


    $baihatcuacasi = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->where('id_casi', $casibaihat->id_casi)
        ->get();


    $detailaudio = DB::table('baihat')
        ->where('baihat.id','=',$id)
        ->rightJoin('theloainhac', 'baihat.id_theloainhac', '=', 'theloainhac.id')
        ->rightJoin('nhacsi', 'baihat.id_nhacsi', '=', 'nhacsi.id')
        ->rightJoin('album', 'baihat.id_album', '=', 'album.id')
        ->first();

     $theloainhac = DB::table('baihat')
        ->where('id_theloainhac',$detailaudio->id_theloainhac)
        ->where('id','<>',$id)
        ->get()
        ->random(8);

    return view('client.detailaudio',compact('detailaudio','casibaihat','baihatcuacasi','theloainhac'));


})->name('detailaudio');



// ==================================== EDIT USER ================================//

Route::post('edituser', 'pagecontroller@edituser');



// ====================== ROUTE ĐĂNG NHẬP ĐĂNG KÝ THÀNH VIÊN ============================ //

Route::post('dangky','pagecontroller@dangky');
Route::post('dangnhap','pagecontroller@dangnhap');
Route::get('dangnhap','pagecontroller@dangnhap')->name('dangnhap');
Route::get('dangxuat', 'pagecontroller@dangxuat');



// =================================== ROUTE ĐĂNG NHẬP GOOGLE ==========================//re



Route::get('login/google', 'Auth\LoginController@redirectToProvider');

Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');





// =================================== ROUTE ĐĂNG NHẬP FACEBOOK ==========================//


// ==================================== SHOW TRANG HÓNG SAO  ==============================//

Route::get('hongsao','pagecontroller@showhongsao');

// ==================================== SHOW TRANG CA SĨ , LOẠI , DEATAIL ==============================//

Route::get('nghesi/{type}', [
    'as'=>'nghesi',
    'uses'=>'pagecontroller@getloaicasi',
]);

Route::post('nghesi/sapxepnghesi','pagecontroller@sapxepnghesi');


// ======================== DELETE COMMENT =============================================//
Route::get('deletecomment/{id}', 'pagecontroller@deletecomment'); 

Route::get('chinhsuabinhluan/{id}', 'pagecontroller@chinhsuabinhluan'); 

Route::post('binhluan/{id}','pagecontroller@commenttintuc');

Route::post('replycomment/{id}','pagecontroller@replycomment');


















// ======================================================  ADMIN ADMIN ===============================================//

//admin
Route::get('/admin', 'AdminController@index');

Route::get('/adminlogin', function() {
    return view('admin.admin_login')->name('dangnhap');
});
Route::get('dangxuat', 'Admincontroller@dangxuat');


Route::get('loginmusic', 'AdminController@login');
Route::get('/admin_dashboard', 'AdminController@show_dashboard');

//ca sĩ

Route::get('insert_casi', 'quanlycasi@form_insert');

Route::get('store_casi', 'quanlycasi@store');

Route::get('ql_casi', 'quanlycasi@index');

Route::get('edit_casi/{id}', 'quanlycasi@form_edit');

Route::post('save_casi/{id}', 'quanlycasi@update');

Route::get('delete_casi/{id}', 'quanlycasi@delete');


// Album

Route::get('insert_album', 'quanlyalbum@form_insert');

Route::get('store_album', 'quanlyalbum@store');

Route::get('ql_album', 'quanlyalbum@index');

Route::get('edit_album/{id}', 'quanlyalbum@form_edit');

Route::post('save_album/{id}', 'quanlyalbum@update');

Route::get('delete_album/{id}', 'quanlyalbum@delete');


// Tintuc

Route::get('insert_tintuc', 'quanlytintuc@form_insert');

Route::get('store_tintuc', 'quanlytintuc@store');

Route::get('ql_tintuc', 'quanlytintuc@index');

Route::get('edit_tintuc/{id}', 'quanlytintuc@form_edit');

Route::post('save_tintuc/{id}', 'quanlytintuc@update');

Route::get('delete_tintuc/{id}', 'quanlytintuc@delete');


// Nhac si

Route::get('insert_nhacsi', 'quanlynhacsi@form_insert');

Route::get('store_nhacsi', 'quanlynhacsi@store');

Route::get('ql_nhacsi', 'quanlynhacsi@index');

Route::get('edit_nhacsi/{id}', 'quanlynhacsi@form_edit');

Route::post('save_nhacsi/{id}', 'quanlynhacsi@update');

Route::get('delete_nhacsi/{id}', 'quanlynhacsi@delete');


// The loai nhac

Route::get('insert_theloainhac', 'quanlytheloainhac@form_insert');

Route::get('store_theloainhac', 'quanlytheloainhac@store');

Route::get('ql_theloainhac', 'quanlytheloainhac@index');

Route::get('edit_theloainhac/{id}', 'quanlytheloainhac@form_edit');

Route::post('save_theloainhac/{id}', 'quanlytheloainhac@update');

Route::get('delete_theloainhac/{id}', 'quanlytheloainhac@delete');


// Bai hat

Route::get('insert_baihat', 'quanlybaihat@form_insert');

Route::post('store_baihat', 'quanlybaihat@store');

Route::get('ql_baihat', 'quanlybaihat@index');

Route::get('edit_baihat/{id}', 'quanlybaihat@form_edit');

Route::post('save_baihat/{id}', 'quanlybaihat@update');

Route::get('delete_baihat/{id}', 'quanlybaihat@delete');


// playlist

Route::get('insert_playlist', 'quanlyplaylist@form_insert');

Route::get('store_playlist', 'quanlyplaylist@store');

Route::get('ql_playlist', 'quanlyplaylist@index');

Route::get('edit_playlist/{id}', 'quanlyplaylist@form_edit');

Route::post('save_playlist/{id}', 'quanlyplaylist@update');

Route::get('delete_playlist/{id}', 'quanlyplaylist@delete');

// users

Route::get('ql_users', 'quanlyusers@index');

Route::get('delete_users/{id}', 'quanlyusers@delete');

// bl bài hát

Route::get('ql_blbaihat', 'quanlyblbaihat@index');

Route::get('delete_blbaihat/{id}', 'quanlyblbaihat@delete');

// bl tin tức

Route::get('ql_bltintuc', 'quanlybltintuc@index');

Route::get('delete_bltintuc/{id}', 'quanlybltintuc@delete');



// detai casi



Route::get('insert_detailcasi', function() {

    $detailbaihat = DB::table('baihat')->get();

    $detailcasi = DB::table('casi')->get();

    return view('admin.qldetailcasi.insert_detailcasi',compact('detailbaihat','detailcasi'));

});


Route::get('store_casi_detail', function(Request $request) {

        $idcasi = App\baihat::find($request->songdetail);

        $idcasi->casi()->attach($request->casidetail);

        return redirect('/ql_detailcasi');
});



Route::get('ql_detailcasi', function() {

    $detailcasi = DB::table('detail_casi')
        ->leftJoin('casi','detail_casi.id_casi', '=' ,'casi.id')
        ->leftJoin('baihat','detail_casi.id_baihat','=','baihat.id')
        ->get();
    return view('admin.qldetailcasi.ql_detailcasi')->with('detailcasi2',$detailcasi);
});


Route::get('delete-detailcasi/{casi}/baihat/{baihat}',function ($casi,$baihat) {

    $xoacasi = App\emp::find($casi);

    $xoacasi->baihatadmin()->detach($baihat);

    return redirect()->back();

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
