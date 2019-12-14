@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm Playlist
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="store_playlist" method="get">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tên User</label>
                            <select class="form-control"  name='users' id="exampleFormControlInput1" >
                                @foreach($tenusers as $emp3)
                                <option value="{{$emp3->id}}">{{$emp3->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình </label>
                            <input type="file" name='hinhanh_playlist' id="exampleInputFile">
                        </div>

                        <div class="form-group ">
                            <label for="omment">Tên play list</label>
                            <div >
                                <input type="text" class="form-control" id="omment"   name='ten_playlist' >  
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="ccomment">Mô tả</label>
                            <div >
                                <textarea class="form-control" id="ccomment"  name='mota_playlist' required=""></textarea>
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

