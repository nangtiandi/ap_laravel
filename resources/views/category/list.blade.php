
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Create At</th>
            <th colspan="2">Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach(\App\Models\Category::all() as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->category}}</td>
                <td>{{$category->created_at}}</td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{route('category.destroy',$category->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
