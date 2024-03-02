@extends('errors::minimal')

@section('title', 'Not Found')

@section('code')
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h1>404 | Not Found</h1>
        </div>
    </div>

@section('message')
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <a href="/" class="btn btn-primary">Home Page</a>
        </div>
    </div>
@endsection
