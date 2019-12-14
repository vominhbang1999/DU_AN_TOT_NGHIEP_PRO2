<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>musicvn</title>
        {{-- favicon --}}
        <link rel="icon" href="{{URL::asset('img/favicon.ico')}}" type="image/ico" sizes="16x16">
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <!-- bootrap -->
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- ..... -->
        <!-- OWL CAROUSEL -->
        <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}">
        <!-- OWL CAROUSEL -->
        <!-- css -->
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/header.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/footer.css')}}">
        <link href="{{URL::asset('css/animate.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('css/bxh.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{URL::asset('css/ourteam.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <!-- FONT Google -->
        <link href="https://fonts.googleapis.com/css?family=Grenze&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Noto+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Oxygen&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

        <!-- // -->
        <!-- VIDEO JS -->
        <link rel="stylesheet" href="{{URL::asset('css/plyr.css')}}"  />
        <!-- VIDEO JS -->
        <!-- slick -->
        <link rel="stylesheet" href="{{URL::asset('slick/slick.css')}}" >
        <link rel="stylesheet" href="{{URL::asset('slick/slick-theme.css')}}">
    </head>

<body>
    <!-- START HEADER -->
    <header>
      <div class="container">
        <div class="row">
          <div class="header-main">
            <div class="logo-web-main">
              <div class="logo-menu"><a class="header-logo logo-menu" href="{{URL::asset('index')}}">nhac.vn</a></div>
              <div class="mr-auto"></div>
              <div class="header-sub-search"><a class="nav-link" href="#1"><i class="fa fa-search"></i></a>
                <div class="show-box-sub-search"></div>
              </div>
              <div class="header-sub-user"><a class="nav-link" href="#1"><i class="fas fa-user-circle"></i></a>
                <div class="show-box-sub-user"></div>
              </div>
            </div>
            <div class="before-header-list"></div>
              <div class="header-list">
                <ul class="nav">
                  <li class="nav-item item"><a class="pl-0 nav-link" href="{{URL::asset('index')}}">Bài hát</a></li>
                  <li class="nav-item item"><a class="nav-link" href="{{URL::asset('chude')}}">Chủ đề </a></li>
                  <li class="nav-item item"><a class="nav-link" href="{{URL::asset('bangxephang')}}">BXH</a>
                    <div class="sub-menu">
                      <div class="row">
                        <div class="col col-sub-menu">
                          <ul class="list-sub-menu pl-3">
                            <li class="nav-item title-sub-menu"><a class="nav-link" href="{{URL::asset('#1')}}">Việt Nam</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Bài Hát</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Album</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Video</a></li>
                          </ul>
                        </div>
                        <div class="col col-sub-menu">
                          <ul class="list-sub-menu">
                            <li class="nav-item title-sub-menu"><a class="nav-link" href="{{URL::asset('#1')}}">Âu Mĩ</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Bài Hát</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Album</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Video</a></li>
                          </ul>
                        </div>
                        <div class="col col-sub-menu">
                          <ul class="list-sub-menu">
                            <li class="nav-item title-sub-menu"><a class="nav-link" href="{{URL::asset('#1')}}">Hàn Quốc</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Bài Hát</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Album</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{URL::asset('#1')}}">Video</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item item"><a class="nav-link" href="{{URL::asset('album')}}">Album</a></li>
                  <li class="nav-item item"><a class="nav-link" href="{{URL::asset('musicvideo')}}">MV</a></li>
                  <li class="nav-item item"><a class="nav-link" href="#">Nghệ sĩ</a>
                      <div class="sub-menu">
                        <div class="row">
                          <div class="col col-sub-menu">
                            <ul class="list-sub-menu pl-3">
                                <li class="nav-item"><a class="nav-link" href="{{route('nghesi',1)}}">Việt Nam</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('nghesi',2)}}">Âu Mĩ</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('nghesi',3)}}">Châu Á</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                  </li>
                  <li class="nav-item item"><a class="nav-link" href="{{URL::asset('hongsao')}}">Hóng sao</a></li>
                  <li class="nav-item hide-header-list item"><a class="nav-link" href="{{URL::asset('vip')}}"> <span class="menuvip"></span><span>VIP</span></a></li>
                  <li class="nav-item hide-header-list item"><a class="nav-link" href="{{URL::asset('makhuyenmai')}}"> <span class="makhuyenmai"></span><span>Mã KM</span></a></li>
                </ul>
              </div>
            <div class="header-search">
              <form action="">
                <div class="form-group">
                  <label for="header-search"></label>
                  <input class="form-control" id="header-search" type="text" placeholder="Từ khóa tìm kiếm...">
                </div>
              </form>
            </div>
            <div class="header-sachvideo">
              <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#1">Video</a></li>
                <li class="nav-item"><a class="nav-link" href="#1">|</a></li>
                <li class="nav-item"><a class="nav-link" href="#1">Sách</a></li>
              </ul>
            </div>
            @if(Auth::check())
            <div class="header-user-succsess">
              <ul class="nav">
                <li class="nav-item item"><a class="nav-link" href="#1"><img class="img-fluid" style="width:40px;height:40px;border-radius:50%" src="{{URL::asset(Auth::user()->hinhanh)}}" alt=""></a></li>
                <li class="nav-item item cangiua"><a class="nav-link" href="#1">|</a></li>
                <li class="nav-item name cangiua"><a class="nav-link" href="{{URL::asset('userdetail')}}">{{Auth::user()->name}}</a></li>
                <li class="nav-item item cangiua"><a class="nav-link" href="{{URL::asset('dangxuat')}}"><i class="fas fa-sign-out-alt"></i></a></li>
              </ul>
            </div>
            @else
              <div class="header-user">
                <ul class="nav text-user-chu">
                    <li class="nav-item item"><a class="nav-link" id="dn" href="">Đăng nhập</a></li>
                    <li class="nav-item item"><a class="nav-link" href="#1">/</a></li>
                    <li class="nav-item item"><a class="nav-link" id='dk' href="">Đăng ký</a></li>
                </ul>
              </div>
              @endif

            <div class="header-form-search-responsive">
              <form class="form-inline"><a class="nav-link thoat-form" href="#1"><i class="fa fa-chevron-left"></i></a>
                <div class="form-group">
                  <label class="sr-only" for="header-search-menu-responsive">Từ khóa tìm kiếm</label>
                  <input class="form-control" id="header-search-menu-responsive" type="search" placeholder="Từ khóa tìm kiếm">
                </div>
                <button class="btn btn-primary ml-2" type="submit">Tìm kiếm</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- FORM -->
    <div class="momo"></div>
    <div class="formlogin">
        <div class="from-dn">
                <div class="close">
                        <i class="fas fa-times-circle"></i>
                </div>
                <div class="tab-panner">
                    <ul>
                        <li>
                            <a href="#">Đăng Nhập</a>
                        </li>
                    </ul>
                    
                </div>
                 <div class="tab-panner2">
                        <ul>
                            <li>
                                <a href="#">
                                   @if(Session::has('flag'))
                                      <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                     <div class="tab-panner2">
                        <ul>
                            <li>
                                <a href="#">
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            @foreach($errors->all() as $err)
                                            {{$err}}
                                            @endforeach
                                        </div>
                                      @endif
                                    @if(Session::has('thanhcong'))
                                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                <div class="tab-content">
                    <form action="{{URL::asset('dangnhap')}}" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" placeholder="Username *" name='name' required>
                        <input type="password" name='password' required placeholder="Password *">
                        <div class="forgot text-right">
                           <a href="#">
                            Forgot Password?
                           </a>
                        </div>
                        <input class="btn" type="submit" value="SUBMIT" name="dangnhap"/>

                        <div class="loginfacebook">
                            <a href="#">  <i class="fab fa-facebook"></i> Đăng Nhập bằng facebook  </a>
                        </div>
                        <div class="logingoogle">
                                <a href="{{URL::asset('login/google')}}">  <i class="fab fa-google-plus"></i> Đăng Nhập bằng google +  </a>
                            </div>
                            <div class="taikhoan" id="tk">
                                <a href="#">
                                    Bạn chưa có tài khoản
                                </a>
                            </div>
                    </form>
                </div>
        </div>
        <div class="from-dk">
                    <div class="close">
                            <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="tab-panner2">
                        <ul>
                            <li>
                                <a href="#">Đăng Kí</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-panner2">
                        <ul>
                            <li>
                                <a href="#">
                                   @if(Session::has('flag'))
                                      <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                     <div class="tab-panner2">
                        <ul>
                            <li>
                                <a href="#">
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger">
                                            @foreach($errors->all() as $err)
                                            {{$err}}
                                            @endforeach
                                        </div>
                                      @endif
                                    @if(Session::has('thanhcong'))
                                        <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content2">
                        <form action="{{URL::asset('dangky')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="text" placeholder=" tên tài khoản *" required name='name'>
                            <input type="hidden" class="form-control"  value="./img/avartar.jpg" required name='hinhanh' />
                            <input type="password" placeholder="Password *" required name='password'>
                            <input type="password" placeholder=" nhập lại Password *" required name='re_password'>
                            <input type="email" placeholder="Email" required name='email'>
                            <input type="number" min="10" placeholder="Điện thoại" required name='dienthoai'>
                            <input class="btn" type="submit" value="SUBMIT" name="dangky"/>
                            <div class="taikhoan" id="ctk">
                                <a href="dangnhap"> đã có tài khoản</a>
                            </div>
                        </form>
        </div>
        </div>
  </div>
    <!-- END FORM -->
