@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật Album bài hát
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action='../save_album/{{$emp->id}}' method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên album</label>
                            <input type="text" class="form-control" name='ten_album'required="" value="{{$emp->ten_album}}"  >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot {{$emp->hot_album}} ★</label>
                            <select class="form-control"  name='hot_album' id="exampleFormControlInput1" >
                                <option value="1">1 ★</option>
                                <option value="2">2 ★</option>
                                <option value="3">3 ★</option>
                                <option value="4">4 ★</option>
                                <option value="5">5 ★</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình album</label>
                            <input type="file" name='hinh_album' value="{{$emp->hinh_album}}" id="exampleInputFile" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Slider album</label>
                            <input type="file" name='slider_album' value="{{$emp->slider_album}}" id="exampleInputFile" required="">
                        </div>
                        <div class="form-group ">
                            <label for="ccomment">Mô tả</label>
                            <div >
                                <textarea class="form-control" id="ccomment" name='mota_album' required="" >{{$emp->mota_album}}</textarea>
                            </div>
                        </div>
                        <button type="submit" name="save" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

