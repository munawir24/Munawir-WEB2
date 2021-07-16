@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href=""></a>
                    Anda Telah Login
                    <br>
                    <p1>Sebagai <a class="text-danger" href="#">{{Auth::user()->name }}</a></p1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection