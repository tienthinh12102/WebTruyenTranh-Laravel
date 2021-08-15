@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm sách</div>
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
                    <form method="POST" action="{{route('sach.store')}}" enctype="multipart/form-data" >
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên sách</label>
                        <input type="text" name="tensach" value="{{old('tensach')}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên sách ... ">
                      </div>
                      
                       <div class="form-group">
                        <label for="exampleInputEmail1">Slug sách</label>
                        <input type="text" name="slug_sach" value="{{old('slug_sach')}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Tên slug sách ... ">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tóm tắt truyện</label>
                        <textarea class="form-control" name="tomtat" rows="5" style="resize: null" placeholder="Tóm tắt..."></textarea>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Views</label>
                        <input type="number" name="views" value="{{old('views')}}" class="form-control"  id="slug" aria-describedby="emailHelp" placeholder="Lượt xem ...">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh sách</label>
                        <input type="file" class="form-control-file" name="hinhanh">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kích hoạt sách</label>
                        <select name="kichhoat" class="custom-select">
                          <option value="0">Kích hoạt</option>
                          <option value="1">Không kích hoạt</option>
                        </select>
                      </div>
                      <button type="submit" name="themsach" class="btn btn-primary">Thêm</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
