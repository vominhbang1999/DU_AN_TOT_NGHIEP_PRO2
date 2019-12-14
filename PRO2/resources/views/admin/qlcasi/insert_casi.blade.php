@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Ca sĩ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="store_casi" method="get">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên ca sĩ</label>
                            <input type="text" class="form-control" name='hoten_casi' id="exampleInputPassword1" placeholder="Nhập tên bài hát">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot</label>
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
                            <input type="number" class="form-control" name='yeuthich' id="exampleInputPassword1" placeholder="Nhập tên bài hát">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ca sĩ</label>
                            <input type="file" name='avatar_casi' id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Poster ca sĩ</label>
                            <input type="file" name='poster_casi' id="exampleInputFile">
                        </div>
                        <div class="form-group ">
                            <label for="ccomment">Giới thiệu</label>
                            <div >
                                <textarea class="form-control" id="ccomment" name='gioithieu_casi' required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Khu vực</label>
                            <select class="form-control"  name='khuvuccasi' id="exampleFormControlInput1" >
                                <option value="1">Việt Nam</option>
                                <option value="2">Hàn Quốc</option>
                                <option value="3">Âu Mỹ</option>
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

