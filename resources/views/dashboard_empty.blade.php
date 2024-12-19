@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Welcome, {{ $user->name }}</h3>
            </div>
            <div class="card-body">
                <p>It looks like you are new here. Start adding your data to see it reflected in the dashboard.</p>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>&copy; 2024 <a href="https://example.com">Your Company</a>.</strong> All rights reserved.
    </footer>
@stop
