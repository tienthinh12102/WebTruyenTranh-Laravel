

<h3>SÁCH NÊN ĐỌC</h3>
<div class="owl-carousel owl-theme">
    @foreach($slide_truyen as $key => $value)
    <div class="item">
        <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
        <div class="row mt-2">
            <div class="col-md-8">
                <b><h7 id="tentruyen_slide">{{$value->tentruyen}}</h7></b>
                
            </div>
            <div class="col-md-4">
                <a class="btn btn-warning btn-sm" href="{{url('xem-truyen/'.$value->slug_truyen)}}">Đọc ngay</a>
            </div>
        </div>
        <p><i class="fas fa-eye"></i> 6.000</p>
    </div>
    @endforeach
</div>
