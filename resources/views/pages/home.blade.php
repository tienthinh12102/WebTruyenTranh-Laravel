@extends('../layout')
@section('slide') 
@include('pages.slide')
@endsection
@section('content')            
<!----------------Sách mới--------------------->
<h3>SÁCH MỚI CẬP NHẬT</h3>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      @foreach($truyen as $key => $value)
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">

          <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
          <div class="card-body">
            <h5>{{$value->tentruyen}}</h5>
            {{-- <p class="card-text">{{$value->tomtat}}</p> --}}
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="{{url('xem-truyen/'. $value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>           
          </div>
        </div>
      </div>
      @endforeach  
    </div>
    <a class="btn btn-success" href="">Xem tất cả</a>
  </div>
</div>


<!----------------Sách hay xem--------------------->
<h3>SÁCH HAY XEM NHIỀU</h3>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/pham-nhan-tu-tien-chi-tien-gioi-thien99.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/tu-truyen-cua-fujiko-fujio17.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/tu-truyen-cua-fujiko-fujio17.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="btn btn-success" href="">Xem tất cả</a>
  </div>
</div>
<!----------------Blog--------------------->
<h3>Blog</h3>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/tien-vo-de-ton9.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/truy-tim-ngoc-rong-sieu-cap24.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
          <div class="card-body">
            <h3>Tiêu đề</h3>
            <p class="card-text">Tóm tắt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i>6000</a>
              </div>
              <small class="text-muted">9 phút trước</small>
            </div>
          </div>
        </div>
      </div>                       
    </div>
    <a class="btn btn-success" href="">Xem tất cả</a>
  </div>

</div>




</div>
@endsection