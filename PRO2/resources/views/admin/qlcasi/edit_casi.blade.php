@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật ca sĩ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action='../save_casi/{{$emp->id}}' method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên ca sĩ</label>
                            <input type="text" class="form-control" name='hoten_casi' value="{{$emp->hoten_casi}}" id="exampleInputPassword1" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot {{$emp->hot_casi}} ★</label>
                            <select class="form-control"  name='hot_casi' id="exampleFormControlInput1" >
                                <option value="1">1 ★</option>
                                <option value="2">2 ★</option>
                                <option value="3">3 ★</option>
                                <option value="4">4 ★</option>
                                <option value="5">5 ★</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Yêu thích</label>
                            <input type="number" class="form-control" name='yeuthich' id="exampleInputPassword1" value="{{$emp->yeuthich}}" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ca sĩ</label>
                            <input type="file" name='avatar_casi' value="{{$emp->avatar_casi}}" id="exampleInputFile" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Poster ca sĩ</label>
                            <input type="file" name='poster_casi' value="{{$emp->poster_casi}}" id="exampleInputFile" required="">
                        </div>
                        <div class="form-group ">
                            <label for="ccomment">Giới thiệu</label>
                            <div >
                                <textarea class="form-control" id="ccomment" name='gioithieu_casi' required="" >{{$emp->gioithieu_casi}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Khu Vực</label>
                            <select class="form-control"  name='khuvuccasi' id="exampleFormControlInput1" required="" >
                                <option value="1">Việt Nam</option>
                                <option value="2">Hàn Quốc</option>
                                <option value="3">Âu Mỹ</option>
                            </select>
                        </div>                   
                        <button type="submit" name="save" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

