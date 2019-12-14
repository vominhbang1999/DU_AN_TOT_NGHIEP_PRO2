<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\casi;
use App\loaicasi;
use App\baihat;
use App\tintuc;
use App\hongsao;
use App\album;
use App\bangxephang;
use App\binhluantintuc;
use Hash;
use Carbon\Carbon;
use Auth;



class pagecontroller extends Controller
{

    // ================================== ALBUM ======================================//

    public function getalbum () {

        $albumandbaihat = DB::table('album')
            ->leftJoin('baihat', 'album.id', '=', 'baihat.id_album')
            ->select('baihat.*','album.*')
            ->orderBy('album.created_at','DESC')
            ->where('ten_baihat','<>',NULL)
            ->take(40)
            ->get();

        $albumandbaihatnghenhieu = DB::table('album')
            ->leftJoin('baihat', 'album.id', '=', 'baihat.id_album')
            ->select('baihat.*','album.*')
            ->orderBy('baihat.solannghe','DESC')
            ->where('ten_baihat','<>',NULL)
            ->take(40)
            ->get();

        $thanghientai = Carbon::now()->month;



        $nhacviet = baihat::where([
                ['baihat.id_theloainhac','<>','7'],
                ['baihat.id_theloainhac','<>','8'],
                ['baihat.id_theloainhac','<>','2']
            ])
            ->rightJoin('casi', 'baihat.id_casi', '=', 'casi.id')
            ->select('baihat.*','casi.*')
            ->whereMonth('baihat.created_at','=',$thanghientai)
            ->orderBy('solannghe','DESC')
            ->get();

        $nhacaumi = baihat::where([
                ['baihat.id_theloainhac','=','2']
            ])
            ->rightJoin('casi', 'baihat.id_casi', '=', 'casi.id')
            ->select('baihat.*','casi.*')
            ->whereMonth('baihat.created_at','=',$thanghientai)
            ->orderBy('solannghe','DESC')
            ->get();

        $nhacchaua = baihat::where('baihat.id_theloainhac','=','7')
            ->orWhere('baihat.id_theloainhac','=','8')
            ->rightJoin('casi', 'baihat.id_casi', '=', 'casi.id')
            ->select('baihat.*','casi.*')
            ->whereMonth('baihat.created_at','=',$thanghientai)
            ->orderBy('solannghe','DESC')
            ->get();

        return view('client.album',compact('albumandbaihat','albumandbaihatnghenhieu','nhacviet','nhacchaua','nhacaumi'));
    }

    // ================================== INSERT ======================================//
    public function showform() {
        $loaicasi = loaicasi::all();

        return view('admin.basic_elements',compact('loaicasi'));
    }

    public function themcasi(Request $request) {
        $this->validate($request,
        [
            'khuvuc_casi'=>'required',
            'hoten_casi'=>'required',
            'hot_casi'=>'required',
            'hinh_casi'=>'required',
            'gioithieu_casi'=>'required',

        ],
        [
            'khuvuc_casi.required'=>'Vui lòng chọn khu vực',
            'hoten_casi.required'=>'Vui lòng nhập hoten_casi',
            'hot_casi'=>'Vui lòng chọn hot ca sĩ',
            'hinh_casi.min'=>'vui lòng hình ca sĩ',
            'gioithieu_casi.required'=>'Vui lòng nhập giới thiệu về ca sĩ',
        ]);

        $casi = new casi();

        $casi->loaicasi = $request->khuvuc_casi;
        $casi->hoten_casi = $request->hoten_casi;
        $casi->hot_casi = $request->hot_casi;
        $casi->hinh_casi = $request->hinh_casi;
        $casi->gioithieu_casi = $request->gioithieu_casi;

        // dd($casi);
        $casi->save();

        return redirect()->back()->with('thanhcong','Bạn Đã Insert Ca Sĩ Thành Công');

    }

