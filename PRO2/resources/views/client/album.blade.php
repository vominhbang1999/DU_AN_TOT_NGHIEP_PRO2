@include('client.layout.header')
    <main>
        <section id="album-cho-di" class=" duy mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="box_title box_title_filter">

                            <h1 class="name">ALBUM</h1>
                            <div class="box-nav box-nav-ext">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" style="display: inline-block"  id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Mới Nhất</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="display: inline-block" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Nghe Nhiều</a>
                                    </li>

                                </ul>

                            </div>


                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            @foreach($albumbaihat as $albumbaihat2)
                                <div class="section-box-album">
                                    <div class="title-album-moi mt-5">
                                        <h4 class="name" style="color: white">{{$albumbaihat2->ten_album}}</h4>
                                    </div>
                                        
                                    <div class="row mobile4">
                                        @foreach($albumbaihat2->baihatalbum as $baihat123)
                                            <div class="col-6 col-lg-3 mb-1">
                                                <div class="thumb-hover">
                                                    <a href="{{route('detailaudio',$baihat123->id)}}">
                                                        <figure>
                                                            <img src="{{$baihat123->hinh_baihat}}"
                                                                alt="{{$baihat123->ten_baihat}}" class="img-fluid">
                                                                <div class="circle">
                                                                </div>
                                                        </figure>
                                                    </a>
                                                  
                                                </div>


                                                <div class="info">
                                                    <h3 class="name over-text white"><a
                                                            href="{{route('detailcasi',$baihat123->id)}}
                                                            title="{{$baihat123->ten_baihat}}">{{$baihat123->ten_baihat}}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                            <div class="duma4">
                                                  
                                <i class="fas fa-arrow-down"></i>
                           </div>





                            </div>








                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">



                            @foreach($albumbaihat as $albumbaihat2)
                                <div class="section-box-album">
                                    <div class="title-album-moi mt-5">
                                        <h4 class="name" style="color: white">{{$albumbaihat2->ten_album}}</h4>
                                    </div>
                                        
                                    <div class="row mobile4">
                                        @foreach($albumbaihat2->baihatalbum->sortByDesc('solannghe') as $baihat123)
                                            <div class="col-6 col-lg-3 mb-1">
                                                <div class="thumb-hover">
                                                    <a href="{{route('detailaudio',$baihat123->id)}}">
                                                        <figure>
                                                            <img src="{{$baihat123->hinh_baihat}}"
                                                                alt="{{$baihat123->ten_baihat}}" class="img-fluid">
                                                                <div class="circle">
                                                                </div>
                                                        </figure>
                                                    </a>
                                                  
                                                </div>


                                                <div class="info">
                                                    <h3 class="name over-text white"><a
                                                            href="{{route('detailcasi',$baihat123->id)}}
                                                            title="{{$baihat123->ten_baihat}}">{{$baihat123->ten_baihat}}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach

                                        <div class="duma5">
                                                      
                                            <i class="fas fa-arrow-down"></i>
                                       </div>
                            </div>

                        </div>
                    </div>
                    <!-- END -->
                    <div class="col-12 col-lg-3">
                        <figure class="mt-3 mb-5" id="sontung">
                            <img src="{{$nhacviet[0]->avatar_casi}}" alt="" class="img-fluid">
                        </figure>
                        <div class="box-bxh" >
                                <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Việt Nam</a>
                                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Âu Mỹ</a>
                                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Hàn Quốc</a>
                                        </div>
                                      </nav>
                                      <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <ul class="mobile" >
                                                        <li class="chart_song_item">
                                                            <div class="box-ranks">
                                                                    <a href="detailmv/{{$nhacviet[0]->id}}">
                                                                        <figure>
                                                                            <img style="width: 100px;" src="{{$nhacviet[0]->hinh_baihat}};" alt="" class="img-fluid">
                                                                            <span>
                                                                                01
                                                                            </span>
                                                                        </figure>
            
                                                                    </a><div class="infor_n">
                                                                        <h3>

                                                                            <a href="detailmv/{{$nhacviet[0]->id}}">
                                                                                {{$nhacviet[0]->ten_baihat}}
                                                                            </a>
        
                                                                        </h3>
                                                                        <p class="chat-song-top1">
                                                                            <a href="detailcasi/{{$nhacviet[0]->id_casi}}">
                                                                                {{$nhacviet[0]->hoten_casi}}
                                                                            </a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            
                                                        </li>
                                                        <!-- end top1 -->
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt" id="red">
                                                                        02
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[1]->id}}">
                                                                            {{$nhacviet[1]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[1]->id_casi}}">
                                                                                {{$nhacviet[1]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        03
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[2]->id}}">
                                                                           {{$nhacviet[2]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[2]->id_casi}}">
                                                                                {{$nhacviet[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        04
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[3]->id}}">
                                                                           {{$nhacviet[3]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[2]->id_casi}}">
                                                                                {{$nhacviet[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[4]->id}}">
                                                                            {{$nhacviet[4]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[2]->id_casi}}">
                                                                                {{$nhacviet[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[5]->id}}">
                                                                           {{$nhacviet[5]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[5]->id_casi}}">
                                                                                {{$nhacviet[5]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[6]->id}}">
                                                                            {{$nhacviet[6]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[6]->id_casi}}">
                                                                                {{$nhacviet[6]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[7]->id}}">
                                                                            {{$nhacviet[7]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[7]->id_casi}}">
                                                                                {{$nhacviet[7]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[8]->id}}">
                                                                           {{$nhacviet[8]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[8]->id_casi}}">
                                                                                {{$nhacviet[8]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacviet[9]->id}}">
                                                                            {{$nhacviet[9]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacviet[9]->id_casi}}">
                                                                                {{$nhacviet[9]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                       
                                                        
                                                    </ul>
                                                    <div class="duma" >
                                                      
                                                            <i class="fas fa-arrow-down"></i>
                                                       </div>
                                                   
                                        </div>





                                        <!-- ssss -->
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                <ul class="mobile" >
                                                        <li class="chart_song_item">
                                                            <div class="box-ranks">
                                                                    <a href="detailmv/{{$nhacaumi[0]->id}}">
                                                                        <figure>
                                                                            <img style="width: 100px;" src="{{$nhacaumi[0]->hinh_baihat}};" alt="" class="img-fluid">
                                                                            <span>
                                                                                01
                                                                            </span>
                                                                        </figure>
            
                                                                    </a><div class="infor_n">
                                                                        <h3>

                                                                            <a href="detailmv/{{$nhacaumi[0]->id}}">
                                                                                {{$nhacaumi[0]->ten_baihat}}
                                                                            </a>
        
                                                                        </h3>
                                                                        <p class="chat-song-top1">
                                                                            <a href="detailcasi/{{$nhacaumi[0]->id_casi}}">
                                                                                {{$nhacaumi[0]->hoten_casi}}
                                                                            </a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            
                                                        </li>
                                                        <!-- end top1 -->
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt" id="red">
                                                                        02
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[1]->id}}">
                                                                            {{$nhacaumi[1]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[1]->id_casi}}">
                                                                                {{$nhacaumi[1]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        03
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[2]->id}}">
                                                                           {{$nhacaumi[2]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[2]->id_casi}}">
                                                                                {{$nhacaumi[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        04
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[3]->id}}">
                                                                           {{$nhacaumi[3]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[2]->id_casi}}">
                                                                                {{$nhacaumi[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[4]->id}}">
                                                                            {{$nhacaumi[4]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[2]->id_casi}}">
                                                                                {{$nhacaumi[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[5]->id}}">
                                                                           {{$nhacaumi[5]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[5]->id_casi}}">
                                                                                {{$nhacaumi[5]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[6]->id}}">
                                                                            {{$nhacaumi[6]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[6]->id_casi}}">
                                                                                {{$nhacaumi[6]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[7]->id}}">
                                                                            {{$nhacaumi[7]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[7]->id_casi}}">
                                                                                {{$nhacaumi[7]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[8]->id}}">
                                                                           {{$nhacaumi[8]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[8]->id_casi}}">
                                                                                {{$nhacaumi[8]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacaumi[9]->id}}">
                                                                            {{$nhacaumi[9]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacaumi[9]->id_casi}}">
                                                                                {{$nhacaumi[9]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                       
                                                        
                                                    </ul>
                                            <div class="duma2" >
                                                    <i class="fas fa-arrow-down"></i>
                                               </div>
                                            
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"> 
                                            <ul class="mobile" >
                                                        <li class="chart_song_item">
                                                            <div class="box-ranks">
                                                                    <a href="detailmv/{{$nhacchaua[0]->id}}">
                                                                        <figure>
                                                                            <img style="width: 100px;" src="{{$nhacchaua[0]->hinh_baihat}};" alt="" class="img-fluid">
                                                                            <span>
                                                                                01
                                                                            </span>
                                                                        </figure>
            
                                                                    </a><div class="infor_n">
                                                                        <h3>

                                                                            <a href="detailmv/{{$nhacchaua[0]->id}}">
                                                                                {{$nhacchaua[0]->ten_baihat}}
                                                                            </a>
        
                                                                        </h3>
                                                                        <p class="chat-song-top1">
                                                                            <a href="detailcasi/{{$nhacchaua[0]->id_casi}}">
                                                                                {{$nhacchaua[0]->hoten_casi}}
                                                                            </a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            
                                                        </li>
                                                        <!-- end top1 -->
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt" id="red">
                                                                        02
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[1]->id}}">
                                                                            {{$nhacchaua[1]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[1]->id_casi}}">
                                                                                {{$nhacchaua[1]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        03
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[2]->id}}">
                                                                           {{$nhacchaua[2]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[2]->id_casi}}">
                                                                                {{$nhacchaua[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        04
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[3]->id}}">
                                                                           {{$nhacchaua[3]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[2]->id_casi}}">
                                                                                {{$nhacchaua[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[4]->id}}">
                                                                            {{$nhacchaua[4]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[2]->id_casi}}">
                                                                                {{$nhacchaua[2]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[5]->id}}">
                                                                           {{$nhacchaua[5]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[5]->id_casi}}">
                                                                                {{$nhacchaua[5]->hoten_casi}}
                                                                        </a>
                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[6]->id}}">
                                                                            {{$nhacchaua[6]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[6]->id_casi}}">
                                                                                {{$nhacchaua[6]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[7]->id}}">
                                                                            {{$nhacchaua[7]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[7]->id_casi}}">
                                                                                {{$nhacchaua[7]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[8]->id}}">
                                                                           {{$nhacchaua[8]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[8]->id_casi}}">
                                                                                {{$nhacchaua[8]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>
                                                        <li class="chart_song_item">
                                                            <div class="box-item">
                                                                <div class="box_order_rank">
                                                                    <span class="chart_stt">
                                                                        05
                                                                    </span>
                                                                    <span class="order-rank-home order_zero">
            
                                                                    </span>
                                                                </div>
                                                                <div class="infor">
            
                                                                    <h3>
                                                                        <a href="detailmv/{{$nhacchaua[9]->id}}">
                                                                            {{$nhacchaua[9]->ten_baihat}}
                                                                        </a>
            
                                                                    </h3>
                                                                    <p class="">
                                                                        <a href="detailcasi/{{$nhacchaua[9]->id_casi}}">
                                                                                {{$nhacchaua[9]->hoten_casi}}
                                                                        </a>

                                                                    </p>
            
            
                                                                </div>
                                                            </div>
            
                                                        </li>

                                                       
                                                        
                                                    </ul>
                                        <div class="duma3" >
                                                <i class="fas fa-arrow-down"></i>
                                           </div>
                                       
                                    </div>
                                      </div>
                        </div>
                        
                    </div>
                </div>
            </div>



        </section>





    </main>
    <!-- end main -->
@include('client.layout.footer')