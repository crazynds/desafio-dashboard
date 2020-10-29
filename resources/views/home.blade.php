@extends('layouts.master')

@section('title','teste')

@section('sidebar-navigation')
    @include('layouts.includes.nav-item',[
        'name' => 'Dashboard',
        'icon' => 'fa-tachometer-alt text-green',
        'to' => '/foo'
    ])
    @include('layouts.includes.nav-item',[
        'name' => 'Usuario',
        'icon' => 'fa-users text-blue',
        'to' => '/goo'
    ])
@endsection

@section('content-header')
<h2>Titulo</h2>
@endsection

@section('content')
<router-view></router-view>
@endsection

@section('sidebar-content')
    <div class="p-3">
    <h5>Title</h5>
    <p>Sidebar content</p>
    </div>
@endsection
