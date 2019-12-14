@include('client.layout.header')
@if(Auth::check())
    <!-- START MAIN -->
    <main class="mt-5">
        
        <section class="libary ">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 col-lg-3 box-left">
                         <form action="" method="">
                        
                        <div class="info-user mb-3">
                            <figure>
                                <img src="{{Auth::user()->hinhanh}}" alt="" class="img-fluid">
                            </figure>

                            <i class="fas fa-camera"></i>

                           
                            
                            <button class="btn btn-success w-100 text-center" id="user-detail"> Account Settings
                           
                            </button>


                            
                        </div>
                        </form> 

                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Thư Viện</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Bài Hát</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">Playlist</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Album</a>
                            <a class="nav-link" id="v-pills-settings-tab1" data-toggle="pill" href="#v-pills-settings1"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">MV</a>
                            <a class="nav-link" id="v-pills-settings-tab2" data-toggle="pill" href="#v-pills-settings2"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Ngệ Sĩ</a>
                            <a class="nav-link" id="v-pills-settings-tab3" data-toggle="pill" href="#v-pills-settings3"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Tải Lên</a>
                            <a class="nav-link" id="v-pills-settings-tab4" data-toggle="pill" href="#v-pills-settings4"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Danh sách chặn</a>
                        </div>
                        <div class="row hiiden-mobi">
                            <div class="col-12">
                                <div class="heading">
                                    <a href="#">
                                        Nge gần đây
                                    </a>
                                </div>
                                <ul class="ul-song">
                                    <a href="#">
                                            <i class="fas fa-music"></i> Bài hát
                                    </a>
                                    
                                            <li>
                                                    
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card-samll">
                                                            <figure class="">
                                                                <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                    alt="" class="img-fluid">
                                                            </figure>
                                                            <figcaption>
                                                                <div class="box-n">
                                                                        <div class="titile">
                                                                                <a href="#">
                                                                                    Đừng như thói quen
                                                                                </a>

                                                                            </div>
                                                                            <div class="actit">
                                                                                    <a href="#">
    
                                                                                        Lê duy,
                                                                                    </a>
                                                                                    <a href="#">
    
                                                                                        Sara lưu
                                                                                    </a>
                                                                                </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                            </figcaption>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                            <li>
                                                    
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card-samll">
                                                            <figure class="">
                                                                <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                    alt="" class="img-fluid">
                                                            </figure>
                                                            <figcaption>
                                                                <div class="box-n">
                                                                        <div class="titile">
                                                                                <a href="#">
                                                                                    Đừng như thói quen
                                                                                </a>

                                                                            </div>
                                                                            <div class="actit">
                                                                                    <a href="#">
    
                                                                                        Lê duy,
                                                                                    </a>
                                                                                    <a href="#">
    
                                                                                        Sara lưu
                                                                                    </a>
                                                                                </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                            </figcaption>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                            <li>
                                                    
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card-samll">
                                                            <figure class="">
                                                                <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                    alt="" class="img-fluid">
                                                            </figure>
                                                            <figcaption>
                                                                <div class="box-n">
                                                                        <div class="titile">
                                                                                <a href="#">
                                                                                    Đừng như thói quen
                                                                                </a>

                                                                            </div>
                                                                            <div class="actit">
                                                                                    <a href="#">
    
                                                                                        Lê duy,
                                                                                    </a>
                                                                                    <a href="#">
    
                                                                                        Sara lưu
                                                                                    </a>
                                                                                </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                            </figcaption>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                            <li>
                                                    
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card-samll">
                                                            <figure class="">
                                                                <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                    alt="" class="img-fluid">
                                                            </figure>
                                                            <figcaption>
                                                                <div class="box-n">
                                                                        <div class="titile">
                                                                                <a href="#">
                                                                                    Đừng như thói quen
                                                                                </a>

                                                                            </div>
                                                                            <div class="actit">
                                                                                    <a href="#">
    
                                                                                        Lê duy,
                                                                                    </a>
                                                                                    <a href="#">
    
                                                                                        Sara lưu
                                                                                    </a>
                                                                                </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                            </figcaption>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                            <li>
                                                    
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card-samll">
                                                            <figure class="">
                                                                <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                    alt="" class="img-fluid">
                                                            </figure>
                                                            <figcaption>
                                                                <div class="box-n">
                                                                        <div class="titile">
                                                                                <a href="#">
                                                                                    Đừng như thói quen
                                                                                </a>

                                                                            </div>
                                                                            <div class="actit">
                                                                                    <a href="#">
    
                                                                                        Lê duy,
                                                                                    </a>
                                                                                    <a href="#">
    
                                                                                        Sara lưu
                                                                                    </a>
                                                                                </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                            </figcaption>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                            
                                            
                                        
                                </ul>
                                <br>
                                <ul class="ul-song">
                                        <a href="#">
                                                <i class="fas fa-music"></i> Playlist
                                        </a>
                                        
                                                <li>
                                                        
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                        
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                        
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                        
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                        
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                
                                                
                                            
                                    </ul>
                            </div>
                        </div>


            
                    </div>
                    <div class="col-12 col-lg-9 box-right">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <section class="list-libary">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="header-list">
                                                    <div class="title">
                                                        Bài Hát <i class="fas fa-angle-right"></i>
                                                    </div>
                                                    <a href="#">
                                                        <button class="btn">
                                                            <i class="fas fa-play"></i> Nge tất cả
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12 col-lg-4">
                                                <div class="slider-libary">
                                                    <div><img src="./img/list.jpg" alt="" ></div>
                                                    <div><img src="./img/list.jpg" alt="" ></div>
                                                    <div><img src="./img/list.jpg" alt="" ></div>
                                                    <div><img src="./img/list.jpg" alt="" ></div>
                                                    <div><img src="./img/list.jpg" alt="" ></div>
                                                    <div><img src="./img/list.jpg" alt="" ></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-8">
                                                <div class="list-baihat">
                                                    <ul>
                                                        <li>
                                                              
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card-samll">
                                                                        <figure class="">
                                                                            <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                                alt="" class="img-fluid">
                                                                        </figure>
                                                                        <figcaption>
                                                                            <div class="box-n">
                                                                                    <div class="titile">
                                                                                            <a href="#">
                                                                                                Đừng như thói quen
                                                                                            </a>
            
                                                                                        </div>
                                                                                        <div class="actit">
                                                                                                <a href="#">
                
                                                                                                    Lê duy,
                                                                                                </a>
                                                                                                <a href="#">
                
                                                                                                    Sara lưu
                                                                                                </a>
                                                                                            </div>
                                                                            </div>
                                                                            
                                                                           
                                                                            <div class="kn">
                                                                                    <a href="#">
                                                                                         <i id="bbb" class="fas fa-play"></i>
                                                                                    </a>
                                                                                    <a href="#">
                                                                                            <i class="fas fa-ellipsis-h"></i>
                                                                                    </a>
                                                                                </div>
                                                                        </figcaption>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li>
                                                              
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card-samll">
                                                                        <figure class="">
                                                                            <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                                alt="" class="img-fluid">
                                                                        </figure>
                                                                        <figcaption>
                                                                            <div class="box-n">
                                                                                    <div class="titile">
                                                                                            <a href="#">
                                                                                                Đừng như thói quen
                                                                                            </a>
            
                                                                                        </div>
                                                                                        <div class="actit">
                                                                                                <a href="#">
                
                                                                                                    Lê duy,
                                                                                                </a>
                                                                                                <a href="#">
                
                                                                                                    Sara lưu
                                                                                                </a>
                                                                                            </div>
                                                                            </div>
                                                                            
                                                                           
                                                                            <div class="kn">
                                                                                    <a href="#">
                                                                                         <i id="bbb" class="fas fa-play"></i>
                                                                                    </a>
                                                                                    <a href="#">
                                                                                            <i class="fas fa-ellipsis-h"></i>
                                                                                    </a>
                                                                                </div>
                                                                        </figcaption>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li>
                                                              
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card-samll">
                                                                        <figure class="">
                                                                            <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                                alt="" class="img-fluid">
                                                                        </figure>
                                                                        <figcaption>
                                                                            <div class="box-n">
                                                                                    <div class="titile">
                                                                                            <a href="#">
                                                                                                Đừng như thói quen
                                                                                            </a>
            
                                                                                        </div>
                                                                                        <div class="actit">
                                                                                                <a href="#">
                
                                                                                                    Lê duy,
                                                                                                </a>
                                                                                                <a href="#">
                
                                                                                                    Sara lưu
                                                                                                </a>
                                                                                            </div>
                                                                            </div>
                                                                            
                                                                           
                                                                            <div class="kn">
                                                                                    <a href="#">
                                                                                         <i id="bbb" class="fas fa-play"></i>
                                                                                    </a>
                                                                                    <a href="#">
                                                                                            <i class="fas fa-ellipsis-h"></i>
                                                                                    </a>
                                                                                </div>
                                                                        </figcaption>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </li>
                                                        <li>
                                                              
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="card-samll">
                                                                        <figure class="">
                                                                            <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                                alt="" class="img-fluid">
                                                                        </figure>
                                                                        <figcaption>
                                                                            <div class="box-n">
                                                                                    <div class="titile">
                                                                                            <a href="#">
                                                                                                Đừng như thói quen
                                                                                            </a>
            
                                                                                        </div>
                                                                                        <div class="actit">
                                                                                                <a href="#">
                
                                                                                                    Lê duy,
                                                                                                </a>
                                                                                                <a href="#">
                
                                                                                                    Sara lưu
                                                                                                </a>
                                                                                            </div>
                                                                            </div>
                                                                            
                                                                           
                                                                            <div class="kn">
                                                                                    <a href="#">
                                                                                         <i id="bbb" class="fas fa-play"></i>
                                                                                    </a>
                                                                                    <a href="#">
                                                                                            <i class="fas fa-ellipsis-h"></i>
                                                                                    </a>
                                                                                </div>
                                                                        </figcaption>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </li>
                                                       
                                                    </ul>
                                                </div>



                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="playlist">
                                                        <div class="title">
                                                                Playlist <i class="fas fa-angle-right"></i>
                                                            </div>
                                                            
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-6  col-lg-3 oop">
                                                        <a href="#" class="">
                                                            <div class="card-playlist">
                                                                <figure>
                                                                    <img src="./img/playlist.png" alt="" class="img-fluid">
                                                                    <div class="edit">
                                                                            <i class="far fa-edit" title="Chỉnh sữa"></i>
    
                                                                            <i class="far fa-times-circle" title="xóa"></i>
                                                                    </div>
                                                                </figure>

                                                                
                                                                <div class="name-playlist">
                                                                    My Playlist
                                                                </div>

                                                            </div>

                                                        </a>
                                                    </div>
                                                    <div class="col-6  col-lg-3 oop">
                                                        <a href="#" class="">
                                                            <div class="card-playlist">
                                                                <figure>
                                                                    <img src="./img/playlist.png" alt="" class="img-fluid">
                                                                    <div class="edit">
                                                                            <i class="far fa-edit" title="Chỉnh sữa"></i>
    
                                                                            <i class="far fa-times-circle" title="xóa"></i>
                                                                    </div>
                                                                </figure>

                                                                
                                                                <div class="name-playlist">
                                                                    My Playlist
                                                                </div>

                                                            </div>

                                                        </a>
                                                    </div>
                                                    <div class="col-6  col-lg-3 oop">
                                                        <a href="#" class="">
                                                            <div class="card-playlist">
                                                                <figure>
                                                                    <img src="./img/playlist.png" alt="" class="img-fluid">
                                                                    <div class="edit">
                                                                            <i class="far fa-edit" title="Chỉnh sữa"></i>
    
                                                                            <i class="far fa-times-circle" title="xóa"></i>
                                                                    </div>
                                                                </figure>

                                                                
                                                                <div class="name-playlist">
                                                                    My Playlist
                                                                </div>

                                                            </div>

                                                        </a>
                                                    </div>
                                                    <div class="col-6  col-lg-3 oop">
                                                        <a href="#" class="">
                                                            <div class="card-playlist">
                                                                <figure>
                                                                    <img src="./img/playlist.png" alt="" class="img-fluid">
                                                                    <div class="edit">
                                                                            <i class="far fa-edit" title="Chỉnh sữa"></i>
    
                                                                            <i class="far fa-times-circle" title="xóa"></i>
                                                                    </div>
                                                                </figure>

                                                                
                                                                <div class="name-playlist">
                                                                    My Playlist
                                                                </div>

                                                            </div>

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END ROW PLAYLIST -->
                                        <div class="row mt-5">
                                                <div class="col-12 ">
                                                    <div class="playlist">
                                                            <div class="title">
                                                                    Album <i class="fas fa-angle-right"></i>
                                                                </div>
                                                                
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/listablum.jpg" alt="" class="img-fluid">
                                                                        <div class="edit">
                                                                                <i class="far fa-edit" title="Chỉnh sữa"></i>
        
                                                                                <i class="far fa-times-circle" title="xóa"></i>
                                                                        </div>
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                      <h6 >
                                                                          Counting Sheep (Single)
                                                                      </h6>
                                                                      <p>
                                                                            Han sara
                                                                        </p>
                                                                      
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/listablum.jpg" alt="" class="img-fluid">
                                                                        <div class="edit">
                                                                                <i class="far fa-edit" title="Chỉnh sữa"></i>
        
                                                                                <i class="far fa-times-circle" title="xóa"></i>
                                                                        </div>
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                      <h6>
                                                                          Counting Sheep (Single)
                                                                      </h6>
                                                                      <p>
                                                                          Han sara
                                                                      </p>
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/listablum.jpg" alt="" class="img-fluid">
                                                                        <div class="edit">
                                                                                <i class="far fa-edit" title="Chỉnh sữa"></i>
        
                                                                                <i class="far fa-times-circle" title="xóa"></i>
                                                                        </div>
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                      <h6>
                                                                          Counting Sheep (Single)
                                                                      </h6>
                                                                      <p>
                                                                            Han sara
                                                                        </p>
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/listablum.jpg" alt="" class="img-fluid">
                                                                        <div class="edit">
                                                                                <i class="far fa-edit" title="Chỉnh sữa"></i>
        
                                                                                <i class="far fa-times-circle" title="xóa"></i>
                                                                        </div>
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                      <h6>
                                                                          Counting Sheep (Single)
                                                                      </h6>
                                                                      <p>
                                                                            Han sara
                                                                        </p>
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END ROW ALBUM -->
                                        <div class="row mt-5">
                                                <div class="col-12 ">
                                                    <div class="playlist">
                                                            <div class="title">
                                                                    MV <i class="fas fa-angle-right"></i>
                                                                </div>
                                                                
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/listmv.jpg" alt="" class="img-fluid">
                                                                        
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                      <h6 >
                                                                        Trời giấu mang đi
                                                                      </h6>
                                                                      <p>
                                                                          Amme, ViruSs
                                                                        </p>
                                                                      
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/listmv.jpg" alt="" class="img-fluid">
                                                                       
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                      <h6>
                                                                        Trời giấu mang đi
                                                                      </h6>
                                                                      <p>
                                                                        Amme, ViruSs
                                                                      </p>
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/listmv.jpg" alt="" class="img-fluid">
                                                                       
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                      <h6>
                                                                        Trời giấu mang đi
                                                                      </h6>
                                                                      <p>
                                                                          Amme, ViruSs
                                                                        </p>
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/listmv.jpg" alt="" class="img-fluid">
                                                                        
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                      <h6>
                                                                        Trời giấu mang đi
                                                                      </h6>
                                                                      <p>
                                                                          Amme, ViruSs
                                                                        </p>
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            <div class="row mt-5">
                                                    <div class="col-12 ">
                                                        <div class="playlist">
                                                                <div class="title">
                                                                       Ngệ sĩ <i class="fas fa-angle-right"></i>
                                                                    </div>
                                                                    
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6  col-lg-3 ooc ">
                                                                <a href="#" class="">
                                                                    <div class="card-playlist">
                                                                        <figure>
                                                                            <img src="./img/listcasi.jpg" alt="" class="img-fluid">
                                                                            
                                                                        </figure>
        
                                                                        
                                                                       
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                            <div class="col-6  col-lg-3 ooc ">
                                                                <a href="#" class="">
                                                                    <div class="card-playlist">
                                                                        <figure>
                                                                            <img src="./img/listcasi.jpg" alt="" class="img-fluid">
                                                                            <div class="edit">
                                                                                   
                                                                            </div>
                                                                        </figure>
        
                                                                        
                                                                       
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                            <div class="col-6  col-lg-3 ooc ">
                                                                <a href="#" class="">
                                                                    <div class="card-playlist">
                                                                        <figure>
                                                                            <img src="./img/listcasi.jpg" alt="" class="img-fluid">
                                                                           
                                                                        </figure>
        
                                                                        
                                                                       
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                            <div class="col-6  col-lg-3 ooc ">
                                                                <a href="#" class="">
                                                                    <div class="card-playlist">
                                                                        <figure>
                                                                            <img src="./img/listcasi.jpg" alt="" class="img-fluid">
                                                                           
                                                                        </figure>
        
                                                                        
                                                                        
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="viewsall">
                                                                    <a href="#">
                                                                        xem tất cả  
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END ROW NGỆ SĨ -->
                                    </div>
                                </section>




                            </div>
                            <!-- xxxxxxxxxxxxxxxx -->
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                               <section class="music">
                                   <div class="container">
                                       <div class="row">
                                            <div class="col-12 ">
                                                    <div class="header-list">
                                                        <div class="title">
                                                            Bài Hát <i class="fas fa-angle-right"></i>
                                                        </div>
                                                        <a href="#">
                                                            <button class="btn">
                                                                <i class="fas fa-play"></i> Nge tất cả
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                       </div>
                                   </div>
                                    <div class="list-baihat">
                                            <ul class="p-0">
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                      
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card-samll">
                                                                <figure class="">
                                                                    <img src="https://photo-resize-zmp3.zadn.vn/w94_r1x1_jpeg/cover/0/8/5/3/0853118a8d14808d8526bc717409ac90.jpg"
                                                                        alt="" class="img-fluid">
                                                                </figure>
                                                                <figcaption>
                                                                    <div class="box-n">
                                                                            <div class="titile">
                                                                                    <a href="#">
                                                                                        Đừng như thói quen
                                                                                    </a>
    
                                                                                </div>
                                                                                <div class="actit">
                                                                                        <a href="#">
        
                                                                                            Lê duy,
                                                                                        </a>
                                                                                        <a href="#">
        
                                                                                            Sara lưu
                                                                                        </a>
                                                                                    </div>
                                                                    </div>
                                                                    <div class="time" style="color: gray;">
                                                                        04:06
                                                                    </div>
                                                                   
                                                                    <div class="kn">
                                                                            <a href="#">
                                                                                 <i id="bbb" class="fas fa-play"></i>
                                                                            </a>
                                                                            <a href="#">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                            </a>
                                                                        </div>
                                                                </figcaption>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                              
                                            </ul>
                                        </div>
                               </section>
                            
                            
                            </div>



                                <!--xxxxxxxxxxxxxxxxxxxx -->
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                            
                            <section class="playlist2" >

                                <div class="container">
                                        <div class="row">
                                                <div class="col-12 ">
                                                    <div class="playlist">
                                                            <div class="title">
                                                                    Playlist <i class="fas fa-angle-right"></i>
                                                                </div>
                                                                
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/playlist.png" alt="" class="img-fluid">
                                                                        <div class="edit">
                                                                                <i class="far fa-edit" title="Chỉnh sữa"></i>
        
                                                                                <i class="far fa-times-circle" title="xóa"></i>
                                                                        </div>
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                        My Playlist
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/playlist.png" alt="" class="img-fluid">
                                                                        <div class="edit">
                                                                                <i class="far fa-edit" title="Chỉnh sữa"></i>
        
                                                                                <i class="far fa-times-circle" title="xóa"></i>
                                                                        </div>
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                        My Playlist
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/playlist.png" alt="" class="img-fluid">
                                                                        <div class="edit">
                                                                                <i class="far fa-edit" title="Chỉnh sữa"></i>
        
                                                                                <i class="far fa-times-circle" title="xóa"></i>
                                                                        </div>
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                        My Playlist
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                        <div class="col-6  col-lg-3 oop">
                                                            <a href="#" class="">
                                                                <div class="card-playlist">
                                                                    <figure>
                                                                        <img src="./img/playlist.png" alt="" class="img-fluid">
                                                                        <div class="edit">
                                                                                <i class="far fa-edit" title="Chỉnh sữa"></i>
        
                                                                                <i class="far fa-times-circle" title="xóa"></i>
                                                                        </div>
                                                                    </figure>
    
                                                                    
                                                                    <div class="name-playlist">
                                                                        My Playlist
                                                                    </div>
    
                                                                </div>
    
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                </div>



                            </section>
                            
                            
                            </div>







                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <section class="album2" >

                                    <div class="container">
                                            <div class="row ">
                                                    <div class="col-12 ">
                                                        <div class="playlist">
                                                                <div class="title">
                                                                        Album <i class="fas fa-angle-right"></i>
                                                                    </div>
                                                                    
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-6  col-lg-3 oop">
                                                                <a href="#" class="">
                                                                    <div class="card-playlist">
                                                                        <figure>
                                                                            <img src="./img/listablum.jpg" alt="" class="img-fluid">
                                                                            <div class="edit">
                                                                                    <i class="far fa-edit" title="Chỉnh sữa"></i>
            
                                                                                    <i class="far fa-times-circle" title="xóa"></i>
                                                                            </div>
                                                                        </figure>
        
                                                                        
                                                                        <div class="name-playlist">
                                                                          <h6>
                                                                              Counting Sheep (Single)
                                                                          </h6>
                                                                          <p>
                                                                                Han sara
                                                                            </p>
                                                                          
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                            <div class="col-6  col-lg-3 oop">
                                                                <a href="#" class="">
                                                                    <div class="card-playlist">
                                                                        <figure>
                                                                            <img src="./img/listablum.jpg" alt="" class="img-fluid">
                                                                            <div class="edit">
                                                                                    <i class="far fa-edit" title="Chỉnh sữa"></i>
            
                                                                                    <i class="far fa-times-circle" title="xóa"></i>
                                                                            </div>
                                                                        </figure>
        
                                                                        
                                                                        <div class="name-playlist">
                                                                          <h6>
                                                                              Counting Sheep (Single)
                                                                          </h6>
                                                                          <p>
                                                                              Han sara
                                                                          </p>
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                            <div class="col-6  col-lg-3 oop">
                                                                <a href="#" class="">
                                                                    <div class="card-playlist">
                                                                        <figure>
                                                                            <img src="./img/listablum.jpg" alt="" class="img-fluid">
                                                                            <div class="edit">
                                                                                    <i class="far fa-edit" title="Chỉnh sữa"></i>
            
                                                                                    <i class="far fa-times-circle" title="xóa"></i>
                                                                            </div>
                                                                        </figure>
        
                                                                        
                                                                        <div class="name-playlist">
                                                                          <h6>
                                                                              Counting Sheep (Single)
                                                                          </h6>
                                                                          <p>
                                                                                Han sara
                                                                            </p>
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                            <div class="col-6  col-lg-3 oop">
                                                                <a href="#" class="">
                                                                    <div class="card-playlist">
                                                                        <figure>
                                                                            <img src="./img/listablum.jpg" alt="" class="img-fluid">
                                                                            <div class="edit">
                                                                                    <i class="far fa-edit" title="Chỉnh sữa"></i>
            
                                                                                    <i class="far fa-times-circle" title="xóa"></i>
                                                                            </div>
                                                                        </figure>
        
                                                                        
                                                                        <div class="name-playlist">
                                                                          <h6>
                                                                              Counting Sheep (Single)
                                                                          </h6>
                                                                          <p>
                                                                                Han sara
                                                                            </p>
                                                                        </div>
        
                                                                    </div>
        
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>

                                </section>
                            
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings1" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">


                                <section class="mv2" >
                                        <div class="container">
    
    
                                                <div class="row">
                                                        <div class="col-12 ">
                                                            <div class="playlist">
                                                                    <div class="title">
                                                                            MV <i class="fas fa-angle-right"></i>
                                                                        </div>
                                                                        
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-6  col-lg-3 oop">
                                                                    <a href="#" class="">
                                                                        <div class="card-playlist">
                                                                            <figure>
                                                                                <img src="./img/listmv.jpg" alt="" class="img-fluid">
                                                                                
                                                                            </figure>
            
                                                                            
                                                                            <div class="name-playlist">
                                                                              <h6>
                                                                                Trời giấu mang đi
                                                                              </h6>
                                                                              <p>
                                                                                  Amme, ViruSs
                                                                                </p>
                                                                              
                                                                            </div>
            
                                                                        </div>
            
                                                                    </a>
                                                                </div>
                                                                <div class="col-6  col-lg-3 oop">
                                                                    <a href="#" class="">
                                                                        <div class="card-playlist">
                                                                            <figure>
                                                                                <img src="./img/listmv.jpg" alt="" class="img-fluid">
                                                                               
                                                                            </figure>
            
                                                                            
                                                                            <div class="name-playlist">
                                                                              <h6>
                                                                                Trời giấu mang đi
                                                                              </h6>
                                                                              <p>
                                                                                Amme, ViruSs
                                                                              </p>
                                                                            </div>
            
                                                                        </div>
            
                                                                    </a>
                                                                </div>
                                                                <div class="col-6  col-lg-3 oop">
                                                                    <a href="#" class="">
                                                                        <div class="card-playlist">
                                                                            <figure>
                                                                                <img src="./img/listmv.jpg" alt="" class="img-fluid">
                                                                               
                                                                            </figure>
            
                                                                            
                                                                            <div class="name-playlist">
                                                                              <h6>
                                                                                Trời giấu mang đi
                                                                              </h6>
                                                                              <p>
                                                                                  Amme, ViruSs
                                                                                </p>
                                                                            </div>
            
                                                                        </div>
            
                                                                    </a>
                                                                </div>
                                                                <div class="col-6  col-lg-3 oop">
                                                                    <a href="#" class="">
                                                                        <div class="card-playlist">
                                                                            <figure>
                                                                                <img src="./img/listmv.jpg" alt="" class="img-fluid">
                                                                                
                                                                            </figure>
            
                                                                            
                                                                            <div class="name-playlist">
                                                                              <h6>
                                                                                Trời giấu mang đi
                                                                              </h6>
                                                                              <p>
                                                                                  Amme, ViruSs
                                                                                </p>
                                                                            </div>
            
                                                                        </div>
            
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        </div>
                                    </section>
                                
                            </div>
                            <!-- end mv -->
                            <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                            
                                <section class="ngesi2" >
                                    <div class="container">
                                            <div class="row">
                                                    <div class="col-12 ">
                                                            <div class="playlist">
                                                                    <div class="title">
                                                                           Ngệ sĩ <i class="fas fa-angle-right"></i>
                                                                        </div>
                                                                        
                                                            </div>
                                                        </div>
                                                    <div class="col-6  col-lg-3 ooc ">
                                                        <a href="#" class="">
                                                            <div class="card-playlist">
                                                                <figure>
                                                                    <img src="./img/listcasi.jpg" alt="" class="img-fluid">
                                                                    
                                                                </figure>

                                                                
                                                               
                                                            </div>

                                                        </a>
                                                    </div>
                                                    <div class="col-6  col-lg-3 ooc ">
                                                        <a href="#" class="">
                                                            <div class="card-playlist">
                                                                <figure>
                                                                    <img src="./img/listcasi.jpg" alt="" class="img-fluid">
                                                                    <div class="edit">
                                                                           
                                                                    </div>
                                                                </figure>

                                                                
                                                               

                                                            </div>

                                                        </a>
                                                    </div>
                                                    <div class="col-6  col-lg-3 ooc ">
                                                        <a href="#" class="">
                                                            <div class="card-playlist">
                                                                <figure>
                                                                    <img src="./img/listcasi.jpg" alt="" class="img-fluid">
                                                                   
                                                                </figure>

                                                                
                                                               

                                                            </div>

                                                        </a>
                                                    </div>
                                                    <div class="col-6  col-lg-3 ooc ">
                                                        <a href="#" class="">
                                                            <div class="card-playlist">
                                                                <figure>
                                                                    <img src="./img/listcasi.jpg" alt="" class="img-fluid">
                                                                   
                                                                </figure>

                                                                
                                                                

                                                            </div>

                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                    </div>
                                </section>
                            
                            </div>




                            <div class="tab-pane fade" id="v-pills-settings3" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">..aadf.</div>
                            <div class="tab-pane fade" id="v-pills-settings4" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">..dttttf.</div>
                        </div>
                    </div>
                </div>


            </div>
        </section>




    </main>

    
    <!-- END MAIN -->


    <!-- FOMR SHOW EDIT USER -->
    <div class="momo"></div>
    <div class="formlogin">
            <div class="user-detail">
                        <div class="close">
                                <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="tab-panner2">
                            <ul>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content2">
                            
                            <form role="form" action="edituser" method="post">
                                
                                <div class="info-user text-center mb-3">
                                    <figure>
                                        <img src="{{Auth::user()->hinhanh}}" style="width:150px;height:150px;border: 0px" alt="" class="img-fluid">
                                    </figure>
                                    <i class="fas fa-camera"></i>
                                    
                                    <input type="file" name="hinhanh" value="{{Auth::user()->hinhanh}}" class="edit-image-users-show">
                                    <input type="hidden" name="id" required value="{{Auth::user()->id}}">
                                </div>
                                <button class="btn btn-warning">
                                     @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            @foreach($errors->all() as $err)
                                            {{$err}}
                                            @endforeach
                                        </div>
                                    @endif
                                </button>

                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="text" name="name" required value="{{Auth::user()->name}}">
                                <input type="number" name="dienthoai" required min="10" value="{{Auth::user()->dienthoai}}">
                                <input type="email" name="email"  required  value="{{Auth::user()->email}}">
                                <input type="password" name="password" required value="password"> 
                                <input type="password" name="re_password" required value="password">


                                <input type="submit" value="Save" class="btn btn-success" name="edituser">
                                 
                            </form>
                           
                     </div>
                 </div>
    </div>
@else
@endif
@include('client.layout.footer')
