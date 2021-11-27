@extends('layout')
@section('content')
    <div class="container">
        <div class="card my-2">
            <div class="card-header text-center">
            {{$post->name}}
            </div>
            <div class="card-body">
            <p class="card-text"> {{$post->description}} </p>
                <a href="/posts" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection