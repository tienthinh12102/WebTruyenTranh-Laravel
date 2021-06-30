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
          <p><a href="{{url('xem-chapter/'. $previous_chapter)}}" class="btn btn-primary {{$chapter->id==$min_id->id ? 'isDisable' : ''}}">Tập Trước</a></p>
          <select name="kichhoat" class="custom-select select-chapter">
            @foreach($allchapter as $key =>$chap)
            <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
            @endforeach
          </select>
          <p class="mt-3"><a href="{{url('xem-chapter/'. $next_chapter)}}" class="btn btn-primary {{$chapter->id==$max_id->id ? 'isDisable' : ''}}">Tập Sau</a></p>
        </div>
      </div>
      <div class="noidungchuong">
        <p>{!! $chapter->noidung !!}</p>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          
          <label for="exampleInputEmail1">Chọn chương</label>
          <select name="kichhoat" class="custom-select select-chapter">
            @foreach($allchapter as $key =>$chap)
            <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
            @endforeach
          </select>

        </div>
      </div>

      <h4>Truyện cùng thể loại</h4>
      <div class="row">
        <div class="col-md-2">
          <div class="card mb-2 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h6>Nhất quỷ nhì mà</h6>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-2">
          <div class="card mb-2 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h6>Nhất quỷ nhì mà</h6>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-2">
          <div class="card mb-2 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h6>Nhất quỷ nhì mà</h6>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>
        <div class="col-md-2">
          <div class="card mb-2 box-shadow">
            <a href="">
              <img class="card-img-top" src="{{asset('public/uploads/truyen/nhat-quy-nhi-ma-thu-ba-takagi81.jpg')}}">
              <div class="card-body">
                <h6>Nhất quỷ nhì mà</h6>
                <p class="card-text">Tóm tắt</p>
              </div>
            </a>       
          </div>        
        </div>

      </div>


    </div>
    
  </div>

  @endsection