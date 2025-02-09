<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Sentra HKI UG'))</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container d-flex justify-content-between">
                <!-- Navbar Kiri: Logo -->
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    <img src="{{ asset('Logo.png') }}" alt="Logo DJKI" style="height: 40px;">
                </a>

                <!-- Navbar Tengah: Menu -->
                @if (Auth::check() && !in_array(Route::currentRouteName(), ['login', 'register']))
                    <div class="d-none d-md-flex">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/sejarah') }}">Sejarah</a>
                            </li>
                            <!-- Dropdown Hak Cipta -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="hakCiptaDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Hak Cipta
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="hakCiptaDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/hak-cipta') }}">Permohonan Baru</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/dashboard') }}">Daftar Ciptaan</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="pascaHakCiptaDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pasca Hak Cipta
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="pascaHakCiptaDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ url('/pasca-hak-cipta') }}">Permohonan
                                            Baru</a>
                                        <a class="dropdown-item" href="{{ url('/daftar-pasca-ciptaan') }}">Daftar Pasca
                                            Ciptaan</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                @endif


                <!-- Navbar Kanan: Nama Pengguna atau Tombol -->
                <ul class="navbar-nav">
                    @guest
                        @if (Route::currentRouteName() === 'login' || '/')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @elseif (Route::currentRouteName() === 'register')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>


        <main class="py-4 vw-100 vh-100">
            @yield('content')
        </main>
    </div>
</body>

</html>
