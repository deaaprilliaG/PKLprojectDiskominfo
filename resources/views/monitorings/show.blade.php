@extends('adminlte::page')

@section('title', 'Monitoring Details')

@section('content_header')
    <h1>Monitoring Details</h1>
@stop

@section('content')
    <!-- Display monitoring details here -->
    <p>Nama Instansi: {{ $monitoring->nama_instansi }}</p>
    <p>Nama PIC: {{ $monitoring->nama_pic }}</p>
    <p>Tanggal: {{ $monitoring->tanggal }}</p>
    <!-- Add other fields similarly -->
    <a href="{{ route('monitorings.index') }}" class="btn btn-primary">Back to List</a>
@stop
