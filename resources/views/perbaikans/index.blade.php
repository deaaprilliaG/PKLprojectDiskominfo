@extends('adminlte::page')

@section('title', 'Perbaikan Index')

@section('content_header')
    <h1>Perbaikan List</h1>
@stop

@section('content')
    <a href="{{ route('perbaikans.create') }}" class="btn btn-success mb-3">Create New Perbaikan</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>Nama Instansi</th>
                <th>Alamat PIC</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perbaikans as $perbaikan)
                <tr>
                    <td>{{ $perbaikan->nama_instansi }}</td>
                    <td>{{ $perbaikan->alamat_pic }}</td>
                    <td>{{ $perbaikan->tanggal }}</td>
                    <td>
                        <a href="{{ route('perbaikans.show', $perbaikan->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('perbaikans.edit', $perbaikan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('perbaikans.pdf', $perbaikan->id) }}" class="btn btn-danger btn-sm">Cetak</a>
                        <form action="{{ route('perbaikans.destroy', $perbaikan->id) }}" method="POST" style="display:inline;">
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
