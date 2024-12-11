@extends('adminlte::page')

@section('title', 'Detail Zoom Meeting')

@section('content_header')
    <h1>Detail Zoom Meeting</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Instansi:</label>
                <p>{{ $zoom_meeting->nama_instansi }}</p>
            </div>

            <div class="form-group">
                <label>Nama PIC:</label>
                <p>{{ $zoom_meeting->nama_pic }}</p>
            </div>

            <div class="form-group">
                <label>Jabatan:</label>
                <p>{{ $zoom_meeting->jabatan }}</p>
            </div>

            <div class="form-group">
                <label>Nama Topic Meet:</label>
                <p>{{ $zoom_meeting->nama_topic_meet }}</p>
            </div>

            <div class="form-group">
                <label>Jumlah Participant:</label>
                <p>{{ $zoom_meeting->jumlah_participant }}</p>
            </div>

            <div class="form-group">
                <label>Jadwal Tanggal:</label>
                <p>{{ $zoom_meeting->jadwal_tgl }}</p>
            </div>

            <div class="form-group">
                <label>Jadwal Jam Mulai:</label>
                <p>{{ $zoom_meeting->jadwal_jam_mulai }}</p>
            </div>

            <div class="form-group">
                <label>Jadwal Jam Selesai:</label>
                <p>{{ $zoom_meeting->jadwal_jam_selesai }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Petugas 1:</label>
                <p>{{ $zoom_meeting->nama_petugas_1 }}</p>
            </div>

            <div class="form-group">
                <label>Tanda Tangan Petugas 1:</label>
                <p>{{ $zoom_meeting->ttd_petugas_1 }}</p>
            </div>

            <div class="form-group">
                <label>Nama Petugas 2:</label>
                <p>{{ $zoom_meeting->nama_petugas_2 }}</p>
            </div>

            <div class="form-group">
                <label>Tanda Tangan Petugas 2:</label>
                <p>{{ $zoom_meeting->ttd_petugas_2 }}</p>
            </div>
        </div>
    </div>
    <a href="{{ route('zoom_meetings.index') }}" class="btn btn-primary">Back to List</a>
@stop

