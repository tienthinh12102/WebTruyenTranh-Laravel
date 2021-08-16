@extends('layouts.app')

@section('content')
@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê User</div>

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
                          <th scope="col">Tên User</th>
                          <th scope="col">Slug thể loại</th>
                          <th scope="col">Mô tả</th>
                          <th scope="col">Kích hoạt</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
