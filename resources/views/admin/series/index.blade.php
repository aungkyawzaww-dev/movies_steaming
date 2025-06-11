@extends('admin.layout.master')

@section( 'content')
    <h2>serie</h2>
    <a href="{{ route('series.create') }}" class="btn btn-primary mb-3"> Create Series </a>

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
            @foreach ($series as $serie) 
                <tr>
                    <td>
                        <img src="{{ $serie->image }}" width="60px" alt="" />
                    </td>
                    <td>{{ $serie->name }}</td>
                    <td>
                        @foreach($serie->categoryFun as $category)
                            <span class="badge badge-warning">{{ $category->name }}</span>
                        @endforeach  
                    </td>
                    <td>{{ $serie->rating }}</td>
                    <td >
                        <span class="badge badge-success">{{ $serie->view_count }}</span>
                    </td>
                    <td>
                        <a href="{{ route('series-epi.index') . '?serie_id=' .$serie->id }}" class="btn btn-warning btn-sm">Manage Episode</a>
                        <a href="{{ route('series.edit',$serie->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form onsubmit="return confirm('sure for delete')" action="{{ route('series.destroy',$serie->id) }}" class="d-inline" method="POST">
                            @csrf
                            @method("DELETE")
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $series->links() }}

@endsection

@section("js")
    
   

@endsection 