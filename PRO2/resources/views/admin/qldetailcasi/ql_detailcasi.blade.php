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
            <td>Tên ca sĩ</td>
            <td>Tên bài hát</td>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($detailcasi2 as $emp3)
          <tr>
            <td><span class="text-ellipsis">{{$emp3->hoten_casi}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->ten_baihat}}</span></td>
            <td>
                <a href="update-detailcasi/{{$emp3->id_casi}}/baihat/{{$emp3->id_baihat}}" class="active" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="delete-detailcasi/{{$emp3->id_casi}}/baihat/{{$emp3->id_baihat}}" class="active" ui-toggle-class="">
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