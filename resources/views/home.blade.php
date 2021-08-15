@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Menu Quản lý</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                        <iframe width="1040" height="560" src="https://short.ink/Yd9isX0dF" frameborder="0" scrolling="0" allowfullscreen></iframe>         
                    </center>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
