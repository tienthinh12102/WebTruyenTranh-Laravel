@extends('../layout')
{{-- @section('slide') 
  @include('pages.slide')
  @endsection --}}
  @section('content')            
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
      <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}">{{$truyen_breadcrumb->danhmuctruyen->tendanhmuc}}</a></li>
      <li class="breadcrumb-item"><a href="{{url('the-loai/'.$truyen_breadcrumb->theloai->slug_theloai)}}">{{$truyen_breadcrumb->theloai->tentheloai}}</a></li>
      <li class="breadcrumb-item"><a href="{{url('xem-truyen/'.$truyen_breadcrumb->slug_truyen)}}">{{$truyen_breadcrumb->tentruyen}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$chapter->tieude}}</li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-md-12">
      <h4>{{$chapter->truyen->tentruyen}}</h4>
      <p>Chương hiện tại : {{$chapter->tieude}}</p>
      <div class="col-md-5">
        <style type="text/css">
          .isDisable{
            color: currentColor;
            pointer-events: none;
            opacity: 0.5;
            text-decoration: none;
          }
        </style>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Chọn chương</label>
          <select name="kichhoat" class="custom-select select-chapter">
            @foreach($allchapter as $key =>$chap)
            <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
            @endforeach
          </select>
          <center>
            <a href="{{url('xem-chapter/'. $previous_chapter)}}" class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisable' : ''}} mt-2"><i class="fa fa-arrow-left"></i> Chap trước</a>
            <a href="{{url('xem-chapter/'. $next_chapter)}}" class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisable' : ''}} ml-2 mt-2">Chap sau <i class="fa fa-arrow-right"></i></a>
          </center>
        </div>

      </div>
      
      <div class="noidungchuong">
        <p>{!! $chapter->noidung !!}</p>
      </div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}">{{$truyen_breadcrumb->danhmuctruyen->tendanhmuc}}</a></li>
          <li class="breadcrumb-item"><a href="{{url('the-loai/'.$truyen_breadcrumb->theloai->slug_theloai)}}">{{$truyen_breadcrumb->theloai->tentheloai}}</a></li>
          <li class="breadcrumb-item"><a href="{{url('xem-truyen/'.$truyen_breadcrumb->slug_truyen)}}">{{$truyen_breadcrumb->tentruyen}}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$chapter->tieude}}</li>
        </ol>
      </nav>
      <div class="col-md-5">
        <div class="form-group">
          <label for="exampleInputEmail1">Chọn chương</label>
          <select name="kichhoat" class="custom-select select-chapter">
            @foreach($allchapter as $key =>$chap)
            <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
            @endforeach
          </select>
          <center>
            <a href="{{url('xem-chapter/'. $previous_chapter)}}" class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisable' : ''}} mt-2"><i class="fa fa-arrow-left"></i> Chap trước</a>
            <a href="{{url('xem-chapter/'. $next_chapter)}}" class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisable' : ''}} ml-2 mt-2">Chap sau <i class="fa fa-arrow-right"></i></a>
          </center>
        </div>
      </div>
      <!----------------Facebook--------------------->

      <div class="card-header facebook-comments">
        <div class="box-header"><h4>Bình luận và chia sẻ</h4></div>   
        <div class="fb-share-button" data-href="{{\URL::current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="{{\URL::current()}} &amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
        <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10" ></div>
      </div>

      {{-- <h4>Truyện cùng danh mục</h4>
      <div class="row">
        @foreach($cungdanhmuc as $key => $cung)
        <div class="col-md-3">
          <div class="card mb-3 box-shadow">
            <a href="{{url('xem-chapter/'.$cung->slug_truyen)}}">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/'.$cung->hinhanh)}}">
              <div class="card-body">
                <h7>{{$cung->tentruyen}}</h7>
              </div>
            </a>       
          </div>        
        </div>
        @endforeach
      </div> --}}


    </div>
    
  </div>


  @endsection