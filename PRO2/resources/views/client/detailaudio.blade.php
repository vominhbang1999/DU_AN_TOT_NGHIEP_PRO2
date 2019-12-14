@include('client.layout.header')
<!-- BEGIN MAIN -->
    <style type="text/css">
        .plyr__poster {
            height: 0px;
        }
        .plyr__video-embed iframe {
            height: 0px
        }
        .plyr {
            height: 60px;
            margin-top: 2rem;
        }
        .plyr--full-ui.plyr--video .plyr__control--overlaid {
            display: none;
        }
        .plyr--video.plyr--hide-controls .plyr__controls {
            opacity: 1;
            pointer-events: auto;
            transform: translateY(-10%);
            padding: 35px 10px 10px;
        }
        .plyr--video .plyr__controls{
            background: linear-gradient(rgba(0,0,0,0),rgba(0, 0, 0, 0));
        }
        .plyr--video {
            background-color: #1b2b4100;
        }
        .plyr__controls {
            height: 50px
        }
        .plyr__video-wrapper {
            background-color: #1b2b4100;
        }
    </style>
    <main>
        <section class="details">
            <div class="container">

                <div class="row">
                        <div class="col-12 col-lg-9 cd">
                                <div class="detailsong">
                                    <h1 class="name-detail">
            
                                            {{$detailaudio->ten_baihat}} -
                                        <span class="artist">
                                            <a href="">
                                                {{$casibaihat->hoten_casi}}
                                            </a>
                                           
                                        </span>
                                    </h1>
                                </div>
            
                                <ul class="detail-info">
                                    <li>
                                        <p class="song-detail">
                                            <span class="label">
                                                Nhạc sĩ :
                                            </span>
                                            <span class="val">
                                                {{$detailaudio->hoten_nhacsi}}
                                            </span>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="song-detail">
                                            <span class="label">
                                                Thể Loại:
                                            </span>
                                            <span class="val">
                                                {{$detailaudio->ten_theloainhac}}
                                            </span>
                                        </p>
                                    </li>
                                </ul>
                                <div class="likeandshare">
                                       <div style="margin-top: 15px" class="fb-like fb_iframe_widget" data-href="http://storediviss.com/" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=888164304637337&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnhacvnofficial%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small"><span style="vertical-align: bottom; width: 112px; height: 20px;"><iframe name="fdb1ba48de5b44" width="1000px" height="1000px" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.3/plugins/like.php?action=like&amp;app_id=888164304637337&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df20329085e4884c%26domain%3Dnhac.vn%26origin%3Dhttps%253A%252F%252Fnhac.vn%252Ff3f21c2ebd57f4%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnhacvnofficial%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small" style="border: none; visibility: visible; width: 130px; height: 20px;" class=""></iframe></span></div>
                                </div>
                                <!-- end like and share -->
            
            
                                <div class="box-audio mt-3">
                                    <div class="row ">
                                        <div class="col-12 col-lg-4">
                                                <div class="player-suggest-login">
                                                    <a href="">
                                                        <figure>
                                                            <img src="{{URL::asset($casibaihat->avatar_casi)}}" alt="" class="img-fluid">
                                                        </figure>
                                                    </a>
                                                </div>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <figcaption class="text-center info-audio-detail">
                                                    <div class="innn">
                                                        <div class="namebh">
                                                            {{$detailaudio->ten_baihat}}
                                                        </div>
                                                        <div class="namesg">
                                                            {{$casibaihat->hoten_casi}}
                                                        </div>
                                                    </div>
                                                   <div class="plyr__video-embed" id="player">
                                                        <iframe
                                                            src="{{$detailaudio->src_baihat}}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                                            allowfullscreen
                                                            allowtransparency
                                                            allow="autoplay"
                                                            quality
                                                        ></iframe>
                                                    </div> 
                                            </figcaption>
                                        </div>
                                        
                                    </div>
                                   
                                  
                                </div>
            
            
                                <div class="box-icon mt-2">
                                    <div class="row">
                                        <div class="col-12">
                                                <ul>
                                                        <li>
                                                            <a href="#">
                                                                    <i class="far fa-heart"></i>
                                                                    Yêu thích
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                    <i class="far fa-plus-square"></i>
                                                                    Thêm vào
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                    <i class="fas fa-download"></i>
                                                                    Tải về máy
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                    <i class="fab fa-youtube"></i>
                                                                    Xem MV
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                    <i class="fas fa-share"></i>
                                                                    Chia sẽ
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                    <i class="fas fa-mobile-alt"></i>
                                                                    Cài nhạc chờ
                                                            </a>
                                                        </li>
                                                    </ul>
                                        </div>
                                    </div>
                                      
                                        </div>
                                <!-- end -->
                                <section class="lyrics">
                                   <div class="row">
                                      
                                       <div class="col-12">
                                           <div class="title-lyrics">
                                                    Lời bài hát
                                           </div>
                                           <div class="containlyrics">
                                                {{$detailaudio->loi_baihat}}
                                           </div>
                                           <div class="xt">
                                                <i class="fas fa-arrow-down"></i>
                                           </div>
                                       </div>
                                   </div>
            
            
                                </section>
                                <section class="mvlist">
                                        <div class="ttmvlist">
                                                Bài hát của  {{$casibaihat->hoten_casi}}
                                        </div>
                                    <div class="row">
                                        @foreach($baihatcuacasi as $baihatcuacasi2)
                                            <div class="col-6 col-lg-3">
                                                    <div class="list-album-item">
                                                        <figure>
                                                            <img src="{{$baihatcuacasi2->hinh_baihat}}" alt="" class="img-fluid">
                                                        </figure>
                                                        <div class="infor">
                                                            <h3>
                                                                <a href="#">
                                                                   {{$baihatcuacasi2->ten_baihat}}
                                                                </a>
                                                            </h3>
                                                            <h4>
                                                                <a href="#">
                                                                   {{$baihatcuacasi2->hoten_casi}}
                                                                </a>
                                                                <a href="#">
                                                                   
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </section>
                                <!-- end -->
                                <section class="videolist">
                                        <div class="ttvideolist">
                                                Thể loại tương tự
                                        </div>
                                    <div class="row">
                                        @foreach($theloainhac as $theloainhac2)
                                            <div class="col-6 col-lg-3">
                                                    <div class="list-album-item">
                                                        <figure>
                                                            <img src="{{$theloainhac2->hinh_baihat}}" alt="" class="img-fluid">
                                                        </figure>
                                                        <div class="infor">
                                                            <h3>
                                                                <a href="#">
                                                                    {{$theloainhac2->ten_baihat}}
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        
                                                    </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                                </section>
                                <!-- end -->
                                <section class="comment">
                                    <div class="title-cmt">
                                        Bình Luận
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="box-comment">
                                                <textarea name="" id="" style="width:100%" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-12 col-lg-3">
                                <figure class="cdf">
                                    <img src="./img/sontung.jpg" alt="" class="img-fluid">
                                </figure>
                               
                            </div>
                </div>
               
            </div>



        </section>

        
    </main>
<!-- END MAIN -->


@include('client.layout.footer')