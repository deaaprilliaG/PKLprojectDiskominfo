@extends('adminlte::page')

@section('title', 'Monitoring Index')

@section('content_header')
    <h1>Monitoring List</h1>
@stop

@section('content')
    <a href="{{ route('monitorings.create') }}" class="btn btn-success mb-3">Create New Monitoring</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Nama Instansi</th>
                <th>Nama PIC</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($monitorings as $monitoring)
                <tr>
                    <td>{{ $monitoring->nama_instansi }}</td>
                    <td>{{ $monitoring->nama_pic }}</td>
                    <td>{{ $monitoring->tanggal }}</td>
                    <td>
                        <a href="{{ route('monitorings.show', $monitoring->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('monitorings.edit', $monitoring->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('monitorings.pdf', $monitoring->id) }}" class="btn btn-danger btn-sm">Cetak</a>
                        <form action="{{ route('monitorings.destroy', $monitoring->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
