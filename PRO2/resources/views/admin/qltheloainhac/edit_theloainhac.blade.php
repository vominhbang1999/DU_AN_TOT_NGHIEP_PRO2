@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật Thể loại nhạc
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action='../save_theloainhac/{{$emp->id}}' method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thể loại nhạc</label>
                            <input type="text" class="form-control" name='ten_theloainhac' required="" value='{{$emp->ten_theloainhac}}' id="exampleInputPassword1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình </label>
                            <input type="file" name='hinh_theloainhac' required="" value='{{$emp->hinh_theloainhac}} 'id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục</label>
                            <input type="text" class="form-control" name='danhmuc' id="exampleInputPassword1" value='{{$emp->danhmuc}}'>
                        </div>                    
                        <button type="submit" name="save" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

 