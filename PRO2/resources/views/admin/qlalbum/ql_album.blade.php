@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách album
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <td hidden>Id</td>
            <td>Tên album</td>
            <td>Hot</td>
            <td>Hình</td>
            <td>Slider</td>
            <td>Mô tả</td>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($emp2 as $emp3)
          <tr>
            <td hidden><span class="text-ellipsis">{{$emp3->id}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->ten_album}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->hot_album}} ★</span></td>
            <td><span class="text-ellipsis"><img width="100" height="100" src="backend/images/{{$emp3->hinh_album}}" alt=""></span></td>
            <td><span class="text-ellipsis">{{$emp3->slider_album}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->mota_album}}</span></td>
            <td>
                <a href="{{URL::to('/edit_album/'.$emp3->id)}}" class="active" ui-toggle-class="">
                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                </a>
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete_album/'.$emp3->id)}}" class="active" ui-toggle-class="">
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