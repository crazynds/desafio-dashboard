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
    <link rel="shortcut icon" href="/img/icone.ico" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background: rgb(187,187,221);
background: linear-gradient(0deg, rgba(187,187,221,1) 0%, rgba(238,238,255,1) 100%);">
    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>

        <div style="position: absolute; bottom: 10px;right: 25px;color: #999999">
            Versão {{Version::format('full')}}
        </div>
    </div>
</body>
</html>
