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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- ナビゲーションバー -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light shadow">
            <div class="container">
                <a class="navbar-brand" href="/">Larashop</a>
                <div class="navbar-nav mr-auto"></div>
                <div class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">新規登録</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">ログイン</a></li>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
