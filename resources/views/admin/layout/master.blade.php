<!DOCTYPE html>
<html>
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- nucleo icon -->
        <link rel="stylesheet" href="https://demos.creative-tim.com/argon-design-system/assets/css/nucleo-icons.css">
        <link rel="stylesheet" href="https://demos.creative-tim.com/argon-design-system/assets/css/nucleo-svg.css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('a_assets/argon/argon.min.css')}}" type="text/css">
        <!-- mm font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        {{-- toastr  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

        <style>
            body {
                font-family: "Noto Sans Myanmar", sans-serif;
            }

            .btn {
                font-weight: 300;
                font-size: .7rem;
                padding: 8px;
            }

            /* for select 2 */
            .note-group-select-from-files {
                display: none;
            }

            nav .nav-link-text {
                color: black;
            }

            nav .nav-item .nav-link {
                color: black;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
                font-size: 10px;
            }

            .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
                padding-left: 10px !important;
            }

            .select2-container {
                width: 100% !important;
            }

            .select2-container--default .select2-results__option--highlighted.select2-results__option--selectable,
            .select2-results__option--selectable {
                font-size: 10px !important;
            }

            .g-sidenav-pinned .sidenav {
                max-width: 200px !important;
            }

            @media (min-width: 1200px) {
                .g-sidenav-pinned .sidenav.fixed-left+.main-content {
                    margin-left: 200px;
                }
            }
        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.min.css"
            integrity="sha512-ioRJH7yXnyX+7fXTQEKPULWkMn3CqMcapK0NNtCN8q//sW7ZeVFcbMJ9RvX99TwDg6P8rAH2IqUSt2TLab4Xmw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>

        <!-- Sidenav -->
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs border-none bg-white"
            style="border-width:0!important">
            <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header  d-flex  align-items-center">
                    <a class="navbar-brand" href="javascript:void(0)">

                        <img src="{{ asset('a_assets/image/man.png') }}" style="border-radius: 10px" class="navbar-brand-img" alt="...">
                    </a>
                    <div class=" ml-auto">
                        <!-- Sidenav toggler -->
                        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin"
                            data-target="#sidenav-main">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="navbar-inner">
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Nav items -->
                        @include('admin.layout.sidebar')
                    </div>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand bg-warning border-bottom">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Search form -->
                        <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                            <div class="form-group mb-0">
                                <div class="input-group input-group-alternative input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Search" type="text">
                                </div>
                            </div>
                            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                                aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </form>
                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center  ml-md-auto ">
                            <li class="nav-item d-xl-none">
                                <!-- Sidenav toggler -->
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark active" data-action="sidenav-pin"
                                    data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="/a_assets/image/man.png">
                                        </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold"></span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome!</h6>
                                    </div>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-single-02"></i>
                                        <span>My profile</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-settings-gear-65"></i>
                                        <span>Settings</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-calendar-grid-58"></i>
                                        <span>Activity</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ni ni-support-16"></i>
                                        <span>Support</span>
                                    </a>
                                    <div class="dropdown-divider"></div> 
                                    <a href="{{ route('logout') }}" class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header -->

            <!-- Page content -->
            <div class="container-fluid" style="padding: 0 !important">
                <!-- Table -->
                <div class="p-2 bg-white">
                    @yield('content')
                </div>

            </div>
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="{{asset('a_assets/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('')}}"></script>
        <script src="{{asset('a_assets/js/js-cookie.js')}}"></script>
        <script src="{{asset('a_assets/js/scroll.js')}}"></script>
        <script src="{{asset('a_assets/js/scroll-lock.js')}}"></script>
        <script src="{{asset('a_assets/argon/argon.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        {{-- ads --}}
        {{-- <script type='text/javascript' src='//pl26902910.profitableratecpm.com/22/58/e9/2258e903d7d5f5a3ed474c18c941beb1.js'></script> --}}

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
