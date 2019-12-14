@include('client.layout.header')

<!-- =================================== MAIN CASI ================================ -->
    <main  class="mt-5">
        <div class="home-artist">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="title">
                            <h1>
                                Nghệ Sĩ
                            </h1>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Nổi
                                        Bật</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                        href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false">Mới</a>

                                </div>
                            </nav>
                            <div class="box-title-select">
                            <form action="sapxepnghesi" method="post" class="cangiua" >
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                      <select class="form-control form-control-lg custom-select"  required  name="khuvuccasi">
                                        <option value="1">- Chọn quốc gia</option>
                                        <option value="1">- Việt Nam</option>
                                        <option value="2">- Âu Mĩ</option>
                                        <option value="3">- Châu á</option>
                                      </select>
                                  </div>
                                <div class="form-group">
                                      <select class="form-control form-control-lg custom-select" required  name="thutuaz">
                                        <option value="A">- Hiển thị theo -</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="E">E</option>
                                        <option value="F">F</option>
                                        <option value="G">G</option>
                                        <option value="H">H</option>
                                        <option value="I">I</option>
                                        <option value="J">J</option>
                                        <option value="K">K</option>
                                        <option value="L">L</option>
                                        <option value="M">M</option>
                                        <option value="N">N</option>
                                        <option value="O">O</option>
                                        <option value="P">P</option>
                                        <option value="Q">Q</option>
                                        <option value="R">R</option>
                                        <option value="S">S</option>
                                        <option value="T">T</option>
                                        <option value="U">U</option>
                                        <option value="V">V</option>
                                        <option value="W">W</option>
                                        <option value="X">X</option>
                                        <option value="Y">Y</option>
                                        <option value="Z">Z</option>
                                        </select>
                                  </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-dark" style="background-color: #21324a;border-color: #21324a;" name="submit" value="Tìm">
                                </div>

                            </form>

                            </div>


                        </div>

                    </div>
                </div>
               

                    <div class="tab-content mt-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                @foreach($loai_casi_hot as $loai_casi_hot2)
                                    <div class="col-6 col-lg-3">
                                            <div class="artist-list">
                                                <figure>
                                                    <img src="{{URL::asset($loai_casi_hot2->avatar_casi)}}"
                                                        alt="" class="img-fluid">
                                                        <div class="iconss">
                                                                <i class="fas fa-heart"></i>
                                                                <i class="fas fa-play"></i>
                                                        </div>
                                                </figure>
                                                <figcaption>
                                                    <h2 class="name artist-h2 over-text"><a href="{{route('detailcasi',$loai_casi_hot2->id)}}" title="">{{$loai_casi_hot2->hoten_casi}}</a></h2>
                                                    <h3 class="artist-like-number-h3"><span
                                                            class="number fan_count_numb_166">{{$loai_casi_hot2->yeuthich}}</span> người yêu thích</h3>
                                                </figcaption>
                                            </div>
                                    </div>
                                @endforeach
                                       
                            </div>

                            <div class="pages mt-5">
                                <ul class="nav justify-content-center mt-5">
                                    <li class="">
                                        {{$loai_casi_hot->links()}}
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                @foreach($thang_casi_moi as $thang_casi_moi2)  
                                    <div class="col-6 col-lg-3">
                                            <div class="artist-list">
                                                <figure>
                                                    <img src="{{URL::asset($thang_casi_moi2->avatar_casi)}}"
                                                        alt="" class="img-fluid">
                                                        <div class="iconss">
                                                                <i class="fas fa-heart"></i>
                                                                <i class="fas fa-play"></i>
                                                        </div>
                                                </figure>
            
                                                <figcaption>
                                                    <h2 class="name artist-h2 over-text"><a href="{{route('detailcasi',$thang_casi_moi2->id)}}" title="{{$thang_casi_moi2->hoten_casi}}">{{$thang_casi_moi2->hoten_casi}}</a></h2>
                                                    <h3 class="artist-like-number-h3"><span
                                                            class="number fan_count_numb_166">{{$thang_casi_moi2->yeuthich}}</span> người yêu thích</h3>
                                                </figcaption>
            
                                            </div>
                                    </div>
                                @endforeach
                                </div>

                                <div class="pages mt-5">
                                    <ul class="nav justify-content-center mt-5">
                                        <li class="">
                                            {{$thang_casi_moi->links()}}
                                        </li>
                                    </ul>
                                </div>
                        </div>

                    </div>



               
            </div>
        </div>
    </main>
<!-- =================================== MAIN CASI ================================-->

@include('client.layout.footer')