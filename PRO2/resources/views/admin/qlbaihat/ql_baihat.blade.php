@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách Bài hát
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <td hidden>ID</td>
            <td>Tên Bài hát</td>
            <td>Lời bài hát</td>
            <td>Hình</td>
            <td>Bài hát hot</td>
            <td>Audio</td>
            <td>Video</td>
            <td>Mô tả bài hát</td>
            <td>Số lần nghe</td>
            <td>Số lần tải</td>
            <td>Play list</td>
            <td>Số lần yêu thích</td>
            <td hidden>id_theloainhac</td>
            <td hidden>id_album</td>
            <td hidden>id_casi</td>
            <td hidden>id_nhacsi</td>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($emp2 as $emp3)
          <tr>
            <td hidden><span class="text-ellipsis">{{$emp3->id}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->ten_baihat}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->loi_baihat}}</span></td>
            <td><span class="text-ellipsis"><img width="100" height="100" src="backend/images/{{$emp3->hinh_baihat}}" alt=""></span></td>
            <td><span class="text-ellipsis">{{$emp3->hot_baihat}} ★</span></td>
            <td><span class="text-ellipsis">{{$emp3->audio_baihat}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->video_baihat}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->mota_baihat}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->solannghe}} lần</span></td>
            <td><span class="text-ellipsis">{{$emp3->solantai}} lần</span></td>
            <td><span class="text-ellipsis">{{$emp3->playlist}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->solanyeuthich}} lần</span></td>
            <td hidden><span class="text-ellipsis">{{$emp3->id_theloainhac}}</span></td>
            <td hidden><span class="text-ellipsis">{{$emp3->id_album}}</span></td>
            <td hidden><span class="text-ellipsis">{{$emp3->id_nhacsi}}</span></td>
            <td>
                <a href="{{URL::to('edit_baihat/'.$emp3->id)}}" class="active" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete_baihat/'.$emp3->id)}}" class="active" ui-toggle-class="">
                    <i class="fa fa-times text-danger text"></i>
                </a>
            </td>
          </tr>
        @endforeach
            
        </tbody>
      </table>
      <div class="pages" style="width: 100%;height: 90px;display: flex;justify-content: flex-end;align-items: center;">
                <ul class="nav justify-content-center">
                    <li class="">
                        {{$emp2->links()}}
                    </li>
                </ul>
        </div>
    </div>
  </div>
</div>
@endsection