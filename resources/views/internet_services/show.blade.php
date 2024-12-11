@extends('adminlte::page')

@section('title', 'Detail Internet Service')

@section('content_header')
    <h1>Detail Internet Service</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Instansi:</label>
                <p>{{ $internet_service->nama_instansi }}</p>
            </div>

            <div class="form-group">
                <label>Nama PIC:</label>
                <p>{{ $internet_service->nama_pic }}</p>
            </div>

            <div class="form-group">
                <label>Jabatan:</label>
                <p>{{ $internet_service->jabatan }}</p>
            </div>

            <div class="form-group">
                <label>Tanggal:</label>
                <p>{{ $internet_service->tanggal }}</p>
            </div>

            <div class="form-group">
                <label>No HP:</label>
                <p>{{ $internet_service->no_hp }}</p>
            </div>

            <div class="form-group">
                <label>Tanda Tangan:</label>
                <p>{{ $internet_service->ttd }}</p>
            </div>

            <div class="form-group">
                <label>Nama Kegiatan:</label>
                <p>{{ $internet_service->nama_kegiatan }}</p>
            </div>
            <div class="form-group">
                <label>Nama Kegiatan:</label>
                <p>{{ $internet_service->nama_kegiatan }}</p>
            </div>

            <div class="form-group">
                <label>Bandwidth:</label>
                <p>{{ $internet_service->bandwidth }}</p>
            </div>

            <div class="form-group">
                <label>Jadwal Tanggal:</label>
                <p>{{ $internet_service->jadwal_tgl }}</p>
            </div>

            <div class="form-group">
                <label>Jadwal Jam Mulai:</label>
                <p>{{ $internet_service->jadwal_jam_mulai }}</p>
            </div>

            <div class="form-group">
                <label>Jadwal Jam Selesai:</label>
                <p>{{ $internet_service->jadwal_jam_selesai }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Petugas 1:</label>
                <p>{{ $internet_service->petugas_1_nama }}</p>
            </div>

            <div class="form-group">
                <label>Tanda Tangan Petugas 1:</label>
                <p>{{ $internet_service->petugas_1_ttd }}</p>
            </div>

            <div class="form-group">
                <label>Nama Petugas 2:</label>
                <p>{{ $internet_service->petugas_2_nama }}</p>
            </div>

            <div class="form-group">
                <label>Tanda Tangan Petugas 2:</label>
                <p>{{ $internet_service->petugas_2_ttd }}</p>
            </div>
        </div>
    </div>

    <a href="{{ route('internet_services.index') }}" class="btn btn-primary">Back to List</a>
@stop