    // ================================== GET TIN TỨC ==================================//
    public function showhongsao() {
        // Biến lấy giá trị host

        $hot = 1;
    
        $tintuc = DB::table('tintuc')->paginate(3);
        $tintuchot = hongsao::where('tintuc_hot',$hot)->get();

        return view('client.hongsao',compact('tintuc','tintuchot'));
    }
    // ================================== GET DETAIL TIN TỨC ==================================//
    public function Getdetailtintuc(Request $req,$id) {
         // Biến Lấy ngày hiện tại
        $tintucmoi = hongsao::orderBy('created_at','DESC')->take(4)->get();

        $detailtintuc = hongsao::where('id',$req->id)->first();

        // Lấy comment của từng bài 
        $hienthi_comment = binhluantintuc::where('id_tintuc',$id)
            ->join('users', 'users.id', '=', 'binhluantintuc.id_user')
            ->select('users.*','binhluantintuc.*')
            ->where('parent_id','=','0')
            ->get();

        $hienthi_comment_reply = binhluantintuc::where('id_tintuc',$id)
            ->join('users', 'users.id', '=', 'binhluantintuc.id_user')
            ->select('users.*','binhluantintuc.*')
            ->get();

        return view('client.detailtintuc',compact('detailtintuc','tintucmoi','hienthi_comment','hienthi_comment_reply'));
    }
    // ================================== GET DETAIL CA SĨ ==================================//
    public function getdetailcasi(Request $req,$id) {
         // Biến Lấy ngày hiện tại

        $detailaudio = DB::table('baihat')
            ->rightJoin('casi', 'baihat.id_casi', '=', 'casi.id')
            ->rightJoin('theloainhac', 'baihat.id_theloainhac', '=', 'theloainhac.id')
            ->rightJoin('nhacsi', 'baihat.id_nhacsi', '=', 'nhacsi.id')
            ->rightJoin('album', 'baihat.id_album', '=', 'album.id')
            ->first();

        $detailcasi = casi::where('id',$req->id)->first();

        $baihacuacasi = baihat::where('id_casi',$id)
            ->rightJoin('casi', 'baihat.id_casi', '=', 'casi.id')
            ->select('casi.*','baihat.*')
            ->get();


        $videocuacasi = baihat::where('id_casi',$id)
            ->rightJoin('casi', 'baihat.id_casi', '=', 'casi.id')
            ->select('casi.*','baihat.*')
            ->get()
            ->random(4);

        $albumdetailcasi = baihat::where('id_casi',$id)
            ->orderBy('solannghe','DESC')
            ->first();


        $albumdetailcasi = DB::table('baihat')->where('id_casi', '=', $id)
            ->rightJoin('casi', 'baihat.id_casi', '=', 'casi.id')
            ->rightJoin('theloainhac', 'baihat.id_theloainhac', '=', 'theloainhac.id')
            ->rightJoin('nhacsi', 'baihat.id_nhacsi', '=', 'nhacsi.id')
            ->rightJoin('album', 'baihat.id_album', '=', 'album.id')
            ->select('baihat.*','casi.*','theloainhac.*','nhacsi.*','album.*')
            ->first();

        $albumguiy = baihat::where('baihat.id_album',$albumdetailcasi->id_album)
            ->where('id_casi', '=', $id)
            ->get();


        $nghesiguiy = DB::table('baihat')
            ->rightJoin('casi', 'baihat.id_casi', '=', 'casi.id')
            ->where('casi.id','<>',$id)
            ->select('casi.*')
            ->get()
            ->random(8);


        return view('client.detailcasi',compact('detailcasi','baihacuacasi','albumdetailcasi','nghesiguiy','videocuacasi','albumguiy'));
    }



    // ================================== BÌNH LUẬN DETAIL TIN TỨC ================================//
    public function commenttintuc(Request $request, $id) {

        $this->validate($request,
        [
            'noidung'=>'required',
        ],
        [
            'noidung.required'=>'Vui lòng nhập nội dung',
        ]);

        $comment = new binhluantintuc;
        $comment->id_user = Auth::user()->id;
        $comment->id_tintuc = $id;
        $comment->noidung_binhluan = $request->noidung;
        $comment->parent_id = 0;
        $comment->save();

        return redirect('detailtintuc/'.$id);

    }
    public function replycomment(Request $request, $id) {

            $this->validate($request,
            [
                'noidung_binhluan'=>'required',
            ],
            [
                'noidung_binhluan.required'=>'Vui lòng nhập nội dung',
            ]);

            $comment = new binhluantintuc;
            $comment->id_user = Auth::user()->id;
            $comment->id_tintuc = $id;
            $comment->noidung_binhluan = $request->noidung_binhluan;
            $comment->parent_id = $request->parent_id;;
            $comment->save();

            return redirect('detailtintuc/'.$id);

    }


    public function deletecomment($id) {

        $comment = binhluantintuc::find($id);
        $comment->delete();

        return redirect()->back();
    }

    public function updatebl(Request $request, $id) {

            $this->validate($request,[
                'noidung_binhluan'=>'required',
            ]);

            $binhluan= binhluantintuc::find($id);

            $binhluan->noidung_binhluan = $request->input('noidung_binhluan');

            $binhluan->save();

            return redirect()->back();

    }


