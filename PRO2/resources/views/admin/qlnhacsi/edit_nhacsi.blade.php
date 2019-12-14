@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row"> 
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật nhạc sĩ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action='../save_nhacsi/{{$emp->id}}' method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Họ tên nhạc sĩ</label>
                            <input type="text" class="form-control" name='hoten_nhacsi' required="" value='{{$emp->hoten_nhacsi}}' >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot {{$emp->hot_nhacsi}} ★</label>
                            <select class="form-control"  name='hot_nhacsi' required="" id="exampleFormControlInput1" >
                                <option value="1">1 ★</option>
                                <option value="2">2 ★</option>
                                <option value="3">3 ★</option>
                                <option value="4">4 ★</option>
                                <option value="5">5 ★</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình</label>
                            <input type="file" name='hinh_nhacsi' required="" value='{{$emp->hinh_nhacsi}}' id="exampleInputFile">
                        </div>
                        <div class="form-group ">
                            <label for="ccomment">Giới thiệu</label>
                            <div >
                                <textarea class="form-control" id="ccomment" required=""  name='gioithieu_nhacsi' >{{$emp->gioithieu_nhacsi}}</textarea>
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

