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
                <form action="/posts" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="name" value=" {{old('name')}} ">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="30" rows="5" class="form-control">
                            {{old('description')}}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" id="" class="form-select">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                            @endforeach
                    </div>
                    <input type="submit" class="btn btn-primary" value="Add Post">
                    <a href="/posts" class="btn btn-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection