

 <div class="col-md-3">
        <div class="circular-bar">
            <div class="circular-bar-chart">
            	<figure>
            		<img class="img-fluid" src='{{$detailcasi->avatar_casi}}'
            	</figure>
                <strong>{{$detailcasi->hoten_casi}}</strong>
                @foreach ($detailcasi->baihat as $baihat123)
                	<label><span class="percent"></span>{{$baihat123->ten_baihat}}</label>
                @endforeach
            </div>
        </div>
 </div>

