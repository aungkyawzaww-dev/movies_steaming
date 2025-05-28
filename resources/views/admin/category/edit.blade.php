@extends('admin.layout.master')

@section( 'content')

    <div class="mb-3 mt-3">
        <a href="{{ route('category.index') }}" class="btn btn-primary mb-3"> All Category </a>
    </div>
    

    <form action="{{ route('category.update',$category->id)}}" method="POST">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text" name="name" id="name" class="form-control " value="{{old('name',$category->name)}}" />
        </div>

        <input type="submit" value="Update" class="btn btn-primary" />

    </form>



@endsection