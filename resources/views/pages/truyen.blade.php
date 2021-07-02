@extends('../layout')
{{-- @section('slide') 
  @include('pages.slide')
  @endsection --}}
  @section('content')            
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
      <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$truyen->tentruyen}}</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-md-9">
      <div class="row">

        <div class="col-md-3">

          <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}">
        </div>
        <div class="col-md-9">
          <style type="text/css">
            .infotruyen{
              list-style: none;
            }
          </style>
          
          <ul class="infotruyen">
            <li><b>{{$truyen->tentruyen}}</b></li>
            <li>Tác giả : {{$truyen->tacgia}}</li>
            <li>Danh mục truyện : <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
            <li>Thể loại truyện : <a href="{{url('the-loai/'.$truyen->theloai->slug_theloai)}}">{{$truyen->theloai->tentheloai}}</a></li>
            <li>Số chapter : 12</li>
            <li>Số lượt xem : 16248</li>
            <li><a href="#">Xem mục lục</a></li>
            
            @if($chapter_dau)
              <li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary" >Đọc ngay</a></li>
            @else
              <li>Đang cập nhật ...</li>
            @endif
            
          </ul>
        </div>

      </div>
      <div class="col-md-12">
        <hr>
        <p>{!! $truyen->tomtat !!}</p>
      </div>
      
      <hr>
      <h4>Mục lục</h4>
      <ul class="mucluctruyen">
        @php
          $mucluc = count($chapter);
        @endphp
        @if($mucluc>0)
          @foreach($chapter as $key => $chap)
          <li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a></li>
          @endforeach
        @else
          <li>Đang cập nhật ... </li>
        @endif
      </ul>

      <!----------------Sách cùng danh mục--------------------->
      <h4>Truyện cùng danh mục</h4>
      <div class="row">
        @foreach($cungdanhmuc as $key => $cung)
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <a href="{{url('xem-truyen/'.$cung->slug_truyen)}}">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$cung->hinhanh)}}">
              <div class="card-body">
                <h7>{{$cung->tentruyen}}</h7>
              </div>
            </a>       
          </div>        
        </div>
        @endforeach
      </div>



    </div>
    <div class="col-md-3">
      <h3>Sách hay xem nhiều</h3>
      <div class="row mt-2">
        @foreach($cungtheloai as $key => $value)
        <div class="col-md-5"><a href="{{url('xem-truyen/'.$value->slug_truyen)}}">
          <img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
          </a>   
        </div>
        <div class="col-md-7">
          <p>{{$value->tentruyen}}</p>
          <p><i class="fas fa-eye"></i> {{$value->danhmuctruyen->tendanhmuc}}</p>
        </div>
        @endforeach
        
      </div>
    </div>
  </div>
</div>

@endsection