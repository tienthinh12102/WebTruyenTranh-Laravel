@extends('../layout')
{{-- @section('slide') 
  @include('pages.slide')
  @endsection --}}
  @section('content')            
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-md-9">
      <div class="row">
        <div class="col-md-3">
          <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
        </div>
        <div class="col-md-9">
          <style type="text/css">
            .infotruyen{
              list-style: none;
            }
          </style>
          <ul class="infotruyen">
            <li>Tác giả : Thịnh sama</li>
            <li>Thể loại : Trinh thám</li>
            <li>Số chapter : 12</li>
            <li>Số lượt xem : 16248</li>
            <li><a href="#">Xem mục lục</a></li>
            <li><a class="btn btn-primary" href="#">Đọc ngay</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-12">
        <hr>
        <p>Nội dung ........</p>
      </div>
      <hr>
      <h4>Mục lục</h4>
      <ul class="mucluctruyen">
        <li><a href="#">Chapter 1</a></li>
        <li><a href="#">Chapter 2</a></li>
        <li><a href="#">Chapter 3</a></li>
        <li><a href="#">Chapter 4</a></li>
        <li><a href="#">Chapter 5</a></li>
        <li><a href="#">Chapter 6</a></li>
        <li><a href="#">Chapter 7</a></li>
        <li><a href="#">Chapter 8</a></li>
      </ul>
      <h4>Truyện cùng thể loại</h4>
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h5>Nhất quỷ nhì mà</h5>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h5>Nhất quỷ nhì mà</h5>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h5>Nhất quỷ nhì mà</h5>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h5>Nhất quỷ nhì mà</h5>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>

      </div>


    </div>
    <div class="col-md-3">
      <h3>Sách hay xem nhiều</h3>
    </div>
  </div>
  @endsection