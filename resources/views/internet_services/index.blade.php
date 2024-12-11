@extends('adminlte::page')

@section('title', 'Internet Service Index')

@section('content_header')
    <h1>Internet Service List</h1>
@stop

@section('content')
    <a href="{{ route('internet_services.create') }}" class="btn btn-success mb-3">Create New Internet Service</a>

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
                <th>Jabatan</th>
                <th>Tanggal</th>
                <th>Nama Kegiatan</th>
                <th>Bandwidth</th>
                <th>Jadwal Tanggal</th>
                <th>Jadwal Jam Mulai</th>
                <th>Jadwal Jam Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($internet_services as $internet_service)
                <tr>
                    <td>{{ $internet_service->nama_instansi }}</td>
                    <td>{{ $internet_service->nama_pic }}</td>
                    <td>{{ $internet_service->jabatan }}</td>
                    <td>{{ $internet_service->tanggal }}</td>
                    <td>{{ $internet_service->nama_kegiatan }}</td>
                    <td>{{ $internet_service->bandwidth }}</td>
                    <td>{{ $internet_service->jadwal_tgl }}</td>
                    <td>{{ $internet_service->jadwal_jam_mulai }}</td>
                    <td>{{ $internet_service->jadwal_jam_selesai }}</td>
                    <td>
                        <a href="{{ route('internet_services.show', $internet_service->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('internet_services.edit', $internet_service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('internet_services.pdf', $internet_service->id) }}" class="btn btn-danger btn-sm">Cetak</a>
                        <form action="{{ route('internet_services.destroy', $internet_service->id) }}" method="POST" style="display:inline;">
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
