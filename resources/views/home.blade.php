@extends('layouts.master')

@section('title','teste')

@section('head')
<link rel="icon" type="image/png" href="/img/favicon.ico"/>
@endsection

@section('sidebar-navigation')
    @include('layouts.includes.nav-item',[
        'name' => 'Home',
        'icon' => 'fa-tachometer-alt text-green',
        'to' => '/home'
    ])
    @include('layouts.includes.nav-item',[
        'name' => 'Dashboard',
        'icon' => 'fa-users text-blue',
        'to' => '/dashboard'
    ])
@endsection

@section('content')
<router-view></router-view>
<vue-progress-bar></vue-progress-bar>
@endsection

@section('sidebar-content')
    <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
    </div>
@endsection
