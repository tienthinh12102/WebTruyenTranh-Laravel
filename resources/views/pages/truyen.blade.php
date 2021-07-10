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
            {{-- Lấy biến wishlist (truyen yeu thich) --}}
            <input type="hidden" value="{{$truyen->tentruyen}}" class="wishlist_title">
            <input type="hidden" value="{{\URL::current()}}" class="wishlist_url">
            <input type="hidden" value="{{$truyen->id}}" class="wishlist_id">

            <li>
              <div class="fb-share-button" data-href="{{\URL::current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="{{\URL::current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
            </li>
            <li><b>{{$truyen->tentruyen}}</b></li>
            <li>Tác giả : {{$truyen->tacgia}}</li>
            <li>Ngày đăng : {{$truyen->created_at->diffForHumans()}}</li>
            @if($truyen->updated_at != '')
            <li>Ngày cập nhật : {{$truyen->updated_at->diffForHumans()}}</li>
            @endif()
            <li>Danh mục truyện : <a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
            <li>Thể loại truyện : <a href="{{url('the-loai/'.$truyen->theloai->slug_theloai)}}">{{$truyen->theloai->tentheloai}}</a></li>
            <li>Số chapter : 12</li>
            <li>Số lượt xem : 16248</li>
            <li><a href="{{url('xem-truyen/'.$truyen->slug_truyen)}}#mucluc">Xem mục lục</a></li>
            
            @if($chapter_dau)
              <li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary" >Đọc ngay</a>
                <button class="btn btn-danger btn-thich_truyen ml-1"><i class="fa fa-heart" aria-hidden="true"></i> Thích truyện</button>
              </li>
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

      <!----------------Facebook--------------------->
      <div class="card-header facebook-comments">
        <div class="box-header"><h4>Bình luận và chia sẻ</h4></div>   
        <div class="fb-share-button" data-href="{{\URL::current()}}" data-layout="button_count" data-size="small"><a target="_blank" href="{{\URL::current()}} &amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
        <div class="fb-comments" data-href="{{\URL::current()}}" data-width="100%" data-numposts="10" ></div>
      </div>
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
      <h3 class="card-header">Truyện nổi bật</h3>
      <div class="row mt-2">
        @foreach($truyennoibat as $key => $value)
        <div class="col-md-5"><a href="{{url('xem-truyen/'.$value->slug_truyen)}}">
          <img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
          </a>   
        </div>
        <div class="col-md-7">
          <p>{{$value->tentruyen}}</p>
          <p><i class="fas fa-eye"></i> 8k</p>
        </div>
        @endforeach
      </div>
      <h3 class="card-header">Truyện xem nhiều</h3>
      <div class="row mt-2">
        @foreach($truyenxemnhieu as $key => $value)
        <div class="col-md-5"><a href="{{url('xem-truyen/'.$value->slug_truyen)}}">
          <img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}">
          </a>   
        </div>
        <div class="col-md-7">
          <p>{{$value->tentruyen}}</p>
          <p><i class="fas fa-eye"></i> 14k</p>
        </div>
        @endforeach
        
      </div>
      <h3 class="card-header">Truyện yêu thích</h3>     
      <div id = "yeuthich"></div>  
    </div>

    
  </div>
</div>

@endsection