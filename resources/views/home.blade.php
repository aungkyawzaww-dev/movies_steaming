@extends('layout.master')

@section('content')
{{-- movie list  --}}
    <div class="container-fluid mt-4">
        {{-- title --}}
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="text-white">Latest Movies</h3>
                    <a href="{{url('/movie')}}" class="btn btn-outline-yellow">View All</a>
                </div>
            </div>
        </div>
        {{-- movies --}}
        <div class="row">
            @foreach($latest_movies as $latest_movie)
                <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                    <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                        style="background-image: url('{{$latest_movie->image}}');">
                        {{-- rating --}}
                        <div
                            class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                            <span class="text-white">{{$latest_movie->rating_no}}</span>
                        </div>
                        {{-- play icon --}}
                        <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                            <i class="fa-regular fa-circle-play text-yellow"></i>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


    </div>


    {{-- tv series list --}}
    <div class="container-fluid mt-4">
        {{-- title --}}
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="text-white">Latest Series</h3>
                    <a href="{{url('/serie')}}" class="btn btn-outline-yellow">View All</a>
                </div>
            </div>
        </div>
        {{-- series --}}
        <div class="row">
            @foreach($latest_series as $latest_serie)
                <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                    <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                        style="background-image: url('{{$latest_serie->image}}');">
                        {{-- rating --}}
                        <div
                            class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                            <span class="text-white">{{$latest_serie->rating_no}}</span>
                        </div>
                        {{-- play icon --}}
                        <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                            <i class="fa-regular fa-circle-play text-yellow"></i>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


    </div>
@endsection