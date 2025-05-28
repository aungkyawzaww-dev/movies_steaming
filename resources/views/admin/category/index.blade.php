@extends('admin.layout.master')

@section( 'content')
    <div class="mb-3 mt-3">
        <a href="{{ route('category.create') }}" class="btn btn-primary"> Create Category </a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Slug</th>
                <th>Name</th>
                <th>Move Count</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>

            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <span class="badge badge-warning">{{ $category->movies_count }}</span>
                    </td>
                    <td>
                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <form onsubmit="return confirm('Sure for delete?')" class="d-inline" action="{{route('category.destroy',$category->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <input type="submit" value="Delete" class="btn btn-sm btn-danger" />

                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>


@endsection