@extends('admin.layout.master')

@section( 'content')
    <h2>Movie</h2>
    <a href="{{ route('movie.index') }}" class="btn btn-primary mb-3"> All Movies </a>

    <div id="root">

    </div>

@endsection

@section("js")

    <script>

        var blade_movie_category = @json($categories);
        var blade_movie = @json($movies);

    </script>

    {{-- save တာနဲ့အမြဲအလုပ်လုပ်နေမယ် --}}
    @viteReactRefresh
    @vite('resources/js/Movie/EditMovie.jsx')


@endsection 