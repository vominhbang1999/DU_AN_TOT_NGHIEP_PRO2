@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật Tin tức
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action='../save_tintuc/{{$emp->id}}' method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tiêu đề tin</label>
                            <input type="text" class="form-control" name='tieude_tintuc' required="" value='{{$emp->tieude_tintuc}}' >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tiêu đề tin</label>
                            <input type="text" class="form-control" name='mota_tintuc' required="" value='{{$emp->mota_tintuc}}' >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hot {{$emp->hot_tintuc}} ★</label>
                            <select class="form-control"  name='tintuc_hot' required="" id="exampleFormControlInput1" >
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
                                <textarea class="form-control" id="ccomment" required="" name='noidung_tintuc' >{{$emp->noidung_tintuc}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình</label>
                            <input type="file" name='hinhanh_tintuc' required="" value='{{$emp->hinhanh_tintuc}}' id="exampleInputFile">
                        </div>
                        <div class="form-group ">
                            <label for="comment">Lượt xem</label>
                            <div >
                                <input type="number" class="form-control" required="" id="comment" name='luotxem' value='{{$emp->luotxem}}'/>
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

