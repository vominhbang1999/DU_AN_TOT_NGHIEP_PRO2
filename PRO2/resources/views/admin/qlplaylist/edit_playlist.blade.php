@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật Playlist
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action='../save_playlist/{{$playlist->id}}' method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                            <label for="exampleInputPassword1">Tên User</label>
                            <select class="form-control"  name='users' id="exampleFormControlInput1" >
                                @foreach($tenusers as $emp3)
                                <option value="{{$emp3->id_user}}">{{$emp3->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên</label>
                            <input type="text" class="form-control" name='ten_playlist' value='{{$playlist->ten_playlist}}'required="">
                        </div>
    
                        
                        <div class="form-group">
                            <label for="exampleInputFile">Hình</label>
                            <input type="file" name='hinhanh_playlist' required="" value='{{$playlist->hinhanh_playlist}}' id="exampleInputFile">
                        </div>
                        
                        <div class="form-group ">
                            <label for="ccomment">Mô tả</label>
                            <div >
                                <textarea class="form-control" id="ccomment" required=""  name='mota_playlist' >{{$playlist->mota_playlist}}</textarea>
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

