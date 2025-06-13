@extends('layout.master')

@section('content')
{{-- movie list  --}}
    <div class="container-fluid mt-4">
        {{-- title --}}
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="text-white">Latest Movies</h3>
                    <a href="" class="btn btn-outline-yellow">View All</a>
                </div>
            </div>
        </div>
        {{-- movies --}}
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/nyN8R0P1Hqwq7ksJz4O2BIAUd4W.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/fH7PP2Rkdlo414IHvZABBHhtoqd.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/xMMH3r8gJtWVe1841BtHGjDooUm.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/2cxhvwyEwRlysAmRH4iodkvo0z5.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>

        </div>


    </div>


    {{-- tv series list --}}
    <div class="container-fluid mt-4">
        {{-- title --}}
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="text-white">Latest TV Series</h3>
                    <a href="" class="btn btn-outline-yellow">View All</a>
                </div>
            </div>
        </div>
        {{-- movies --}}
        <div class="row">
            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/nyN8R0P1Hqwq7ksJz4O2BIAUd4W.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/fH7PP2Rkdlo414IHvZABBHhtoqd.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/xMMH3r8gJtWVe1841BtHGjDooUm.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-2">
                <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/2cxhvwyEwRlysAmRH4iodkvo0z5.jpg');">
                    {{-- rating --}}
                    <div
                        class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                        <span class="text-white">7.9</span>
                    </div>
                    {{-- play icon --}}
                    <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                        <i class="fa-regular fa-circle-play text-yellow"></i>
                    </div>
                </div>
            </div>

        </div>


    </div>
@endsection