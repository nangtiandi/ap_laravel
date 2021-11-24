@extends('layout')
@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="card my-2">
                <div class="card-header text-center">
                {{$post->name}}
                </div>
                <div class="card-body">
                {{-- <h5 class="card-title">Special title treatment</h5> --}}
                <p class="card-text"> {{$post->description}} </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection