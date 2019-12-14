@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Album
            </header>
            <div class="panel-body">1
                <div class="position-center">
                    <form role="form" action="store_album" method="get">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên album</label>
                            <input type="text" class="form-control" name='ten_album' id="exampleInputPassword1" placeholder="Nhập tên bài hát">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot</label>
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
                            <input type="file" name='hinh_album' id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Slider album</label>
                            <input type="file" name='slider_album' id="exampleInputFile">
                        </div>
                        <div class="form-group ">
                            <label for="ccomment">Mô tả</label>
                            <div >
                                <textarea class="form-control" id="ccomment" name='mota_album' required=""></textarea>
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

