<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link active" href="#">
            <i class="ni ni-atom text-warning"></i>
            <span class="nav-link-text">Gem</span>
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