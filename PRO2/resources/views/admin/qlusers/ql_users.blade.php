@extends('admin.admin_layout')
@section('admin.admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh sách Users
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <td hidden>Id</td>
            <td>Vip</td>
            <td>Admin</td>
            <td>Xu</td>
            <td>Name Users</td>
            <td>Hình ảnh</td>
            <td>Số điện thoại</td>
            <td>Email</td>
            <td>Email_verified</td>
            <td>Status</td>
            <td>Token</td>
            <td>Password</td>
            <td>Re-Password</td>
            <td>Remember_token</td>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($emp2 as $emp3)
          <tr>
            <td hidden><span class="text-ellipsis">{{$emp3->id}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->vip}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->admin}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->xu}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->name}}</span></td>
            <td><span class="text-ellipsis"><img width="100" height="100" src="backend/images/{{$emp3->hinhanh}}" alt=""></span></td>
            <td><span class="text-ellipsis">{{$emp3->dienthoai}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->email}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->email_verified_at}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->status}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->token}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->password}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->re_password}}</span></td>
            <td><span class="text-ellipsis">{{$emp3->remember_token}}</span></td>
            <td>
                <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{URL::to('/delete_users/'.$emp3->id)}}" class="active" ui-toggle-class="">
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