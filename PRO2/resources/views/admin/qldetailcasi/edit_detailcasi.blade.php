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
                    <form role="form" action='edit-detailcasi/{{$casi->id_casi}}/baihat/{{$casi->id_baihat}}' method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên ca sĩ</label>
                            <input type="text" class="form-control" name='casidetail' value='{{$casi->hoten_casi}}'  required="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên baihat</label>
                            <input type="text" class="form-control" name='baihatdetail' value='{{$casi->ten_baihat}}'  required="">
                        </div>
                        <button type="submit" name="save" class="btn btn-info">Cập nhật</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection

