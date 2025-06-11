@extends('admin.layout.master')

@section( 'content')
    <h2>Serie</h2>
    <a href="{{ route('series.index') }}" class="btn btn-primary mb-3"> All Series </a>

    <div id="root">

    </div>

@endsection

@section("js")

    <script>

        var blade_serie_category = @json($categories);
        var blade_serie = @json($series);

    </script>

    {{-- save တာနဲ့အမြဲအလုပ်လုပ်နေမယ် --}}
    @viteReactRefresh
    @vite('resources/js/Serie/EditSerie.jsx')


@endsection 