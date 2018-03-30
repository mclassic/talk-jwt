<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JWT Talk</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
<div class="flex-center position-ref full-height landing">
    @if (Route::has('login'))
        <form method="POST" id="form-logout" action="/logout">
            {{ csrf_field() }}
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                    <a href="#" onclick="$('#form-logout').submit()">Log Out</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </form>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Test
        </div>

        @yield('content')

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>
