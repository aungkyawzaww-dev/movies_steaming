@extends('admin.layout.master')

@section( 'content')
    <h2>Movie</h2>
    <a href="{{ route('movie.index') }}" class="btn btn-primary mb-3"> All Movies </a>

    <div id="root">

    </div>

@endsection

@section("js")
    
    {{-- select 2   --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>

        var blade_movie_category = @json($category);

    </script>

    {{-- save တာနဲ့အမြဲအလုပ်လုပ်နေမယ် --}}
    @viteReactRefresh
    @vite('resources/js/Movie/CreateMovie.jsx')

    <script>
        $('document').ready(()=>{
            $("#movie_category").select2();
        });
    </script>

@endsection 