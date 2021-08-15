@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container-fluid">{{-- thêm -fluid để mở rộng --}}
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê sách</div>

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
                          <th scope="col">Tên sách</th>
                          <th scope="col">Hình ảnh</th>
                          <th scope="col">Slug sách</th>
                          {{-- <th scope="col">Tóm tắt truyện</th> --}}
                          <th scope="col">Tóm tắt</th> 
                          <th scope="col">Views</th>                      
                          <th scope="col">Kích hoạt</th>                       
                          <th scope="col">Ngày đăng</th>
                          <th scope="col">Ngày cập nhật</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($list_sach as $key => $sach)
                        <tr>
                          <th scope="row">{{$key}}</th>
                          <td>{{$sach->tensach}}</td>
                          <td><img src="{{asset('public/uploads/sach/'.$sach->hinhanh)}}" height="100" width="80"></td>
                          <td>{{$sach->slug_sach}}</td>
                          <td>{{$sach->tomtat}}</td>
                          <td>{{$sach->views}}</td>
                          <td width="6%">
                              @if($sach->kichhoat==0)
                                <span class="text text-success">Kích hoạt</span>
                              @else
                                <span class="text text-danger">Không kích hoạt</span>
                              @endif
                          </td>
                          <td>{{$sach->created_at}} - {{$sach->created_at->diffForHumans()}}</td>
                          <td>
                            @if($sach->updated_at != '')
                            {{$sach->updated_at}} - {{$sach->updated_at->diffForHumans()}}
                            @endif
                          </td>
                          
                         
                         <td>
                            <a href="{{route('sach.edit',[$sach->id])}}" class="btn btn-success">Edit</a>
                              <form action="{{ route('sach.destroy',[$sach->id])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick="return confirm('Bạn có muốn xóa thể loại này không ?')" class="btn btn-danger">Delete</button>
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
