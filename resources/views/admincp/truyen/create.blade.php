@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{route('truyen.store')}}" enctype="multipart/form-data" >
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên truyện</label>
                        <input type="text" name="tentruyen" value="{{old('tentruyen')}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện ... ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tác giả</label>
                        <input type="text" name="tacgia" value="{{old('tacgia')}}" class="form-control" aria-describedby="emailHelp" >
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Slug truyện</label>
                        <input type="text" name="slug_truyen" value="{{old('slug_truyen')}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Tên slug ... ">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Từ khóa</label>
                        <input type="text" name="tukhoa" value="{{old('tukhoa')}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Từ khóa ... ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tóm tắt truyện</label>
                        <textarea class="form-control" name="tomtat" rows="5" style="resize: null"></textarea>
                        
                      </div>
                      <label for="exampleInputEmail1"><b>Danh mục truyện</b></label>
                      @foreach($danhmuc as $key => $muc)
                      <div class="form-check">
                          
                          <input class="form-check-input" name="danhmuc[]" type="checkbox" id="danhmuc_{{$muc->id}}" value="{{$muc->id}}">
                          <label class="form-check-label" for="danhmuc_{{$muc->id}}">{{$muc->tendanhmuc}}</label>
                         
                      </div>
                       @endforeach

                      <label for="exampleInputEmail1"><b>Thể loại</b></label>
                      @foreach($theloai as $key => $the)
                      <div class="form-check">
                          
                          <input class="form-check-input" name="theloai[]" type="checkbox" id="theloai_{{$the->id}}" value="{{$the->id}}">
                          <label class="form-check-label" for="theloai_{{$the->id}}">{{$the->tentheloai}}</label>
                         
                      </div>
                      @endforeach
                      {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Danh mục truyện</label>
                        <select name="danhmuc" class="custom-select">
                            @foreach($danhmuc as $key => $muc)
                          <option value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Thể loại truyện</label>
                        <select name="theloai" class="custom-select">
                            @foreach($theloai as $key => $value)
                          <option value="{{$value->id}}">{{$value->tentheloai}}</option>
                          @endforeach
                        </select>
                      </div> --}}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh truyện</label>
                        <input type="file" class="form-control-file" name="hinhanh">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Truyện nổi bật</label>
                        <select name="truyennoibat" class="custom-select">
                          <option value="0">Truyện mới</option>
                          <option value="1">Truyện nổi bật</option>
                          <option value="2">Truyện xem nhiều</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kích hoạt danh mục</label>
                        <select name="kichhoat" class="custom-select">
                          <option value="0">Kích hoạt</option>
                          <option value="1">Không kích hoạt</option>
                        </select>
                      </div>
                      <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
