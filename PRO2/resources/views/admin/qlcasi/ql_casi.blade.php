@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách ca sĩ
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <td hidden>ID ca sĩ</td>
            <td>Tên ca sĩ</td>
            <td>Hot</td>
            <td>Yêu thích</td>
            <td>Avatar</td>
            <td>Poster</td>
            <td>Giới thiệu</td>
            <td>Khu vực</td>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($emp2 as $emp3)
          <tr>
            <td hidden><span class="text-ellipsis">{{$emp3->id}} ★</span></td>
            <td><span class="text-ellipsis">{{$emp3->hoten_casi}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->hot_casi}} ★</span></td>
            <td><span class="text-ellipsis">{{$emp3->yeuthich}}</span></td>
            <td><span class="text-ellipsis"><img width="100" height="100" src="backend/images/{{$emp3->avatar_casi}}" alt=""></span></td>
            <td><span class="text-ellipsis"><img width="100" height="100" src="backend/images/{{$emp3->poster_casi}}" alt=""></span></td>
            <td><span class="text-ellipsis">{{$emp3->gioithieu_casi}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->khuvuccasi}}</span></td>
            <td>
                <a href="{{URL::to('/edit_casi/'.$emp3->id)}}" class="active" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete_casi/'.$emp3->id)}}" class="active" ui-toggle-class="">
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