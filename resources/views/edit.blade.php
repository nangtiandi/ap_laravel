@extends('layout')
@section('content')
    <div class="container">
        <div class="card my-2">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/posts/{{$post->id}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="name" value=" {{old('name',$post->name)}} ">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control">
                            {{$post->description}}
                        </textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update Post">
                    <a href="/posts" class="btn btn-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection