
<h3>Sách nên đọc</h3>
<div class="owl-carousel owl-theme">
    @foreach($slide_truyen as $key => $value)
    <div class="item">
        <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
        <h7>{{$value->tentruyen}}</h7>
        <p><i class="fas fa-eye"></i>6000</p>
        <a class="btn btn-warning btn-sm" href="{{url('xem-truyen/'.$value->slug_truyen)}}">Đọc ngay</a>
    </div>
    @endforeach
    {{-- <div class="item">
        <img src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
        <h3>Truyện j đó</h3>
        <p><i class="fas fa-eye"></i>6000</p>
        <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
    </div>
    <div class="item">
        <img src="{{asset('public/uploads/truyen/ngoi-nha-bi-ma-am-manh-nhat-va-chang-tra-966931.jpg')}}">
        <h3>Truyện j đó</h3>
        <p><i class="fas fa-eye"></i>6000</p>
        <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
    </div>
    <div class="item">
        <img src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
        <h3>Truyện j đó</h3>
        <p><i class="fas fa-eye"></i>6000</p>
        <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
    </div>
    <div class="item">
        <img src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
        <h3>Truyện j đó</h3>
        <p><i class="fas fa-eye"></i>6000</p>
        <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
    </div>
    <div class="item">
        <img src="{{asset('public/uploads/truyen/ngoi-nha-bi-ma-am-manh-nhat-va-chang-tra-966931.jpg')}}">
        <h3>Truyện j đó</h3>
        <p><i class="fas fa-eye"></i>6000</p>
        <a class="btn btn-warning btn-sm" href="">Đọc ngay</a>
    </div>  --}}
</div>
