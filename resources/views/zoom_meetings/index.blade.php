@extends('adminlte::page')

@section('title', 'Zoom Meeting Index')

@section('content_header')
    <h1>Zoom Meeting List</h1>
@stop

@section('content')
    <a href="{{ route('zoom_meetings.create') }}" class="btn btn-success mb-3">Create New Zoom Meeting</a>

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
                <th>Nama Topic Meet</th>
                <th>Jumlah Participant</th>
                <th>Jadwal Tanggal</th>
                <th>Jadwal Jam Mulai</th>
                <th>Jadwal Jam Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zoom_meetings as $zoom_meeting)
                <tr>
                    <td>{{ $zoom_meeting->nama_instansi }}</td>
                    <td>{{ $zoom_meeting->nama_pic }}</td>
                    <td>{{ $zoom_meeting->jabatan }}</td>
                    <td>{{ $zoom_meeting->nama_topic_meet }}</td>
                    <td>{{ $zoom_meeting->jumlah_participant }}</td>
                    <td>{{ $zoom_meeting->jadwal_tgl }}</td>
                    <td>{{ $zoom_meeting->jadwal_jam_mulai }}</td>
                    <td>{{ $zoom_meeting->jadwal_jam_selesai }}</td>
                    <td>
                        <a href="{{ route('zoom_meetings.show', $zoom_meeting->id) }}" class="btn btn-primary btn-sm">View</a>
                        <a href="{{ route('zoom_meetings.edit', $zoom_meeting->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('zoom_meetings.pdf', $zoom_meeting->id) }}" class="btn btn-danger btn-sm">Cetak</a>
                        <form action="{{ route('zoom_meetings.destroy', $zoom_meeting->id) }}" method="POST" style="display:inline;">
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
