@extends('admin.layout.master')

@section( 'content')
    <h2>Movie</h2>
    <a href="{{ route('movie.create') }}" class="btn btn-primary mb-3"> Create Movies </a>

    <table class="mt-3 table table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Rating</th>
                <th>View Count</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie) 
                <tr>
                    <td>
                        <img src="{{ $movie->image }}" width="60px" alt="" />
                    </td>
                    <td>{{ $movie->name }}</td>
                    <td>
                        @foreach($movie->categoryFun as $category)
                            <span class="badge badge-warning">{{ $category->name }}</span>
                        @endforeach  
                    </td>
                    <td>{{ $movie->rating }}</td>
                    <td >
                        <span class="badge badge-success">{{ $movie->view_count }}</span>
                    </td>
                    <td>
                        <a href="{{ route('movie.edit',$movie->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form onsubmit="return confirm('sure for delete')" action="{{ route('movie.destroy',$movie->id) }}" class="d-inline" method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $movies->links() }}

@endsection

@section("js")
    
   

@endsection 