    // ================================== GET bangxephang ========================================//
    public function Getbangxephang() {

        $theloai = bangxephang::all();

        // $mot = '1';
        // $theloai_baihat = baihat::where('id_theloainhac',$mot);
        $theloai_baihat = baihat::all();
        return view('client.bangxephang',compact('theloai','theloai_baihat'));
    }
	// ======================== FUNCTION ĐĂNG HẬP ĐĂNG KÝ =================================//


    public function dangky(Request $request) {
    	$this->validate($request,
    	[
    		'name'=>'required',
            'hinhanh'=>'required',
    		'dienthoai'=>'required|min:10|max:12',
    		'email'=>'required|email|unique:users,email',
    		'password'=>'required|min:8',
    		're_password'=>'required|same:password',

    	],
    	[
    		'name.required'=>'Vui lòng nhập username',
            'hinhanh.required'=>'Vui lòng nhập hình ảnh',
            'dienthoai.min'=>'vui lòng nhập đủ sô điện thoại ',
            'password.required'=>'Vui lòng nhập mật khẩu',
            're_password.same'=>'Mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            'email.required'=>'vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
    	]);

    	$user = new User();

	    $user->name = $request->name;
        $user->hinhanh = $request->hinhanh;
	    $user->dienthoai = $request->dienthoai;
	    $user->password = bcrypt($request->password);
	    $user->re_password = bcrypt($request->re_password);
	    $user->email = $request->email;
	    $user->save();

        return redirect()->route('dangnhap', [
            'name'    =>  $request->name,
            'password'=>  $request->password
        ]);
	    
    }

    public function dangnhap(Request $request){
    	
	    $this->validate($request,
	        [
	            'name'=>'required', 
	            'password'=>'required|min:8'
	        ],
	        [
	            'name.required'=>'Vui lòng nhập username',
	            'password.required'=>'Vui lòng nhập mật khẩu',
	            'password.min'=>'Mật khẩu ít nhất 8 kí tự',
	        ]
	    );

    	$credentials = array('name'=>$request->name,'password'=>$request->password);

        if(Auth::attempt($credentials)){

            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }

    
    }

// ========================================= ĐĂNG XUẤT =================================================== //
    public function dangxuat(){
    Auth::logout();
    return redirect()->back();
    }
// ========================================= GET LIST CASI =================================================== //
    public function getnghesi() {

        $loai_casi_hot = casi::where('hot_casi',1)->paginate(12);

        $thang = Carbon::now()->month;

        $thang_casi_moi = casi::whereMonth('created_at','>=',$thang)->paginate(12);

        return view('client.casi',compact('loai_casi_hot','thang_casi_moi'));
    }
    public function getloaicasi($type) {

        $loai_casi_hot = casi::where('khuvuccasi',$type)->where('hot_casi',1)->paginate(8);

        $thang_casi_moi = casi::where('khuvuccasi',$type)->orderBy('created_at','DESC')->paginate(8);

        return view('client.casi',compact('loai_casi_hot','thang_casi_moi'));
    }

// ====================================== SẮP XẾP CA SI =====================================================//

    public function sapxepnghesi(Request $request) {

        $khuvuccasi = $request->input('khuvuccasi');

        $thutuaz = $request->input('thutuaz');

        $loai_casi_hot = casi::where('khuvuccasi',$khuvuccasi)->where('hoten_casi','like','%' . $thutuaz . '%')->paginate(8);

        $thang = Carbon::now()->month;

        $thang_casi_moi = casi::where('khuvuccasi',$khuvuccasi)->where('hoten_casi','like','%' . $thutuaz . '%')->whereMonth('created_at','>=',$thang)->paginate(8);

        return view('client.casi',compact('loai_casi_hot','thang_casi_moi'));
    }
// ========================================= SETTING USER =================================================== //

    public function edituser(Request $request)
        {
            $this->validate($request,[
                'id'=>'required',
                'name'=>'required',
                'hinhanh'=>'',
                'dienthoai'=>'required|min:10|max:12',
                'email'=>'required',
                'password'=>'required|min:8',
                're_password'=>'required|same:password',
            ]);
            // var_dump($request);
            $duongdanhinh = './img/';
            $hinhanh = $request->input('hinhanh');
            $id =  $request->input('id');
            $nguoidung= User::find($id);

            $nguoidung->name = $request->input('name');
            $nguoidung->hinhanh = $duongdanhinh.$hinhanh;
            $nguoidung->dienthoai = $request->input('dienthoai');
            $nguoidung->email = $request->input('email');
            $nguoidung->password = bcrypt($request->input('password'));
            $nguoidung->re_password = bcrypt($request->input('re_password'));

            $nguoidung->save();

            return redirect('userdetail');


        }





}
