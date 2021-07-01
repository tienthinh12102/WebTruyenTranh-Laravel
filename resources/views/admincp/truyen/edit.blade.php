@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật truyện</div>
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
                    <form method="POST" action="{{route('truyen.update',[$truyen->id])}}" enctype="multipart/form-data" >
                        @method('PUT')
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên truyện</label>
                        <input type="text" name="tentruyen" value="{{$truyen->tentruyen}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện ... ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tác giả</label>
                        <input type="text" name="tacgia" value="{{$truyen->tacgia}}" class="form-control" aria-describedby="emailHelp" >
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Slug truyện</label>
                        <input type="text" name="slug_truyen" value="{{$truyen->slug_truyen}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Tên slug ... ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tóm tắt truyện</label>
                        <textarea class="form-control" name="tomtat" rows="5" style="resize: null">{{$truyen->tomtat}}</textarea>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Danh mục truyện</label>
                        <select name="danhmuc" class="custom-select">
                            @foreach($danhmuc as $key => $muc)
                          <option  {{$muc->id==$truyen->danhmuc_id ? 'selected' : ''}} value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Thể loại truyện</label>
                        <select name="theloai" class="custom-select">
                            @foreach($theloai as $key => $value)
                          <option  {{$value->id==$truyen->theloai_id ? 'selected' : ''}} value="{{$value->id}}">{{$value->tentheloai}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh truyện</label>
                        <input type="file" class="form-control-file" name="hinhanh">
                        <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="70" width="90">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kích hoạt danh mục</label>
                        <select name="kichhoat" class="custom-select">
                            @if($truyen->kichhoat==0)
                                <option selected value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            @else
                                <option value="0">Kích hoạt</option>
                                <option selected value="1">Không kích hoạt</option>
                            @endif
                        </select>
                      </div>
                      <button type="submit" name="themtruyen" class="btn btn-primary">Cập nhật</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
