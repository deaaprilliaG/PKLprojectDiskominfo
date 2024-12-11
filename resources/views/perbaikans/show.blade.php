@extends('adminlte::page')

@section('title', 'Detail Perbaikan')

@section('content_header')
    <h1>Detail Perbaikan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Instansi:</label>
                <p>{{ $perbaikan->nama_instansi }}</p>
            </div>

            <div class="form-group">
                <label>Alamat PIC:</label>
                <p>{{ $perbaikan->alamat_pic }}</p>
            </div>

            <div class="form-group">
                <label>Tanggal:</label>
                <p>{{ $perbaikan->tanggal }}</p>
            </div>

            <div class="form-group">
                <label>No HP:</label>
                <p>{{ $perbaikan->no_hp }}</p>
            </div>

            <div class="form-group">
                <label>Tipe:</label>
                <p>{{ $perbaikan->tipe }}</p>
            </div>

            <div class="form-group">
                <label>ID Pelapor:</label>
                <p>{{ $perbaikan->id_pelapor }}</p>
            </div>

            <div class="form-group">
                <label>Sumber Internet:</label>
                <p>{{ $perbaikan->sumber_internet ? 'Ada' : 'Tidak Ada' }}</p>
            </div>

            <div class="form-group">
                <label>Switch Internal:</label>
                <p>{{ $perbaikan->switch_internal ? 'Ada' : 'Tidak Ada' }}</p>
            </div>

            <div class="form-group">
                <label>Perangkat Alat:</label>
                <p>{{ $perbaikan->perangkat_alat }}</p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Keterangan Kondisi Jaringan Internal:</label>
                <p>{{ $perbaikan->keterangan_kondisi }}</p>
            </div>

            <div class="form-group">
                <label>Keterangan Perbaikan:</label>
                <p>{{ $perbaikan->keterangan_perbaikan }}</p>
            </div>

            <div class="form-group">
                <label>Nama Petugas:</label>
                <p>{{ $perbaikan->petugas_nama }}</p>
            </div>

            <div class="form-group">
                <label>Tanda Tangan Petugas:</label>
                <p>{{ $perbaikan->petugas_tanda_tangan }}</p>
            </div>

            <div class="form-group">
                <label>Download Speed (Mbps):</label>
                <p>{{ $perbaikan->download_speed }}</p>
            </div>

            <div class="form-group">
                <label>Upload Speed (Mbps):</label>
                <p>{{ $perbaikan->upload_speed }}</p>
            </div>
        </div>
    </div>

    <a href="{{ route('perbaikans.index') }}" class="btn btn-primary">Back to List</a>
@stop
