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
            <li>
              <div class="fb-share-button" data-href="{{\URL::current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="{{\URL::current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
            </li>
            <li><b>{{$truyen->tentruyen}}</b></li>
            <li>Tác giả : {{$truyen->tacgia}}</li>
            <li>Danh mục truyện : <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
            <li>Thể loại truyện : <a href="{{url('the-loai/'.$truyen->theloai->slug_theloai)}}">{{$truyen->theloai->tentheloai}}</a></li>
            <li>Số chapter : 12</li>
            <li>Số lượt xem : 16248</li>
            <li><a href="{{url('xem-truyen/'.$truyen->slug_truyen)}}#mucluc">Xem mục lục</a></li>
            
            @if($chapter_dau)
              <li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary" >Đọc ngay</a></li>
              <li><a href="{{url('xem-chapter/'.$chapter_cuoi->slug_chapter)}}" class="btn btn-success mt-2" >Đọc chương mới nhất</a></li>
            @else
              <li>Đang cập nhật ...</li>
            @endif
            
          </ul>
        </div>

      </div >
      <div id="mucluc" class="col-md-12">
        <hr>
        <p>{!! $truyen->tomtat !!}</p>
      </div>
      <!----------------Tag--------------------->
      <style type="text/css">
        .tagcloud05 ul {
          margin: 0;
          padding: 0;
          list-style: none;
        }
        .tagcloud05 ul li {
          display: inline-block;
          margin: 0 0 .3em 1em;
          padding: 0;
        }
        .tagcloud05 ul li a {
          position: relative;
          display: inline-block;
          height: 30px;
          line-height: 30px;
          padding: 0 1em;
          background-color: #3498db;
          border-radius: 0 3px 3px 0;
          color: #fff;
          font-size: 13px;
          text-decoration: none;
          -webkit-transition: .2s;
          transition: .2s;
        }
        .tagcloud05 ul li a::before {
          position: absolute;
          top: 0;
          left: -15px;
          content: '';
          width: 0;
          height: 0;
          border-color: transparent #3498db transparent transparent;
          border-style: solid;
          border-width: 15px 15px 15px 0;
          -webkit-transition: .2s;
          transition: .2s;
        }
        .tagcloud05 ul li a::after {
          position: absolute;
          top: 50%;
          left: 0;
          z-index: 2;
          display: block;
          content: '';
          width: 6px;
          height: 6px;
          margin-top: -3px;
          background-color: #fff;
          border-radius: 100%;
        }
        .tagcloud05 ul li span {
          display: block;
          max-width: 100px;
          white-space: nowrap;
          text-overflow: ellipsis;
          overflow: hidden;
        }
        .tagcloud05 ul li a:hover {
          background-color: #555;
          color: #fff;
        }
        .tagcloud05 ul li a:hover::before {
          border-right-color: #555;
        }
      </style>
      <p>Từ khóa tìm kiếm : </p>
      @php
        $tukhoa = explode(",", $truyen->tukhoa);
      @endphp
      <div class="tagcloud05">
        <ul>
          @foreach($tukhoa as $key => $tu)
          <li><a href="{{url('tag/'.\Str::slug($tu))}}"><span>{{$tu}}</span></a></li>
          @endforeach
        </ul>
      </div>


      
      <hr>
      <h4  >Mục lục</h4>
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

      <h4>Bình luận và chia sẻ</h4>
      <div class="fb-share-button" data-href="{{\URL::current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="{{\URL::current()}} &amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
      <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10"></div>

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