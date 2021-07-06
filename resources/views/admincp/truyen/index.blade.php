@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê truyện</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                     <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Tên truyện</th>
                          <th scope="col">Hình ảnh</th>
                          <th scope="col">Slug truyện</th>
                          {{-- <th scope="col">Tóm tắt truyện</th> --}}
                          <th scope="col">Danh mục</th>
                          <th scope="col">Thể loại</th>
                          <th scope="col">Kích hoạt</th>
                          <th scope="col">Ngày đăng</th>
                          <th scope="col">Ngày cập nhật</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($list_truyen as $key => $truyen)
                        <tr>
                          <th scope="row">{{$key}}</th>
                          <td>{{$truyen->tentruyen}}</td>
                          <td><img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="100" width="80"></td>
                          <td>{{$truyen->slug_truyen}}</td>
                          {{-- <td>{{$truyen->tomtat}}</td> --}}
                          <td>{{$truyen->danhmuctruyen->tendanhmuc}}</td>
                          <td>{{$truyen->theloai->tentheloai}}</td>
                          <td>
                              @if($truyen->kichhoat==0)
                                <span class="text text-success">Kích hoạt</span>
                              @else
                                <span class="text text-danger">Không kích hoạt</span>
                              @endif
                          </td>
                          <td>{{$truyen->created_at}} - {{$truyen->created_at->diffForHumans()}}</td>
                          <td>
                            @if($truyen->updated_at != '')
                            {{$truyen->updated_at}} - {{$truyen->updated_at->diffForHumans()}}
                            @endif
                          </td>

                          <td>
                            <a href="{{route('truyen.edit',[$truyen->id])}}" class="btn btn-success">Edit</a>
                              <form action="{{ route('truyen.destroy',[$truyen->id])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick="return confirm('Bạn có muốn xóa truyện này không ?')" class="btn btn-danger">Delete</button>
                              </form>
                          </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
