<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- JQUERRY --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Lionsdale</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
            {{-- Navnar --}}
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    {{-- Home img/button --}}
                    <a class="navbar-brand text-info" href="
                        @guest
                            {{ url('/') }}
                        @else
                            {{ url('/home') }}
                        @endguest
                            ">
                        <img id="homeIcon" src="../storage/icons/home3.png" alt="">
                    </a>
                    {{-- Side menu  --}}
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end bg-dark text-info" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Lionsdale</h5>

                            <button type="button" class="btn text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close">X</button>
                        </div>
                        {{-- Log in / Register and Log out --}}
                    <div class="offcanvas-body bg-dark text-info">
                        <ul class="navbar-nav">
                            @guest
                            @if (Route::has('login'))
                                <button id="menuBtn" class="btn btn-outline-success" type="submit" onclick="window.location=' {{ url("/login") }} '">{{ __('Login') }}</button>
                            @endif
                            @if (Route::has('register'))
                                <button id="menuBtn" class="btn btn-outline-success" type="submit" onclick="window.location=' {{ url("/register") }} '"> {{ __('Register') }}</button>
                            @endif
                        @else
                         <button id="menuBtn" class="btn btn-outline-danger" type="submit" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</button>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <button id="menuBtn" class="btn btn-outline-info" type="submit" onclick="window.location=' {{ route("courses.index") }} '">Courses</button>
                                    <button id="menuBtn" class="btn btn-outline-info" type="submit" onclick="window.location=' {{ route("schools.index") }} '">Schools</button>
                                    <?php
                                        if(auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2){
                                            echo '
                                                <button id="menuBtn" class="btn btn-outline-info" type="submit" onclick="window.location=" route("courses.create").">Create courses</button>';
                                            echo '
                                                <button id="menuBtn" class="btn btn-outline-info" type="submit" onclick="window.location=" route("schools.create").">Create schools</button>';
                                        }
                                    ?>
                           @endguest
                            <button class="btn btn-outline-info" type="submit" onclick="window.location=' {{ url("/about_us") }} '"">About us</button>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
