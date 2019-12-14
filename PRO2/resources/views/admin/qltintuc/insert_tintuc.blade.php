@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm tintuc
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="store_tintuc" method="get">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tiêu đề tin tức</label>
                            <input type="text" class="form-control" name='tieude_tintuc' id="exampleInputPassword1" placeholder="Nhập tên bài hát">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả tin tức</label>
                            <input type="text" class="form-control" name='mota_tintuc' id="exampleInputPassword1" placeholder="Nhập tên bài hát">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot</label>
                            <select class="form-control"  name='tintuc_hot' id="exampleFormControlInput1" >
                                <option value="1">1 ★</option>
                                <option value="2">2 ★</option>
                                <option value="3">3 ★</option>
                                <option value="4">4 ★</option>
                                <option value="5">5 ★</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="ccomment">Nội dung</label>
                            <div >
                                <textarea class="form-control" id="ccomment"  name='noidung_tintuc' required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình </label>
                            <input type="file" name='hinhanh_tintuc' id="exampleInputFile">
                        </div>
                        <div class="form-group ">
                            <label for="omment">Lượt xem</label>
                            <div >
                                <input type="number" class="form-control" id="omment"   name='luotxem' >  
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

