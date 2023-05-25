<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="resources\scss\style.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        @include('partials.header')

        <main class="d-flex">
            <div class="">
                <div class=" rounded d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
                    <a href="/admin"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <svg class="bi pe-none me-2" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="fs-4 ">  Barra di Navigazione</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white ">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                             Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.projects.index') }}" class="nav-link text-white">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                              Progetti
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.projects.create') }}" class="nav-link text-white">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                              Crea Nuovo Progetto
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.types.index') }}" class="nav-link text-white">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                              Tipologie
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.types.create') }}" class="nav-link text-white">
                                <svg class="bi pe-none me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                              Crea Nuova Tipologia
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>

            <div class="col-8">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
