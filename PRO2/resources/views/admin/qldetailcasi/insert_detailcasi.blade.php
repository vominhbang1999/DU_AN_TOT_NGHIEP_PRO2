@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm chi tiết Ca sĩ
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="store_casi_detail" method="get">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ca sĩ</label>
                            <select class="form-control"  name='casidetail' id="exampleFormControlInput1" >
                                @foreach($detailcasi as $detailcasi3)
                                    <option value="{{$detailcasi3->id}}">{{$detailcasi3->hoten_casi}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Bài Hát</label>
                            <select class="form-control"  name='songdetail' id="exampleFormControlInput1" >
                                @foreach($detailbaihat as $detailbaihat3)
                                    <option value="{{$detailbaihat3->id}}">{{$detailbaihat3->ten_baihat}}</option>
                                @endforeach
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

