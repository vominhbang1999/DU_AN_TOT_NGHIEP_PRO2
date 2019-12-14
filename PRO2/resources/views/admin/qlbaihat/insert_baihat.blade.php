@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Bài hát
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form action="store_baihat" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên bài hát</label>
                            <input type="text" class="form-control" name='ten_baihat' id="exampleInputPassword1" >
                        </div>
                        <div class="form-group ">
                            <label for="omment">Lời bài hát</label>
                            <div >
                                <textarea class="form-control" id="omment" name='loi_baihat' required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình</label>
                            <input type="file" class="form-control" name='hinh_baihat' id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot</label>
                            <select class="form-control"  name='hot_baihat' id="exampleFormControlInput1" >
                                <option value="1">1 ★</option>
                                <option value="2">2 ★</option>
                                <option value="3">3 ★</option>
                                <option value="4">4 ★</option>
                                <option value="5">5 ★</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">SRC Video</label>
                            <input type="text" class="form-control" name='src_baihat' id="exampleInputPassword1" >
                        </div>
                        <div class="form-group ">
                            <label for="ccomment">Mô tả</label>
                            <div >
                                <textarea class="form-control" id="ccomment" name='mota_baihat' required=""></textarea>
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số lần nghe</label>
                            <input type="number" class="form-control" name='solannghe' id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số lần tải</label>
                            <input type="number" class="form-control" name='solantai' id="exampleInputPassword1" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Play list</label>
                            <select class="form-control"  name='playlist' id="exampleFormControlInput1" >
                                <option value="1">Nghe nhiều</option>
                                <option value="2">Yêu thích</option>
                                <option value="3">Nghe nhiều</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số lần yêu thích</label>
                            <input type="number" class="form-control" name='solanyeuthich' id="exampleInputPassword1" >
                        </div>
                        <!-- // -->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên thể loại</label>
                            <select class="form-control"  name='theloainhac' id="exampleFormControlInput1" >
                                @foreach($tentheloai as $emp3)
                                    <option value="{{$emp3->id}}">{{$emp3->ten_theloainhac}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên album</label>
                            <select class="form-control"  name='album' id="exampleFormControlInput1" >
                                @foreach($tenalbum as $emp3)
                                    <option value="{{$emp3->id}}">{{$emp3->ten_album}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên nhạc sĩ</label>
                            <select class="form-control"  name='nhacsi' id="exampleFormControlInput1" >
                                @foreach($tennhacsi as $emp3)
                                    <option value="{{$emp3->id}}">{{$emp3->hoten_nhacsi}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        

                        <input type="submit" name="save" class="btn btn-info" value='INSERT'/>
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

