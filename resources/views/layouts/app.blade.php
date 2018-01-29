<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class"nav-item">
                    <a class="nav-link" href="{{ route('about') }}">
                        @lang('pages.about.title')
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class"nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class"nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class"nav-item">
                        <a class=" btn btn-secondary" href="{{ route('posts.create') }}">
                            @lang('posts.create.title')
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ auth()->user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="languagesDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ app()->getLocale() }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagesDropdown">
                        @foreach (config('app.locales') as $localeKey => $locale)
                            @if ($localeKey != app()->getLocale())
                                <a class="dropdown-item" href="{{ route('locale.switch', $localeKey) }}">
                                    {{ $locale }}
                                </a>
                            @endif
                        @endforeach

                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>


    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
