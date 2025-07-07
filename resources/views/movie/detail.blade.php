@extends('layout.master')

@section('css')
    <!-- plyr -->
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
@endsection

@section('content')
    <div class="container-fluid px-5 mt-4 movie-detail" id="movieDetail">

        {{-- <div class="row">
            <div class="col-12">
                <h2 class="text-white">Out of My Mind (2024)</h2>
            </div>
        </div>

        <div class="row">
            <!-- image -->
            <div class="col-12 col-md-2">
                <img src="https://media.themoviedb.org/t/p/w600_and_h900_bestv2/o8qtMeCskitW5QwSu6O1nP4jN6z.jpg"
                    class="w-100 rounded">
                <div class="mt-2 bg-dark p-3 d-flex justify-content-between rounded">
                    <i class="fa-regular fa-heart action-icon text-danger"></i>
                    <i class="fa-regular fa-bookmark text-primary action-icon"></i>
                    <i class="fa-regular fa-circle-down text-success action-icon"></i>
                </div>
            </div>
            <!-- desc -->
            <div class="col-12 col-md-5">
                <div class="text-muted">
                    Director : <span class="text-yellow">Amber Sealey</span>
                </div>
                <div class="text-muted">
                    Cast : <span class="text-yellow">Phoebe-Rae Taylor,Jennifer Aniston,Rosemarie DeWitt</span>
                </div>
                <div class="text-muted">
                    Genre : <span class="text-yellow">Drama</span>
                </div>
                <div class="text-muted">
                    Running Time : <span class="text-yellow">140 min</span>
                </div>
                <div class="text-muted">
                    Country : <span class="text-yellow">USA</span>
                </div>

                <div>
                    <h5 class="text-white">Overview</h5>
                    <p>
                        Melody Brooks, a sixth grader with cerebral palsy, has a quick wit and a sharp mind, but because
                        she is non-verbal and uses a wheelchair, she is not given the same opportunities as her
                        classmates. When a young educator notices her student's untapped potential and Melody starts to
                        participate in mainstream education, Melody shows that what she has to say is more important
                        than how she says it.
                    </p>
                </div>
            </div>
            <!-- video player -->
            <div class="col-12 col-md-5">
                <video class="rounded" src="https://www.w3schools.com/html/mov_bbb.mp4" id="moviePlayer"
                    controls></video>

                <div class="bg-dark p-2 rounded">
                    <span class="btn btn-yellow">1</span>
                    <span class="btn btn-outline-yellow">2</span>
                    <span class="btn btn-outline-yellow">3</span>
                </div>
            </div>

            <!-- movie tabs -->

            <div class="row mt-5">
                <div class="col-12 col-md-8">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <span class="active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home"
                                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Comments &
                                Reviews
                            </span>
                            <span class="ml-4" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile"
                                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Photos
                            </span>

                        </div>
                    </nav>
                    <div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <!-- comment list -->
                            <div class="mt-2 bg-dark rounded p-3">
                                <div class="d-flex comment ">
                                    <img src="https://yt3.ggpht.com/CUOcBRQZX-34V3bj2FLdfSK3G2QU7wwgefuhvIkjUh5aGOYkUFBo7pwPXOoI1fl-1cqGxqig=s68-c-k-c0x00ffffff-no-rj"
                                        class="rounded-circle">
                                    <div class="ml-3">
                                        <b class="d-block text-white">Myo Thant Kyaw</b>
                                        <small class="text-muted d-block">
                                            1 day ago
                                        </small>
                                    </div>
                                </div>
                                <div class="text-muted mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem perspiciatis
                                    possimus expedita sed officiis ea distinctio nam eligendi sit odio ab sint, placeat
                                    eaque aliquam culpa dicta autem natus minus?
                                </div>
                            </div>
                            <div class="mt-2 bg-dark rounded p-3">
                                <div class="d-flex comment ">
                                    <img src="https://yt3.ggpht.com/CUOcBRQZX-34V3bj2FLdfSK3G2QU7wwgefuhvIkjUh5aGOYkUFBo7pwPXOoI1fl-1cqGxqig=s68-c-k-c0x00ffffff-no-rj"
                                        class="rounded-circle">
                                    <div class="ml-3">
                                        <b class="d-block text-white">Myo Thant Kyaw</b>
                                        <small class="text-muted d-block">
                                            1 day ago
                                        </small>
                                    </div>
                                </div>
                                <div class="text-muted mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem perspiciatis
                                    possimus expedita sed officiis ea distinctio nam eligendi sit odio ab sint, placeat
                                    eaque aliquam culpa dicta autem natus minus?
                                </div>
                            </div>
                            <div class="mt-2 bg-dark rounded p-3">
                                <div class="d-flex comment ">
                                    <img src="https://yt3.ggpht.com/CUOcBRQZX-34V3bj2FLdfSK3G2QU7wwgefuhvIkjUh5aGOYkUFBo7pwPXOoI1fl-1cqGxqig=s68-c-k-c0x00ffffff-no-rj"
                                        class="rounded-circle">
                                    <div class="ml-3">
                                        <b class="d-block text-white">Myo Thant Kyaw</b>
                                        <small class="text-muted d-block">
                                            1 day ago
                                        </small>
                                    </div>
                                </div>
                                <div class="text-muted mt-3">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem perspiciatis
                                    possimus expedita sed officiis ea distinctio nam eligendi sit odio ab sint, placeat
                                    eaque aliquam culpa dicta autem natus minus?
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <img src="https://media.themoviedb.org/t/p/w500_and_h282_face/t8gYxihohFaDQa6KAL21UkUK4Qt.jpg"
                                        class="rounded w-100">
                                </div>
                                <div class="col-12 col-md-3">
                                    <img src="https://media.themoviedb.org/t/p/w1000_and_h563_face/thDLoKyWdgK6EWXwGsjYqAFenuN.jpg"
                                        class="rounded w-100">
                                </div>
                                <div class="col-12 col-md-3">
                                    <img src="https://media.themoviedb.org/t/p/w500_and_h282_face/t8gYxihohFaDQa6KAL21UkUK4Qt.jpg"
                                        class="rounded w-100">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-white">Related Movies</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-3">
                            <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                                style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg');">
                                <!-- rating -->
                                <div
                                    class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                                    <span class="text-white">7.9</span>
                                </div>
                                <!-- play icon -->
                                <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                                    <i class="fa-regular fa-circle-play text-yellow"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-3">
                            <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                                style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg');">
                                <!-- rating -->
                                <div
                                    class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                                    <span class="text-white">7.9</span>
                                </div>
                                <!-- play icon -->
                                <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                                    <i class="fa-regular fa-circle-play text-yellow"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-3">
                            <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                                style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg');">
                                <!-- rating -->
                                <div
                                    class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                                    <span class="text-white">7.9</span>
                                </div>
                                <!-- play icon -->
                                <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                                    <i class="fa-regular fa-circle-play text-yellow"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 mt-3">
                            <div class="movie-card-container position-relative d-flex justify-content-center align-items-center"
                                style="background-image: url('https://media.themoviedb.org/t/p/w440_and_h660_face/abf8tHznhSvl9BAElD2cQeRr7do.jpg');">
                                <!-- rating -->
                                <div
                                    class="rating position-absolute rounded-circle d-flex justify-content-center align-items-center">
                                    <span class="text-white">7.9</span>
                                </div>
                                <!-- play icon -->
                                <div class="play-icon rounded-circle d-flex justify-content-center align-items-center">
                                    <i class="fa-regular fa-circle-play text-yellow"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
    </div>

@endsection

@section('js')

    {{-- save တာနဲ့အမြဲအလုပ်လုပ်နေမယ် --}}
    @viteReactRefresh
    @vite('resources/js/Web/Movie.jsx')

    <!-- plyr -->
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script>
        
        $(document).ready(function(){
            const moviePlayer = new Plyr('#moviePlayer');
        });

        // const moviePlayer = new Plyr('#moviePlayer');

    </script>

@endsection