@extends('../layout')
@section('slide') 
@include('pages.slide')
@endsection
@section('content')
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  @foreach($danhmuc as $key => $value)
  <form>
    @csrf
  <li class="nav-item">
    <a data-danhmuc_id="{{$value->id}}" class="nav-link tabs_danhmuc" data-toggle="tab" href="#{{$value->slug_danhmuc}}">{{$value->tendanhmuc}}</a>
  </li>
  </form>
  @endforeach
</ul>
<div id="tab_danhmuctruyen"></div>        
<!----------------Sách mới--------------------->
<h3>TRUYỆN MỚI CẬP NHẬT</h3>
<div class="album py-5 bg-light">
  <div class="container">

    <div class="row">
      @foreach($list_truyen as $key => $value)
      <div class="col-md-3">
        <div class="card mb-3 box-shadow">

          <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
          <div class="card-body">
            <h5>{{$value->tentruyen}}</h5>
            @foreach($value->thuocnhieudanhmuctruyen as $thuocdanh)                            
            <a href="{{url('danh-muc/'.$thuocdanh->slug_danhmuc)}}"><span class="badge badge-success">{{$thuocdanh->tendanhmuc}}</span></a>
            @endforeach
            @foreach($value->thuocnhieutheloaitruyen as $thuocloai)
            <a href="{{url('the-loai/'.$thuocloai->slug_theloai)}}"><span class="badge badge-danger">{{$thuocloai->tentheloai}}</span></a>                            
            @endforeach
            {{-- <p class="card-text">{{$value->tomtat}}</p> --}}
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="{{url('xem-truyen/'. $value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 6000</a>
              </div>
              <small class="text-muted ml-2">{{$value->created_at->diffForHumans()}}</small>
            </div>           
          </div>
        </div>
      </div>
      @endforeach 

      <div class="col-md-3">
      <p>{!! $truyen->links() !!}</p>
      </div>
    </div>


    <a class="btn btn-success mt-2" href="">Xem tất cả</a>
    
    
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
            @foreach($value->thuocnhieudanhmuctruyen as $thuocdanh)                            
            <a href="{{url('danh-muc/'.$thuocdanh->slug_danhmuc)}}"><span class="badge badge-primary">{{$thuocdanh->tendanhmuc}}</span></a>
            @endforeach
            @foreach($value->thuocnhieutheloaitruyen as $thuocloai)
            <a href="{{url('the-loai/'.$thuocloai->slug_theloai)}}"><span class="badge badge-warning">{{$thuocloai->tentheloai}}</span></a>                            
            @endforeach
            {{-- <p class="card-text">{{$value->tomtat}}</p> --}}
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="{{url('xem-truyen/'. $value->slug_truyen)}}" class="btn btn-sm btn-outline-secondary">Đọc ngay</a>
                <a class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i> 6000</a>
              </div>
              <small class="text-muted">{{$value->created_at->diffForHumans()}}</small>
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