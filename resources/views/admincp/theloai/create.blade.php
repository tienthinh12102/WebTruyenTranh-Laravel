@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm thể loại</div>
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
                    <form method="POST" action="{{route('theloai.store')}}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tên thể loại</label>
                        <input type="text" name="tentheloai" value="{{old('tentheloai')}}" class="form-control" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên thể loại ... ">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Slug thể loại</label>
                        <input type="text" name="slug_theloai" value="{{old('slug_theloai')}}" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Tên slug ... ">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả</label>
                        
                        <textarea name="mota" class="form-control"  rows="5" style="resize: none">{{old('mota')}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kích hoạt thể loại</label>
                        <select name="kichhoat" class="custom-select">
                          <option value="0">Kích hoạt</option>
                          <option value="1">Không kích hoạt</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
