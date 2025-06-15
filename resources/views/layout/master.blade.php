<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Stream</title>
    {{--  --}}
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    {{-- argon bootstrap --}}
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">

    {{-- toastr  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

</head>

<body class="position-relative">
    {{-- mobbile top bar --}}
    <div class="mobile-topbar sticky-top  d-flex d-lg-none px-2 py-2 justify-content-between align-items-center">
        <h3 class="p-0 m-0">
            <b class="text-yellow">MMC</b>
            <b class="text-white">FLIX</b>
        </h3>
        <i class="fa-solid fa-bars menu-icon text-yellow" onclick="showSidebar()"></i>
    </div>
    {{-- mobbile top bar --}}

    {{-- mobile sidebar --}}
    <div class="mobile-sidebar position-absolute p-3 ">
        <div class="px-2">
            <div class="d-flex justify-content-between align-items-center">
                <small>All Menus</small>
                <i class="fa-solid fa-circle-xmark close-icon" onclick="hideSidebar()"></i>
            </div>

            <div class="menus mt-3">
                <div class="menu-item px-2 py-2 bg-dark mt-2 d-flex align-items-center">
                    <i class="fa-solid fa-house text-yellow menu-icon"></i>
                    <a href="" class=" ml-2">Home</a>
                </div>
                <div class="menu-item px-2 py-2 bg-dark mt-2 d-flex align-items-center">
                    <i class="fa-solid fa-video text-primary menu-icon"></i>
                    <a href="" class=" ml-2">Movies</a>
                </div>
                <div class="menu-item px-2 py-2 bg-dark mt-2 d-flex align-items-center">
                    <i class="fa-solid fa-tv text-danger menu-icon"></i>
                    <a href="" class=" ml-2">TV Series</a>
                </div>
                <div class="menu-item px-2 py-2 bg-dark mt-2 d-flex align-items-center">
                    <i class="fa-solid fa-magnifying-glass text-warning menu-icon"></i>
                    <a href="" class=" ml-2">Search</a>
                </div>
            </div>
        </div>


        <div class="px-2 mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <small>Settings</small>
            </div>

            <div class="menus mt-2">
                <div class="menu-item px-2 py-2 bg-dark mt-2 d-flex align-items-center">
                    <i class="fa-solid fa-gear text-secondary menu-icon"></i>
                    <a href="" class=" ml-2">Setting</a>
                </div>
                <div class="menu-item px-2 py-2 bg-dark mt-2 d-flex align-items-center">
                    <i class="fa-regular fa-user text-primary menu-icon"></i>
                    <a href="" class=" ml-2">Account Login</a>
                </div>

            </div>
        </div>

    </div>


    {{-- navbar --}}
    <nav class="bg-dark px-5 py-2 d-none d-lg-flex justify-content-between sticky-top">
        {{-- logo --}}
        <h3 class="p-0 m-0">
            <b class="text-yellow">MMC</b>
            <b class="text-white">FLIX</b>
        </h3>
        {{-- menu --}}
        <div class="d-flex align-items-center">
            <a href="{{url('/')}}" class="ml-4 text-white">Home</a>
            <a href="{{url('/movie')}}" class="ml-4 text-white">Movies</a>
            <a href="{{url('/serie')}}" class="ml-4 text-white">TV Series </a>
            <a href="{{url('/sub')}}" class="ml-4 text-white">Subscribption </a>

            <div class="dropdown ml-4">
                <span class="text-white" type="button" id="mainMenu" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Category
                </span>
                <div class="dropdown-menu" aria-labelledby="mainMenu">
                    @foreach($shareCategroies as $shareCategory)
                        <a class="dropdown-item" href="{{ url('/movie?category='.$shareCategory->slug) }}">{{$shareCategory->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- account --}}
        <div class="d-flex align-items-center nav-account">
            <div class="dropdown">
                <span class="btn btn-outline-yellow" type="button" id="mainMenu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Account
                </span>
                <div class="dropdown-menu" aria-labelledby="mainMenu">
                    {{-- if you are not login --}}
                    @guest
                        <a class="dropdown-item" href="{{url('/login')}}">Login</a>
                        <a class="dropdown-item" href="{{url('/register')}}">Create Account</a>
                    @endguest
                    
                    {{-- if you are login --}}
                    @auth
                        <a class="dropdown-item" href="javascript:void(0);">{{Auth::user()->name}}</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    @endauth
                   
                </div>
            </div>
        </div>
    </nav>

    {{-- hero header --}}
    <div class="hero-header d-flex justify-content-center align-items-center">
        <div class="d-flex flex-column">
            <h1 class="text-white text-center">Welcome <b class="text-yellow">MMC</b>
                <b class="text-white">FLIX</b>
            </h1>
            <p class="text-white text-center">Millions of movies, TV shows and people to discover. Explore now.</p>

            <div class="mt-3">
                <p class="text-gray text-center p-0 m-0">
                    No more ads? kindly check your plan.
                </p>

                <div class="text-center mt-1">
                    <a href="/plan" class="btn btn-outline-yellow">
                        <h6 class="d-inline text-yellow p-0 m-0 ">
                            <i class="fa-solid fa-right-long"></i> Subscribption
                        </h6>
                    </a>
                </div>

            </div>
        </div>

    </div>
    

    @yield('content')


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script>
        const showSidebar = () => {
            $('.mobile-sidebar').addClass('show-sidebar');
        }
        const hideSidebar = () => {
            $('.mobile-sidebar').removeClass('show-sidebar');
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- validation error --}}
    @if($errors->any())
        @foreach($errors->all() as $err)
            <script>
                toastr.warning('{{$err}}');
            </script>
        @endforeach 
    @endif

    {{-- section message  --}}
    @if(session('success'))
        <script>
            toastr.success('{{session('success')}}');
        </script>
    @endif

    @yield('js');

</body>

</html>