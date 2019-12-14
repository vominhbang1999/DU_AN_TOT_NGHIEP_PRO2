@include('client.layout.header')
    <main>
        <section class="detailtintuc mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        <div class="box-content">
                            <h1 class="news-detail-box-title">
                                {{$detailtintuc->tieude_tintuc}} </h1>
                            <div class="news-detail-box-time">
                                {{ Carbon\Carbon::parse($detailtintuc->created_at)->format('d-m-Y') }}
                                 </div>
                            <div class="news-detail-box-m">

                                <div class="likeandshare">
                                       <div style="margin-top: 15px" class="fb-like fb_iframe_widget" data-href="http://storediviss.com/" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=888164304637337&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnhacvnofficial%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small"><span style="vertical-align: bottom; width: 112px; height: 20px;"><iframe name="fdb1ba48de5b44" width="1000px" height="1000px" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.3/plugins/like.php?action=like&amp;app_id=888164304637337&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df20329085e4884c%26domain%3Dnhac.vn%26origin%3Dhttps%253A%252F%252Fnhac.vn%252Ff3f21c2ebd57f4%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.facebook.com%2Fnhacvnofficial%2F&amp;layout=button&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small" style="border: none; visibility: visible; width: 130px; height: 20px;" class=""></iframe></span></div>
                                </div>
                                <div class="news-detail-box-des">
                                    {{$detailtintuc->mota_tintuc}}
                                </div>
                                <div class="news-detail-box-content">
                                    <figure class="Sepia">
                                            <img class="img-fluid" style="width: 100%" 
                                        src="{{URL::asset($detailtintuc->hinhanh_tintuc)}}"
                                        >
                                    </figure>
                                    <p dir="ltr">
                                        {{$detailtintuc->noidung_tintuc}}
                                    </p> 


                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                    <div class="box_title box_title_related_news" style="padding-top: 10px ; border-top: #5e6773 solid 1px;">
                                            <h2 class="name">Tin mới</h2>
                                        </div>
                            </div>
                            <!-- START NEW TIN -->
                            @foreach($tintucmoi as $tintucmoi2)
                            <div class="col-6 col-lg-3">
                                <div class="news-list-sm-box-item">
                                    <a href="{{route('detailtintuc',$tintucmoi2->id)}}" class="news-list-sm-box-item-img "><figure>
                                            <img  class="img-fluid " style="width: auto;
