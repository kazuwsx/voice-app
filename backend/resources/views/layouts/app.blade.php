<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                音声投稿サイト
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Top
                </a>
            </div>
            <div class="navbar-end">
                @auth
                <div class="navbar-item">
                    username : {{ Auth::user()->name }}
                </div>
                @endauth
                <div class="navbar-item">
                    <div class="buttons">
                        @guest
                        @if (Route::has('login'))
                        <a class="button is-light" href="{{ route('login') }}">Log in</a>
                        @endif

                        @if (Route::has('register'))
                        <a class="button is-primary" href="{{ route('register') }}">
                            <strong>Sign up</strong>
                        </a>
                        @endif
                        @else

                        <a class="button is-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <strong>Log Out</strong>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                    </li>
                    @endguest
                </div>
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
