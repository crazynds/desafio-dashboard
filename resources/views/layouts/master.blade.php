<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>
    @yield('head')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini text-sm" style="background: rgb(187,187,221);
background: linear-gradient(0deg, rgba(187,187,221,1) 0%, rgba(238,238,255,1) 100%);">

    <div class="wrapper">
        {{--Navbar--}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                        class="fas fa-th-large"></i></a>
                </li>
            </ul>
        </nav>

        {{-- Vue App --}}
        <div id="app">
            {{-- Sidebar --}}
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                {{-- Logo --}}
                <a href="/" class="brand-link">
                    <img src="/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                        style="opacity: .8;margin-left: 0 !important">
                    <span class="brand-text font-weight-light">Enterprise</span>
                </a>
                {{-- Navigation --}}
                <div class="sidebar">
                    <div class="user-panel mt-1 pb-1 mb-1 d-flex">
                        <div class="info">
                            <span  class="d-block text-white">Luiz henrique</span>
                        </div>
                    </div>
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                            @yield('sidebar-navigation')
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="content-wrapper" style="background: rgba(255, 255, 255, 0);">
                @yield('content')
            </div>

            <aside class="control-sidebar control-sidebar-dark">
                @yield('sidebar-content')
            </aside>
        </div>

        {{-- Footer --}}
        <footer class="main-footer" style="min-height: 48px">
            <div class="float-right d-none d-sm-inline">
                Nextline
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
