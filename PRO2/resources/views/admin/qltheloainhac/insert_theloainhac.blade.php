 @extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Thể loại nhạc
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="store_theloainhac" method="get">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thể loại nhạc</label>
                            <input type="text" class="form-control" name='ten_theloainhac' id="exampleInputPassword1" placeholder="Nhập tên bài hát">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình </label>
                            <input type="file" name='hinh_theloainhac' id="exampleInputFile">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục</label>
                            <input type="text" class="form-control" name='danhmuc' id="exampleInputPassword1" placeholder="Nhập tên bài hát">
                        </div>
                        <input type="submit" name="save" class="btn btn-info" value='INSERT'/>
                        
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

