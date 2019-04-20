<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-4.3.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/ionicons-4.5.5/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <script src="{{ asset('libs/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('libs/popper.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap-4.3.1/js/bootstrap.min.js') }}"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container px-2">
        @if(Auth::check())
            <div class="row mx-n2">
                <div class="col-12 col-sm-6 col-md-5 col-lg-4 col-xl-3 px-2 py-3">
                    <ul class="list-group sidebar text-primary font-m">
                        <a href="{{ route('admin.home') }}">
                            <li class="list-group-item"><i class="icon ion-md-apps"></i> Home</li>
                        </a>
                        <a href="{{ route('category.index') }}">
                            <li class="list-group-item"><i class="icon ion-ios-list"></i> All categories</li>
                        </a>
                        <a href="{{ route('category.create') }}">
                            <li class="list-group-item"><i class="icon ion-md-add"></i> Create a new category</li>
                        </a>
                        <a href="{{ route('post.index') }}">
                            <li class="list-group-item"><i class="icon ion-ios-list"></i> All posts</li>
                        </a>
                        <a href="{{ route('post.create') }}">
                            <li class="list-group-item"><i class="icon ion-md-add"></i> Create a new post</li>
                        </a>
                        <a href="#">
                            <li class="list-group-item"><i class="icon ion-ios-list"></i> All tags</li>
                        </a>
                        <a href="#">
                            <li class="list-group-item"><i class="icon ion-md-add"></i> Create a new tag</li>
                        </a>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-md-7 col-lg-8 col-xl-9 px-2 py-3">
                    @if(Session::has('info'))
                        <div class="alert alert-primary" role="alert">
                           <button type="button" class="close" data-dismiss="alert">&times;</button>
                           {{ Session::get('info') }}
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-primary" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        @else
            <div class="py-5">
                @yield('content')
            </div>
        @endif
    </div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>
</body>
</html>
