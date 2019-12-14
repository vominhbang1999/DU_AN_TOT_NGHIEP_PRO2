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
            <td hidden>Id</td>
            <td >id_user</td>
            <td>id_tintuc</td>
            <td>noidung_binhluan</td>
            <td>parent_id</td>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($emp2 as $emp3)
          <tr>
            <td hidden><span class="text-ellipsis">{{$emp3->id}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->id_user}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->id_tintuc}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->noidung_binhluan}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->parent_id}}</span></td>
            <td>
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete_bltintuc/'.$emp3->id)}}" class="active" ui-toggle-class="">
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