@extends('layout')
{{-- @include('navigation-menu') --}}
@section('content')
    <div class="container">
        <a href="/posts/create" class="btn btn-primary">New Post</a>
        @foreach ($posts as $post)
            <div class="card my-2">
                <div class="card-header text-center">
                {{$post->name}}
                </div>
                <div class="card-body">
                {{-- <h5 class="card-title">Special title treatment</h5> --}}
                <p class="card-text"> {{$post->description}} </p>
                {{-- <p class="card-text"> {{'Category Type : ' . $post->category->category}} </p> --}}
                <div class="d-flex">
                    <a href="/posts/{{$post->id}}" class="btn btn-primary mx-1">See More</a>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning mx-1">Edit</a>
                    <form action="/posts/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection