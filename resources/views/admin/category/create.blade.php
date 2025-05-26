@extends('admin.layout.master')

@section( 'content')
    <h2>Category</h2>
    <a href="{{ route('category.index') }}" class="btn btn-primary mb-5"> <i class="fas fa-info-circle"></i> All Category </a>

    <form action="{{ route('category.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text" name="name" id="name" class="form-control " placeholder="Please fill your name" />
        </div>

        <input type="submit" class="btn btn-primary" />

    </form>



@endsection