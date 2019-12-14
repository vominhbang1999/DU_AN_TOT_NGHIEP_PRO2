@include('client.layout.header')

    <!-- phần content -->
    <div class="container">
        <div class="row mt-3">
                <!-- tin nóng -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="clearfix">
                            <div class="float-left title pl-5">
                                <a href="#">
                                    <h3>Tin nóng</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="near-header">
                     @foreach( $tintuchot as $tintuchot2 )
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-image">
                                <a href="{{route('detailtintuc',$tintuchot2->id)}}">
                                    <img src="{{$tintuchot2->hinhanh_tintuc}}" alt="Tin Tức Hot">
                                </a>
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="text">
                                <div class="title-text">
                                    <a href="{{route('detailtintuc',$tintuchot2->id)}}">
                                        <h3>{{$tintuchot2->tieude_tintuc}}</h3>
                                    </a>
                                </div>
                                <div class="detail-text">
                                    <p>{{$tintuchot2->mota_tintuc}}</p>
                                </div>
                                <a href="{{route('detailtintuc',$tintuchot2->id)}}" class="view-detail">Xem chi tiết</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
        <div class="box-hongsao">
            <div class="row">
                @foreach($tintuc as $tintuc3  )
                <div class="col-md-4">
                    <div class="box-detail">
                        <div class="box-image">
                            <a href="{{route('detailtintuc',$tintuc3->id)}}">
                                <img src="{{$tintuc3->hinhanh_tintuc}}" alt="">
                            </a>
                        </div>
                        <div class="box-text">
                            <p>
                                <a href="{{route('detailtintuc',$tintuc3->id)}}">
                                    {{$tintuc3->tieude_tintuc}}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
         <div class="pages">
                <ul class="nav justify-content-center">
                    <li class="">
                        {{ $tintuc->links() }}
                    </li>
                </ul>
            </div>

    </div>
    <!-- kết thúc phần content -->

@include('client.layout.footer')