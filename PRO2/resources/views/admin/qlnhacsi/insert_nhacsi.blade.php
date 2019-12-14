@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm nhac si
            </header> 
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="store_nhacsi" method="get">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên nhacsi</label>
                            <input type="text" class="form-control" name='hoten_nhacsi' id="exampleInputPassword1" placeholder="Nhập tên bài hát" required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot</label>
                            <select class="form-control"  name='hot_nhacsi' id="exampleFormControlInput1" >
                                <option value="1">1 ★</option>
                                <option value="2">2 ★</option>
                                <option value="3">3 ★</option>
                                <option value="4">4 ★</option>
                                <option value="5">5 ★</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình </label>
                            <input type="file" name='hinh_nhacsi' id="exampleInputFile">
                        </div>
                        <div class="form-group ">
                            <label for="ccomment">Giới thiệu</label>
                            <div >
                                <textarea class="form-control" id="ccomment"  name='gioithieu_nhacsi' required=""></textarea>
                            </div>
                        </div>

                        <input type="submit" name="save" class="btn btn-info" value='INSERT'/>
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

