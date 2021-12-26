@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(session('status'))
                    <div class="alert alert-success">
                        <strong>{{session('status')}}</strong>
                    </div>
                @endif
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input type="text" class="form-control" name="category">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Create Category">
                </form>
            </div>
            <div class="col-md-6">
                @include('category.list')
            </div>
        </div>
    </div>
@endsection
