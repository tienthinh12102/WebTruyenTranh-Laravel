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
              <small class="text-muted ml-2">{{$value->created_at->diffForHumans()}}</small>
            </div>           
          </div>
        </div>
      </div>
      @endforeach 

    </div>


    <a class="btn btn-success" href="">Xem tất cả</a>
    <div>
      {!! $truyen->links() !!} 
    </div>
    
  </div>
</div>



<!----------------Sách hay xem--------------------->
<h3>SÁCH HAY XEM NHIỀU</h3>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      @foreach($truyen_xemnhieu as $key => $value)
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
<!----------------Blog--------------------->
@endsection