height: 110px;" src="{{URL::asset($tintucmoi2->hinhanh_tintuc)}}" alt="‘Memories’ (Maroon 5): Lời thì thầm của những hồi ức mất mát" title="‘Memories’ (Maroon 5): Lời thì thầm của những hồi ức mất mát">
                                    </figure></a>
                                    <div class="info">
                                        <p class="title">
                                            <a href="{{route('detailtintuc',$tintucmoi2->id)}}">{{$tintucmoi2->tieude_tintuc}}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                    <!-- ======================================== DA DANG NHAP VAO WWEBSITE ======================================== -->
                            @if(Auth::check())
                                <div class="col-12">
                                    <div id="comment" class="box box-comment mgt-15 mb-5">
                                        <div class="box_title">
                                            <h2 class="name nobg" style="color: #fff; padding-top: 10px ; border-top: #5e6773 solid 1px;">Bình luận</h2>
                                        </div>
                                        <div class="box_content">
                                            <form method="post" action="/binhluan/{{$detailtintuc->id}}">
                                                <textarea required placeholder="Nhập nội dung"  rows="5"  name="noidung" class="form-control" style="width: 100%;"></textarea>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                                <input type="submit" name="submit" value="Gửi" class="btn btn-success mt-3">

                                            </form>

                                        </div>
                                        <!-- =========================== PHẦN BÌNH LUẬN ====================== -->
                                    <div class="cacbinhluan">
                                         @foreach($hienthi_comment as $hienthi_comment1)
                                         <!-- ============BÌNH LUẬN CHA============== -->
                                            <div class="comment_cha">

                                                <div class="info-user-comment cantrai mt-3">
                                                    <a class="nav-link" href="#">
                                                        <figure>
                                                            <img style="width:30px;height:30px;border-radius:50%" src="
                                                            {{URL::asset($hienthi_comment1->hinhanh)}}" alt="">
                                                        </figure>
                                                     </a>
                                                     <a class="nav-link" style="margin-top: -2rem; margin-left: -1rem;" href="#">
                                                        <span style="color: #fff">{{$hienthi_comment1->name}}</span>
                                                    </a>
                                                </div>

                                                <div class="thoigianbinhluan">
                                                    <p>
                                                        {{ \Carbon\Carbon::parse($hienthi_comment1->created_at)->format('d/m/Y H:i:s')}}
                                                    </p>
                                                </div>
                                               
                                                <div class="noidungbinhluan cangiua">

                                                    <div class="text">
                                                        <span>
                                                            {{$hienthi_comment1->noidung_binhluan}}
                                                        </span>
                                                    </div>

                                                    <div class="form-traloi">
                                                        <form  class="mt-3" action="/replycomment/{{$detailtintuc->id}}" method="post">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="hidden" name="parent_id" value="{{$hienthi_comment1->id}}">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="1" name="noidung_binhluan"></textarea>
                                                            </div>
                                                            <div class="form-group commentbay w-100 text-right" >
                                                                <input type="button" class="btn btn-success  huyreply  p-2 w-10"  name="submit" value="Hủy" style="margin-top: -1rem; font-size: 13px">
                                                                <input type="submit" class="btn btn-success  p-2 w-10"  name="submit" value="Gửi" style="margin-top: -1rem; font-size: 13px">

                                                            </div>
                                                        </form>
                                                    </div>

                                                     <div class="form-update-binhluan">
                                                        <form  class="mt-3" action="/updatebl/{{$hienthi_comment1->id}}" method="post">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="1" name="noidung_binhluan">{{$hienthi_comment1->noidung_binhluan}}</textarea>
                                                            </div>
                                                            <div class="form-group w-100 text-right commentbay"  >
                                                                <input type="button" class="btn btn-success  huyupdate  p-2 w-10"  name="submit" value="Hủy" style="margin-top: -1rem; font-size: 13px">
                                                                <input type="submit" class="btn btn-success  p-2 w-10"  name="submit" value="Gửi" style="margin-top: -1rem; font-size: 13px">

                                                            </div>
                                                        </form>
                                                    </div>

                                                    @if(Auth::user()->id === $hienthi_comment1->id_user)
                                                        <div class="chinhsua">
                                                            <span>
                                                                <span  id="editcomment" style="color: #fff; cursor: pointer ; text-decoration: none" href="#"  alt="">
                                                                    <i class="far fa-edit"></i>
                                                                </span>
                                                            </span>
                                                            <span class="mr-2">
                                                                <a href="../deletecomment/{{$hienthi_comment1->id}}"  alt="" style="color: #fff">
                                                                    <i class="fas fa-times"></i>
                                                                </a>
                                                            </span>
                                                            <span class="replycomment" style="cursor: pointer;">
                                                                Trả lời
                                                            </span>
                                                        </div>
                                                    @else
                                                        <div class="chinhsua">
                                                            <span class="replycomment" style="cursor: pointer;">
                                                                Trả lời
                                                            </span>
                                                        </div>
                                                    @endif
                                                    
                                                </div>
                                                <div class="xemthemcomment">
                                                    <span > 
                                                        <i class="fas fa-arrow-down"></i> 
                                                        xem thêm
                                                    </span>
                                                </div>
                                                 <div class="ancomment">
                                                    <span > 
                                                        <i class="fas fa-arrow-up"></i> 
                                                        Ẩn
                                                    </span>
                                                </div>



                                            <!-- =========BÌNH LUẬN CON============ -->
                                            @foreach($hienthi_comment_reply as $hienthi_comment_reply2)
                                                @if($hienthi_comment1->id == $hienthi_comment_reply2->parent_id)
                                                    <div class="comment_con" style="padding-left: 5rem">
                                                        <div class="info-user-comment cantrai mt-1">
                                                            <a class="nav-link" href="#">
                                                                <figure>
                                                                    <img style="width:30px;height:30px;border-radius:50%" src="{{URL::asset($hienthi_comment1->hinhanh)}}" alt="">
                                                                </figure>
                                                             </a>
                                                             <a class="nav-link" style="margin-top: -2rem; margin-left: -1rem;" href="#">
                                                                <span style="color: #fff">{{$hienthi_comment_reply2->name}}</span>
                                                            </a>
                                                        </div>

                                                        <div class="thoigianbinhluan">
                                                            <p>
                                                                {{ \Carbon\Carbon::parse($hienthi_comment_reply2->created_at)->format('d/m/Y H:i:s')}}
                                                            </p>
                                                        </div>
                                                       
                                                        <div class="noidungbinhluan cangiua">
                                                         <div class="form-traloi">
                                                            <form  class="mt-3" action="/replycomment/{{$detailtintuc->id}}" method="post">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <input type="hidden" name="parent_id" value="{{$hienthi_comment1->id}}">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" rows="1" name="noidung_binhluan"></textarea>
                                                                </div>
                                                                <div class="form-group commentbay w-100 text-right" >
                                                                    <input type="button" class="btn btn-success  huyreply  p-2 w-10"  name="submit" value="Hủy" style="margin-top: -1rem; font-size: 13px">
                                                                    <input type="submit" class="btn btn-success  p-2 w-10"  name="submit" value="Gửi" style="margin-top: -1rem; font-size: 13px">

                                                                </div>
                                                            </form>
                                                        </div>

                                                         <div class="form-update-binhluan">
                                                            <form  class="mt-3" action="/updatebl/{{$hienthi_comment_reply2->id}}" method="post">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" rows="1" name="noidung_binhluan">{{$hienthi_comment_reply2->noidung_binhluan}}</textarea>
                                                                </div>
                                                                <div class="form-group commentbay w-100 text-right" >
                                                                    <input type="button" class="btn btn-success  huyupdate  p-2 w-10"  name="submit" value="Hủy" style="margin-top: -1rem; font-size: 13px">
                                                                    <input type="submit" class="btn btn-success  p-2 w-10"  name="submit" value="Gửi" style="margin-top: -1rem; font-size: 13px">
                                                                </div>
                                                            </form>
                                                        </div>

                                                            <div class="text">
                                                                <span>
                                                                    {{$hienthi_comment_reply2->noidung_binhluan}}
                                                                </span>
                                                            </div>
                                                            <div class="updatebinhluan">
                                                                

                                                                <div class="close">
                                                                    <i class="fas fa-times-circle"></i>
                                                                </div>
                                                                <div class="tab-panner" style="background-color: #2a5f50;">
                                                                    <ul class="nav" style="display: contents;text-align: center;">
                                                                        <li  >
                                                                            <a href="#" class="nav-link" style="color: white" >Chỉnh Sữa Bình Luận</a>
                                                                        </li>
                                                                    </ul>
                                                                    
                                                                </div>
                                                                    <form  class="mt-3" action="/updatebl/{{$hienthi_comment1->id}}" method="post">
                                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                       <div class="form-group">
                                                                            <textarea class="form-control" rows="3" name="noidung_binhluan">{{$hienthi_comment1->noidung_binhluan}}</textarea>
                                                                        </div>
                                                                        <input type="submit" class="btn btn-success w-100" name="submit" value="update">
                                                                    </form>
                                                            </div>
                                                            @if(Auth::user()->id === $hienthi_comment_reply2->id_user)
                                                                <div class="chinhsua">
                                                                    <span>
                                                                        <span id="editcomment" style="color: #fff; cursor: pointer ; text-decoration: none" href="#"  alt="">
                                                                            <i class="far fa-edit"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="mr-2">
                                                                        <a href="../deletecomment/{{$hienthi_comment1->id}}"  alt="" style="color: #fff">
                                                                            <i class="fas fa-times"></i>
                                                                        </a>
                                                                    </span>
                                                                    <span class="replycomment" style="cursor: pointer;">
                                                                        Trả lời
                                                                    </span>
                                                                </div>
                                                            @else
                                                                <div class="chinhsua">
                                                                    <span class="replycomment" style="cursor: pointer;">
                                                                        Trả lời
                                                                    </span>
                                                                </div>
                                                            @endif
                                                           
                                                        </div>
                                                    </div>
                                                @else
                                                    
                                                @endif
                                            @endforeach



                                            </div>




                                         @endforeach


                                       

                                    </div>
                                    </div>
                                </div>


                        <!--================================CHUA DANG NHAP VAO WWEB ======================================= -->
                    @else
                            <div class="col-12">
                                    <div id="comment" class="box box-comment mgt-15 mb-5">
                                        <div class="box_title">
                                            <h2 class="name nobg" style="color: #fff; padding-top: 10px ; border-top: #5e6773 solid 1px;">Bình luận</h2>
                                        </div>
                                        <div class="box_content">
                                            <form method="post" action="/binhluan/{{$detailtintuc->id}}">
                                                <textarea required placeholder="Nhập nội dung" disabled rows="5"  name="noidung" class="form-control" style="width: 100%;"></textarea>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">

                                                <input type="submit" name="submit" value="Gửi" class="btn btn-success mt-3">

                                            </form>

                                        </div>
                                        <!-- =========================== PHẦN BÌNH LUẬN ====================== -->
                                    <div class="cacbinhluan">
                                         @foreach($hienthi_comment as $hienthi_comment1)
                                         <!-- ============BÌNH LUẬN CHA============== -->
                                            <div class="comment_cha">

                                                <div class="info-user-comment cantrai mt-3">
                                                    <a class="nav-link" href="#">
                                                        <figure>
                                                            <img style="width:30px;height:30px;border-radius:50%" src="
                                                            {{URL::asset($hienthi_comment1->hinhanh)}}" alt="">
                                                        </figure>
                                                     </a>
                                                     <a class="nav-link" style="margin-top: -2rem; margin-left: -1rem;" href="#">
                                                        <span style="color: #fff">{{$hienthi_comment1->name}}</span>
                                                    </a>
                                                </div>

                                                <div class="thoigianbinhluan">
                                                    <p>
                                                        {{ \Carbon\Carbon::parse($hienthi_comment1->created_at)->format('d/m/Y H:i:s')}}
                                                    </p>
                                                </div>
                                               
                                                <div class="noidungbinhluan cangiua">

                                                    <div class="text">
                                                        <span>
                                                            {{$hienthi_comment1->noidung_binhluan}}
                                                        </span>
                                                    </div>
                                                    
                                                </div>
                                                <div class="xemthemcomment">
                                                    <span > 
                                                        <i class="fas fa-arrow-down"></i> 
                                                        xem thêm
                                                    </span>
                                                </div>
                                                 <div class="ancomment">
                                                    <span > 
                                                        <i class="fas fa-arrow-up"></i> 
                                                        Ẩn
                                                    </span>
                                                </div>



                                            <!-- =========BÌNH LUẬN CON============ -->
                                            @foreach($hienthi_comment_reply as $hienthi_comment_reply2)
                                                @if($hienthi_comment1->id == $hienthi_comment_reply2->parent_id)
                                                    <div class="comment_con" style="padding-left: 5rem">
                                                        <div class="info-user-comment cantrai mt-1">
                                                            <a class="nav-link" href="#">
                                                                <figure>
                                                                    <img style="width:30px;height:30px;border-radius:50%" src="{{URL::asset($hienthi_comment1->hinhanh)}}" alt="">
                                                                </figure>
                                                             </a>
                                                             <a class="nav-link" style="margin-top: -2rem; margin-left: -1rem;" href="#">
                                                                <span style="color: #fff">{{$hienthi_comment_reply2->name}}</span>
                                                            </a>
                                                        </div>

                                                        <div class="thoigianbinhluan">
                                                            <p>
                                                                {{ \Carbon\Carbon::parse($hienthi_comment_reply2->created_at)->format('d/m/Y H:i:s')}}
                                                            </p>
                                                        </div>
                                                       
                                                        <div class="noidungbinhluan cangiua">
                                                         <div class="form-traloi">
                                                            <form  class="mt-3" action="/replycomment/{{$detailtintuc->id}}" method="post">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <input type="hidden" name="parent_id" value="{{$hienthi_comment1->id}}">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" rows="1" name="noidung_binhluan"></textarea>
                                                                </div>
                                                                <div class="form-group commentbay w-100 text-right" >
                                                                    <input type="button" class="btn btn-success  huyreply  p-2 w-10"  name="submit" value="Hủy" style="margin-top: -1rem; font-size: 13px">
                                                                    <input type="submit" class="btn btn-success  p-2 w-10"  name="submit" value="Gửi" style="margin-top: -1rem; font-size: 13px">

                                                                </div>
                                                            </form>
                                                        </div>

                                                         <div class="form-update-binhluan">
                                                            <form  class="mt-3" action="/updatebl/{{$hienthi_comment_reply2->id}}" method="post">
                                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" rows="1" name="noidung_binhluan">{{$hienthi_comment_reply2->noidung_binhluan}}</textarea>
                                                                </div>
                                                                <div class="form-group commentbay w-100 text-right" >
                                                                    <input type="button" class="btn btn-success  huyupdate  p-2 w-10"  name="submit" value="Hủy" style="margin-top: -1rem; font-size: 13px">
                                                                    <input type="submit" class="btn btn-success  p-2 w-10"  name="submit" value="Gửi" style="margin-top: -1rem; font-size: 13px">
                                                                </div>
                                                            </form>
                                                        </div>

                                                            <div class="text">
                                                                <span>
                                                                    {{$hienthi_comment_reply2->noidung_binhluan}}
                                                                </span>
                                                            </div>
                                                            <div class="updatebinhluan">
                                                                

                                                                <div class="close">
                                                                    <i class="fas fa-times-circle"></i>
                                                                </div>
                                                                <div class="tab-panner" style="background-color: #2a5f50;">
                                                                    <ul class="nav" style="display: contents;text-align: center;">
                                                                        <li  >
                                                                            <a href="#" class="nav-link" style="color: white" >Chỉnh Sữa Bình Luận</a>
                                                                        </li>
                                                                    </ul>
                                                                    
                                                                </div>
                                                                    <form  class="mt-3" action="/updatebl/{{$hienthi_comment1->id}}" method="post">
                                                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                       <div class="form-group">
                                                                            <textarea class="form-control" rows="3" name="noidung_binhluan">{{$hienthi_comment1->noidung_binhluan}}</textarea>
                                                                        </div>
                                                                        <input type="submit" class="btn btn-success w-100" name="submit" value="update">
                                                                    </form>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                @else
                                                    
                                                @endif
                                            @endforeach



                                            </div>




                                         @endforeach


                                       

                                    </div>
                                    </div>
                                </div>
                            @endif
                       
                        </div>



                </div>
                              

                        <div class="col-12 col-lg-3">
                            <div class="box-aaa">
                                <figure class="Brightness">
                                    <img src="{{URL::asset('./img/detailtintuc6.jpg')}}" alt="" class="img-fluid">
                                </figure>
                                <div class="box_title">
                                    <h2 class="name"><a href="/hot-list" title="Chủ đề nổi bật">Chủ đề nổi bật</a></h2>
                                </div>
                                <figure  class="Brightness">
                                    <img src="{{URL::asset('./img/detailtintuc5.jpg')}}" class="img-fluid" >
                                </figure>
                                <figure  class="Brightness">
                                    <img src="{{URL::asset('./img/detailtintuc4.jpg')}}" class="img-fluid" alt="topic image">
                                </figure>
                                <figure  class="Brightness">
                                    <img src="{{URL::asset('./img/detailtintuc3.jpg')}}" class="img-fluid" alt="topic image">
                                </figure>
                                <figure  class="Brightness">
                                    <img src="{{URL::asset('./img/detailtintuc2.jpg')}}" class="img-fluid" >
                                </figure>
                            </div>                          
                        </div>
                    </div>
                </div>
        </section>
        



    </main>



</div>
    <!-- END FORM -->

    <!-- END MAIN -->
@include('client.layout.footer')