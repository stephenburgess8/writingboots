<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Writing Boots') }}</title>
</head>
<body>
    <div id="app">
        <header id="boots-header-primary">
            <nav class="boots-nav" id="boots-nav-primary">
                <div class="boots-header-container">
                    <div class="boots-logo-container">
                        <h3 class="boots-header-logotype">
                            <a class="boots-logo-link" href="{{ url('/') }}">
                            {{ config('app.name', 'Writing Boots') }}
                            </a>
                        </h3>
                    </div>
{{--                     <ul class="boots-nav-list">
                        @guest
                        <li class="boots-nav-list-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @else
                            <li class="boots-nav-list-item">
                                <a class="boots-nav-link" href="{{ route('logout') }}">{{ Auth::user()->name }}</a>
                            </li>

                            <li class="boots-nav-list-item">
                                <a class="boots-nav-link" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                            </li>
                        @endguest
                    </ul> --}}
                </div>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
