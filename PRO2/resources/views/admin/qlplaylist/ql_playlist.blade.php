@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách Playlist
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <td hidden>id</td>
            <td hidden>id users</td>
            <td hidden>id bài hát</td>
            <td>Tên</td>
            <td>Hình</td>
            <td>Mô tả</td>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($emp2 as $emp3)
          <tr>
            <td hidden><span class="text-ellipsis">{{$emp3->id}}</span></td>
            <td hidden><span class="text-ellipsis">{{$emp3->id_user}}</span></td>
            <td hidden><span class="text-ellipsis">{{$emp3->id_baihat}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->ten_playlist}}</span></td>
            <td><span class="text-ellipsis"><img width="100" height="100" src="backend/images/{{$emp3->hinhanh_playlist}}" alt=""></span></td>
            <td><span class="text-ellipsis">{{$emp3->mota_playlist}}</span></td>
            <td>
                <a href="{{URL::to('/edit_playlist/'.$emp3->id)}}" class="active" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete_playlist/'.$emp3->id)}}" class="active" ui-toggle-class="">
                    <i class="fa fa-times text-danger text"></i>
                </a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection