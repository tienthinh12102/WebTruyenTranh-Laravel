@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật sách</div>
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
                    <form method="POST" action="{{route('sach.update',[$sach->id])}}" enctype="multipart/form-data" >
                        @method('PUT')   
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên sách</label>
                        <input type="text" name="tensach" value="{{$sach->tensach}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên sách ... ">
                      </div>
                      
                       <div class="form-group">
                        <label for="exampleInputEmail1">Slug sách</label>
                        <input type="text" name="slug_sach" value="{{$sach->slug_sach}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Tên slug sách ... ">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tóm tắt sách</label>
                        <textarea class="form-control" name="tomtat" rows="5" style="resize: null">{{$sach->tomtat}}</textarea>
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Views</label>
                        <input type="number" name="views" value="{{$sach->views}}" class="form-control"  id="slug" aria-describedby="emailHelp" placeholder="Lượt xem ...">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Hình ảnh sách</label>
                        <input type="file" class="form-control-file" name="hinhanh">
                        <img src="{{asset('public/uploads/sach/'.$sach->hinhanh)}}" height="70" width="90">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kích hoạt sách</label>
                        <select name="kichhoat" class="custom-select">
                            @if($sach->kichhoat==0)
                                <option selected value="0">Kích hoạt</option>
                                <option value="1">Không kích hoạt</option>
                            @else
                                <option value="0">Kích hoạt</option>
                                <option selected value="1">Không kích hoạt</option>
                            @endif
                        </select>
                      </div>
                      <button type="submit" name="themsach" class="btn btn-primary">Cập nhật</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
