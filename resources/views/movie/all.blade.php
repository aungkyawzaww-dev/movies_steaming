@extends('layout.master')

@section("content")

<style>
    .border-muted{
        border:1px solid #545252d8 !important;
    }
</style>

<div class="container-fluid mt-4">

    <div class="row">
        <div class="col-3 mb-4">

            <div class="dark">
                <h4 class="p-0 m-0 p-2 text-white">Filter Movies</h4>
            </div>

            @if(request()->is_search)
                <div class="card bg-transparent border border-muted">
                    <div class="card-body p-0 m-0 p-3">
                        <a href="{{url('/movie')}}">Clear Filter</a>
                    </div>
                </div>
            @endif

            <div class="card bg-transparent border border-muted">
                <div class="card-body p-0 m-0 p-3">
                    <h6 class="text-secondary p-0 m-0 mb-2">Search Movie</h6>
                    <form action="" class="" method="">
                        <input type="hidden" name="is_search" value="y">
                        <input type="text" name="search" class="btn border-warning" placeholder="Enter Search">
                        <input type="submit" value="Search" class="btn btn-warning">
                    </form>
                </div>
            </div>

            <div class="card bg-transparent border border-muted mt-3">
                <div class="card-body p-0 m-0 p-3">
                    <h6 class="text-secondary p-0 m-0 mb-2">By Category</h6>
                    <div class="mt-3">
                        @foreach($shareCategroies as $c)
                            <a href="{{url('/movie?is_search=y&category='.$c->slug)}}" class="btn btn-sm btn-outline-warning m-1">{{$c->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="card bg-transparent border border-muted mt-3">
                <div class="card-body p-0 m-0 p-3">
                    <h6 class="text-secondary p-0 m-0 mb-2">By Rating</h6>
                    <div class="mt-3">
                        <div class="btn btn-outline-primary">                           
                            <a href="{{url('/movie?is_search=y&rating=abovefive')}}">5 &gt; rating</a>
                        </div>

                        <div class="btn btn-outline-primary">
                            <a href="{{url('/movie?is_search=y&rating=belowfive')}}">5 &lt; rating</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-9">
            <div class="row">
                @foreach($latest_movies as $latest_movie) 
                    <div class="col-4 col-sm-6 col-md-3 col-lg-3 pb-3">
                        <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                            style="background-image: url('{{$latest_movie->image}}');">

                            <div
                                class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                                <span class="text-white">{{$latest_movie->rating_no}}</span>
                            </div>
                            <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-circle-play text-yellow"></i>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- pagination --}}
                <div class="col-12">
                    <div class="mt-3">
                        {{$latest_movies->links('pagination::bootstrap-5')}}
                    </div>
                </div>

            </div>
        </div>
        
    </div>


     


</div>
@endsection