<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="#">
            <i class="fa-solid fa-chart-pie text-warning"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link active" href={{ route("category.index") }}>
            <i class="fa-solid fa-list-check text-warning"></i>
            <span class="nav-link-text">Category</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link active" href="{{ route("movie.index") }}">
            <i class="fa-solid fa-clapperboard text-warning"></i>
            <span class="nav-link-text">Movies</span>
        </a>
    </li>


    <li class="nav-item">
        <a class="nav-link active" href="{{route('series.index')}}">
            <i class="fa-solid fa-tv text-warning"></i>
            <span class="nav-link-text">Series</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link active" href="{{route('ads.index')}}">
            <i class="fa-solid fa-tv text-warning"></i>
            <span class="nav-link-text">ADS Management</span>
        </a>
    </li>


    <li class="nav-item ">
        <a class="nav-link active" href="#homeData" data-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="navbar-dashboards">
            <i class="ni ni-diamond text-warning"></i>
            <span class="nav-link-text  ">Movie</span>
        </a>
        <div class="collapse" id="homeData">
            <ul class="nav nav-sm flex-column">

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                        <span class="sidenav-normal">Movie Category</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('movie.index') }}">
                        <i class="ni ni-diamond text-primary sidenav-mini-icon"></i>
                        <span class="sidenav-normal">Movie</span>
                    </a>
                </li>

            </ul>
        </div>
    </li>

</ul>