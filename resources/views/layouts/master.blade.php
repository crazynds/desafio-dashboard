<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini text-sm">

    <div class="wrapper">
        {{--Navbar--}}
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                        class="fas fa-th-large"></i></a>
                </li>
            </ul>
        </nav>

        {{-- Sidebar --}}
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            {{-- Logo --}}
            <a href="index3.html" class="brand-link">
                <img src="/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Nome</span>
            </a>
            {{-- Navigation --}}
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                        @include('layouts.includes.nav-item',[
                            'name' => 'Dashboard',
                            'icon' => 'fa-tachometer-alt text-green',
                            'to' => '#'
                        ])
                        @include('layouts.includes.nav-item',[
                            'name' => 'Pacientes',
                            'icon' => 'fa-users text-blue',
                            'to' => '#'
                        ])
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper" id="app">
            <div class="content-header">
                @yield('content-header')
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>

        <aside class="control-sidebar control-sidebar-dark">
            <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
            </div>

            @yield('sidebar-content')
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Nextline
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
