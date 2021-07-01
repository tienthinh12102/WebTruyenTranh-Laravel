@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật thể loại truyện</div>
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
                    <form method="POST" action="{{route('theloai.update',[$theloai->id])}}">
                        @method('PUT')
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên thể loại</label>
                        <input type="text" name="tentheloai" value="{{$theloai->tentheloai}}" onkeyup="ChangeToSlug();" class="form-control" id="slug" aria-describedby="emailHelp" placeholder="Tên thể loại ... ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Slug thể loại</label>
                        <input type="text" name="slug_theloai" value="{{$theloai->slug_theloai}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Tên Slug ... ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả thể loại</label>
                        <textarea name="mota" class="form-control" rows="5" style="resize: none">{{$theloai->mota}}</textarea>
                       {{--  <input type="text" name="mota" value="{{$theloai->mota}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả thể loại ... "> --}}
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kích hoạt thể loại</label>
                        <select name="kichhoat" class="custom-select">
                            @if($theloai->kichhoat==0)
                                <option selected value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            @else
                                <option value="0">Kích hoạt</option>
                                <option selected value="1">Không kích hoạt</option>
                            @endif
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
