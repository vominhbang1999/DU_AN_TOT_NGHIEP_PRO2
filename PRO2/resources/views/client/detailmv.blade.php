

@include('client.layout.header')
<main>
        <div class="detailmv mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">

                            <div class="plyr__video-embed" id="player">
                                <iframe
                                    src="{{URL::asset($detailmv->src_baihat)}}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                    allowfullscreen
                                    allowtransparency
                                    allow="autoplay"
                                    quality
                                ></iframe>
                            </div> 


                        <!-- END -->
                        <div class="detail box mt-3">
                                <h1 class="name_detail">{{$detailmv->ten_baihat}}<span
                                        class="artist f-weight4"><a title="@foreach($casibaihat as $casibaihat2) {{$casibaihat2->hoten_casi}} @endforeach" class="singer"
                                            href="#"> - @foreach($casibaihat as $casibaihat2) {{$casibaihat2->hoten_casi}} @endforeach  </a></span>
                                </h1>
                                <p class="label">
                                    <span>
                                        Nhạc sĩ :
                                        <a href="#">
                                            {{$detailmv->hoten_nhacsi}}
                                        </a>
                                    </span>
                                    <span>
                                        Thể loại : <a href="#">
                                        {{$detailmv->ten_theloainhac}}
                                        </a>
                                    </span>
                                </p>
                                <div class="news-social-link" id="news-social-link">
                                    <div style="margin-top: 15px" class="fb-like fb_iframe_widget" data-href="http://storediviss.com/" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=112&amp;href=http%3A%2F%2Fstorediviss.com%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small"><span style="vertical-align: bottom; width: 112px; height: 20px;"><iframe name="f2cfda9fafc8c2" width="1000px" height="1000px" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df3a20ad069f679%26domain%3D%26origin%3Dfile%253A%252F%252F%252Ff12cc4850e407d8%26relation%3Dparent.parent&amp;container_width=112&amp;href=http%3A%2F%2Fstorediviss.com%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small" style="border: none; visibility: visible; width: 130px; height: 20px;" class=""></iframe></span></div>

                                </div>
                                <!-- LIST ICON -->
                                <ul>
                                    <li><i class="fas fa-heart">
                                        <p>yêu thích</p>
                                    </i></li>
                                    <li><i class="fas fa-download">
                                        <p>tải về máy</p>
                                    </i></li>
                                    <li><i class="fas fa-share">
                                        <p>chia sẽ</p>
                                    </i></li>
                                </ul>
                        </div>

                        <div class="list-mvv">
                            <div class="row mb-5">
                                <div class="col-12">
                                        <div class="title-mv mb-3">
                                            Video {{$get_id_casi->hoten_casi}} 
                                        </div>
                                </div>
                                    @foreach($baihatcuacasi as $baihatcuacasi1)
                                        <div class="col-6 col-lg-3 mb-1">
                                            <div class="thumb-hover">
                                                <a href="{{$baihatcuacasi1->id}}">
                                                    <figure>
                                                        <img src="{{URL::asset($baihatcuacasi1->hinh_baihat)}}" alt="" class="img-fluid">
                                                            <div class="circle">

                                                            </div>
                                                    </figure>
                                                </a>
                                              
                                            </div>

                                            <div class="info">
                                                <h3 class="name over-text white"><a href="{{$baihatcuacasi1->id}}" title="">{{$baihatcuacasi1->ten_baihat}}</a></h3>
                                                <h4 class="singer over-text white singer-h4"><a title="{{$baihatcuacasi1->hoten_casi}}" href="#">{{$baihatcuacasi1->hoten_casi}}</a></h4>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                            <div class="row">
                                    <div class="col-12">
                                        <div class="title-mv mb-3">
                                            Video thể loại {{$detailmv->ten_theloainhac}}
                                        </div>
                                    </div>
                                    @foreach($theloainhac as $theloainhac1)
                                        <div class="col-6 col-lg-3 mb-1">
                                            <div class="thumb-hover">
                                                <a href="{{$theloainhac1->id}}">
                                                    <figure>
                                                        <img src="{{URL::asset($theloainhac1->hinh_baihat)}}" alt="" class="img-fluid">
                                                            <div class="circle">

                                                            </div>
                                                    </figure>
                                                </a>
                                              
                                            </div>
                    
                    
                                            <div class="info">
                                                <h3 class="name over-text white"><a href="{{$theloainhac1->id}}" title="{{$theloainhac1->ten_baihat}}">{{$theloainhac1->ten_baihat}}</a></h3>
                                            </div>
                                        </div>
                                    @endforeach
                            </div>
                        </div>
                        <div id="comment" class="box box-comment mgt-15 mb-5">
                                <div class="box_title">
                                    <h2 class="name nobg" style="color: #fff; padding-top: 10px ;">Bình luận</h2>
                                </div>
                                <div class="box_content">
                                    <textarea name="" id="" rows="5" style="width: 100%;"></textarea>
                                 </div>
                            </div>

                    </div>
                    <!-- end col9 -->

                </div>
              
            </div>
        </div>




    </main>
@include('client.layout.footer')