<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bridge Africa') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slidebars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/styles.min.css') }}">
    <link href="{{ asset('/assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
    @yield('head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Bridge-Africa') }}
                </a> --}}
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        {{-- <li>
                            <div class="input-group first-men md-form form-sm form-1">
                                <input type="text" class="form-control my-0 py-1" placeholder="Search bridge africa" aria-label="Search">
                                <div class="input-group-prepend" >
                                    <span class="input-group-text purple lighten-3" id="basic-text1">
                                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                    </span>
                                </div>
                            </div>
                        </li> --}}
                        {{-- <li class="test">
                            <div class="input-group first-menu">
                                <a href="#"><i class="fa fa-home"></i> Home</a>
                            </div>
                        </li> --}}
                        {{-- <li class="test">
                            <div class="input-group first-menu">
                                <a href="#"><i class="fa fa-car"></i> Marketplace</a>
                            </div>
                        </li> --}}
                        {{-- <li class="test">
                            <div class="input-group first-menu">
                                <a href="#"><i class="fa fa-comment"></i> <i class="fa fa-bell"></i> </a>
                            </div>
                        </li> --}}
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            
                            <li class="nav-item dropdown">
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a> --}}

                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div> --}}
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div >
            <hr class="shadow-5-strong">
        </div>

        <header>
            @yield('header')
        </header>

        <main class="">
            @yield('content')
        </main>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/js/jquery-migrate.js') }}" async></script>
    <script src="{{ asset('/assets/js/modernizr.min.js') }}" async></script>
    <script src="{{ asset('/assets/js/jquery.slimscroll.min.js') }}" async></script>
    <script src="{{ asset('/assets/js/slidebars.min.js') }}" async></script>
    <script src="{{ asset('/assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.dropify').dropify();
    });
</script>
</body>
</html>
