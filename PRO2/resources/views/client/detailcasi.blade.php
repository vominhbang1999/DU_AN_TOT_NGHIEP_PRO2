
@include('client.layout.header')
<main>
        <section class="banner-singer mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <div class="baner-sg">
                            <figure>
                                <img src="{{URL::asset($detailcasi->poster_casi)}}" alt="" class="img-fluid">
                                <div class="title-singer">
                                    {{$detailcasi->hoten_casi}}
                                </div>
                                <p class="viewslike">
                                    {{$detailcasi->yeuthich}} người yêu thích
                                </p>
                                <ul>
                                   <li>
                                       <a href="#">
                                        <i class="far fa-heart"></i>
                                       </a>
                                   </li>
                                   <li>
                                       <a href="#">
                                        <i class="far fa-share-square"></i>
                                       </a>
                                   </li>
                                </ul>
                                <div class="layer">
                                
                                </div>
                                <div class="care">
                                        Quan Tâm 
                                </div>
                            </figure>
                            
                        </div>
                    </div>
                </div>


                <div class="row firt2">
                    <div class="col-12">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active  text-uppercase" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tổng Quan </a>
                                    </li>
                                    <li class="nav-item">
                                      <a  id="focus" class="nav-link    text-uppercase" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tiểu sữ</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link text-uppercase" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"> bài hát</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link text-uppercase" id="pills-contact-tab1" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact1" aria-selected="false">album</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link text-uppercase" id="pills-contact-tab3" data-toggle="pill" href="#pills-contact3" role="tab" aria-controls="pills-contact3" aria-selected="false">mv</a>
                                    </li>
                                  </ul>
                                 
                    </div>
                    <div class="col-12 col-lg-9">
                            <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                        <section class="overview">
                                            <div class="boxhead">
                                                    <div class="box-tltle">
                                                            <div class="name">
                                                                    <h2 >
                                                                           <a href="#">
                                                                               Bài Hát
                                                                           </a>
                                                                        </h2>
                                                            </div>
                                                            
                                                            
                                                        </div>
            
                                                        <div class="play-option">
                                                                <i class="far fa-play-circle"></i>
                                                                <p> <a href="#">
                                                                       
            
                                                                        Nghe Những Bài Hát Hay Nhất Của {{$detailcasi->hoten_casi}}
                                                                </a></p>
                                                                <i class="fas fa-list-ul"></i>
            
                                                                <p>
                                                                    <a href="#"> Nghe tất cả</a>
                                                                </p>
            
            
                                                        </div>
                                            </div>
                                           <div class="box-cnontent mt-3">
                                               <ul>
                                                @foreach($detailcasi->baihat  as $baihacuacasi2)
                                                   <li class="li">
                                                       <div class="infor">
                                                           <h3>
                                                               <a href="../detailaudio/{{$baihacuacasi2->id}}">{{$baihacuacasi2->ten_baihat}}</a>
                                                               <span>
                                                                - 
                                                                </span>
                                                           </h3>
                                                          
                                                           <h4>
                                                               <a href="#">
                                                                  {{$detailcasi->hoten_casi}}
                                                               </a>
                                                           </h4>
                                                       </div>
                                                       <div class="list-icon">
                                                            <ul>
                                                                <li>
                                                                      <i class="far fa-heart"></i>
                                                                </li>
                                                                <li>
                                                                      <i class="fas fa-share-square"></i>
                                                                </li>
                                                                <li>
                                                                      <i class="fas fa-play-circle"></i>
                                                                </li>
                                                                <li>
                                                                      <i class="fas fa-plus"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                   @endforeach
                                               </ul>
                                           </div>
                                            
                                        </section>
                                        <!-- END DIV OVERVIEW -->
                                            <section class="mv">
                                                <div class="container p-md-0">
                                                        <div class="row">
                                                                <div class="col-12">
                                                                    <div class="title-mv">
                                                                        Video 
                                                                    </div>
                                                                </div>
                                                                @foreach($videocasi as $videocuacasi2)
                                                                  <div class="col-6 col-lg-3">
                                                                    <figure>
                                                                        <img src="{{$videocuacasi2->hinh_baihat}}" alt="" class="img-fluid">
                                                                    </figure>
                                                                    <div class="infomation">
                                                                        <h3>
                                                                            <a href="{{route('detailmv',$videocuacasi2->id)}}" title="{{$videocuacasi2->ten_baihat}}">{{$videocuacasi2->ten_baihat}}</a>
    
                                                                        </h3>
                                                                        <p>
                                                                            <a href="">{{$detailcasi->hoten_casi}}</a>
                                                                        </p>
                                                                    </div>
                                                                  </div>
                                                              @endforeach
                                                            </div>
                                                </div>
                                                   
                                                

                                            </section>
                                            <!-- END DIV MV -->
                                            <section class="album">

                                                    <div class="container p-md-0">
                                                            <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="title-mv mb-3">
                                                                          Album gựi ý
                                                                        </div>
                                                                    </div>
                                                                    @foreach($detailcasi->baihat as $albumguiy2)
                                                                      <div class="col-6 col-lg-3">
                                                                              <figure>
                                                                                  <img src="{{$albumguiy2->hinh_baihat}}" alt="" class="img-fluid">
                                                                              </figure>
                                                                              <div class="infomation">
                                                                                  <h3>
                                                                                      <a href="{{route('detailaudio',$videocuacasi2->id)}}" title="{{$albumguiy2->ten_baihat}}"> {{$albumguiy2->ten_baihat}}<a>
              
                                                                                  </h3>
                                                                                  <p>
                                                                                      <a href="#">{{$detailcasi->hoten_casi}}</a>
                                                                                  </p>
                                                                              </div>
              
                                                                      </div>
                                                                  @endforeach
                                                                    
                                                             </div>

                                            </section>

                                    </div>
                                    <!-- xxxxxxxxxxxx -->
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                        <section class="inforsinger">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12">

                                                            <div class="title">
                                                                    <h2 class="name">
                                                                            Tiểu sử {{$detailcasi->hoten_casi}}
                                                                    </h2>
                                                                </div>
                                                                <div class="box_content">
                                                                        <div class="pt20 t-jus">
                                                                            Đang cập nhật...
                                                                      </div>
                                                                  </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </section>



                                    </div>
                                    <!-- xxxxxxxxxxxxxxxx -->
                                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <section class="overview">
                                                    <div class="boxhead">
                                                            <div class="box-tltle">
                                                                    <div class="name">
                                                                            <h2>
                                                                                   <a href="#">
                                                                                       Bài Hát
                                                                                   </a>
                                                                                </h2>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                    
                                                               
                                                    </div>
                                                   <div class="box-cnontent mt-3">
                                                       <ul>
                                                        @foreach($detailcasi->baihat as $baihacuacasi2)
                                                           <li class="li">
                                                               <div class="infor">
                                                                   <h3>
                                                                       <a href="../detailaudio/{{$baihacuacasi2->id}}">{{$baihacuacasi2->ten_baihat}}</a>
                                                                       <span>
                                                                        - 
                                                                        </span>
                                                                   </h3>
                                                                  
                                                                   <h4>
                                                                       <a href="#">
                                                                          {{$detailcasi->hoten_casi}}
                                                                       </a>
                                                                   </h4>
                                                               </div>
                                                               <div class="list-icon">
                                                                    <ul>
                                                                        <li>
                                                                              <i class="far fa-heart"></i>
                                                                        </li>
                                                                        <li>
                                                                              <i class="fas fa-share-square"></i>
                                                                        </li>
                                                                        <li>
                                                                              <i class="fas fa-play-circle"></i>
                                                                        </li>
                                                                        <li>
                                                                              <i class="fas fa-plus"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                    @endforeach
                                                       </ul>
                                                   </div>
                                                    
                                                </section>


                                    </div>
                                    <!-- xxxxxxxxxxxxxxx -->


                                    <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1"><section class="album">

                                            <div class="container p-md-0">
                                                    <div class="row">
                                                            <div class="col-12">
                                                                <div class="title-mv">
                                                                  Album
                                                                </div>
                                                            </div>
                                                            @foreach($detailcasi->baihat as $albumguiy2)
                                                                <div class="col-6 col-lg-3">
                                                                        <figure>
                                                                            <img src="{{$albumguiy2->hinh_baihat}}" alt="" class="img-fluid">
                                                                        </figure>
                                                                        <div class="infomation">
                                                                            <h3>
                                                                                <a href="{{route('detailmv',$videocuacasi2->id)}}" title="{{$albumguiy2->ten_baihat}}"> {{$albumguiy2->ten_baihat}}<a>
        
                                                                            </h3>
                                                                            <p>
                                                                                <a href="#">{{$albumguiy2->hoten_casi}}</a>
                                                                            </p>
                                                                        </div>
        
                                                                </div>
                                                            @endforeach
                                                            
                                                        </div>

                                    </div></section></div>
                                    <!-- xxxxxxxxxxxxx -->
     
                                    <!-- xxxxxxxxxxx -->
                                    <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab3"><section class="mv">
                                            <div class="container p-md-0">
                                                    <div class="row">
                                                            <div class="col-12">
                                                                <div class="title-mv">
                                                                    Video
                                                                </div>
                                                            </div>
                                                            @foreach($detailcasi->baihat as $videocuacasi2)
                                                                <div class="col-6 col-lg-3">
                                                                  <figure>
                                                                      <img src="{{$videocuacasi2->hinh_baihat}}" alt="" class="img-fluid">
                                                                  </figure>
                                                                  <div class="infomation">
                                                                      <h3>
                                                                          <a href="{{route('detailmv',$videocuacasi2->id)}}" title="{{$videocuacasi2->ten_baihat}}">{{$videocuacasi2->ten_baihat}}</a>
  
                                                                      </h3>
                                                                      <p>
                                                                          <a href="{{route('detailmv',$videocuacasi2->id)}}">{{$detailcasi->hoten_casi}}</a>
                                                                      </p>
                                                                  </div>
                                                                </div>
                                                            @endforeach
                                                          
                                                        </div>
                                            </div>
                                               
                                            

                                        </section></div>
                                    <!-- xxxxxxxxxx -->
                                  </div>



                    </div>
                    <div class="col-12 col-lg-3 hide">

                        <section class="colum2">
                            <section class="album">

                                <div class="container p-md-0">
                                        <div class="row">
                                                <div class="col-12">
                                                    <div class="title-mv">
                                                      Album hot
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                        <figure >
                                                       
                                                            <img src=""  class="img-fluid" >
                                                        </figure>
                                                        <div class="infomation">
                                                            <h3>
                                                                <a href="#" title="">HOT ALBUM </a>

                                                            </h3>
                                                            <p>
                                                                <a href="#"></a>
                                                            </p>
                                                        </div>

                                                </div>
                                               
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="title-mv">
                                                      Nghệ sĩ gựi ý
                                                    </div>
                                                </div>
                                                @foreach($casiguiy as $casiguiy2)
                                                  <div class="col-12 col-lg-6">

                                                      <figure >
                                                          <img src="{{URL::asset($casiguiy2->avatar_casi)}}"  class="img-fluid" >
                                                      </figure>
                                                      <div class="infomation">
                                                          <p>
                                                              <a href="{{route('detailcasi',$casiguiy2->id)}}">{{$casiguiy2->hoten_casi}}</a>
                                                          </p>
                                                      </div>
                                                  </div>
                                                @endforeach
 
                                            </div>

                        </div></section>
                        </section>



                    </div>
                </div>
            </div>
        </section>
    
</main>
@include('client.layout.footer')