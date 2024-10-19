<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ITPN
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="dropdownId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Catalogos</a
                            >
                            <div
                                class="dropdown-menu"
                                aria-labelledby="dropdownId"
                            >
                                <a class="dropdown-item" href="{{route('periodos.index')}}"
                                    >Periodos</a
                                >
                                <a class="dropdown-item" href="{{route('plazas.index')}}"
                                    >Plazas</a
                                >
                                <a class="dropdown-item" href="{{route('puestos.index')}}"
                                    >Puestos</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Personal</a
                                >
                                <a class="dropdown-item" href="{{route('deptos.index')}}"
                                    >Departamentos</a
                                >
                                <a class="dropdown-item" href="{{route('carreras.index')}}"
                                    >Carreras</a
                                >
                                <a class="dropdown-item" href="{{route('reticulas.index')}}"
                                    >Reticulas</a
                                >
                                <a class="dropdown-item" href="{{route('materias.index')}}"
                                    >Materias</a
                                >
                                <a class="dropdown-item" href="{{route('alumnos.index')}}"
                                    >Alumnos</a
                                >
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="dropdownId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Horarios</a
                            >
                            <div
                                class="dropdown-menu"
                                aria-labelledby="dropdownId"
                            >
                                <a class="dropdown-item" href="#"
                                    >Docentes</a
                                >
                                <a class="dropdown-item" href="{{route('alumnos.index')}}"
                                    >Alumnos</a
                                >
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="dropdownId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                >Proyectos Individuales</a
                            >
                            <div
                                class="dropdown-menu"
                                aria-labelledby="dropdownId"
                            >
                                <a class="dropdown-item" href="#"
                                    >Capacitacion</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Asesorias doc.</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Proyectos</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Material Didactico</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Docencia e inv.</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Asesoria a proyectos ext.</a
                                >
                                <a class="dropdown-item" href="#"
                                    >Asesoria a SS.</a
                                >
                            </div>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
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
                        {{-- MENU DE ARRIBA --}}
                                
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{route('alumnos.index')}}">Alumnos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('carreras.index')}}">Carreras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('deptos.index')}}">Deptos</a>
                                </li> --}}


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>