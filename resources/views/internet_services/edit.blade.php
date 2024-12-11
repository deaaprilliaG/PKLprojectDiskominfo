@extends('adminlte::page')

@section('title', 'Edit Internet Service')

@section('content_header')
    <h1>Edit Internet Service</h1>
@stop

@section('content')
    <form action="{{ route('internet_services.update', $internet_service->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{ $internet_service->nama_instansi }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_pic">Nama PIC</label>
                    <input type="text" class="form-control" id="nama_pic" name="nama_pic" value="{{ $internet_service->nama_pic }}" required>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $internet_service->jabatan }}" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $internet_service->tanggal }}" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $internet_service->no_hp }}" required>
                </div>

                <div class="form-group">
                    <label for="ttd">Tanda Tangan</label>
                    <input type="text" class="form-control" id="ttd" name="ttd" value="{{ $internet_service->ttd }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="{{ $internet_service->nama_kegiatan }}" required>
                </div>

                <div class="form-group">
                    <label for="bandwidth">Bandwidth</label>
                    <input type="text" class="form-control" id="bandwidth" name="bandwidth" value="{{ $internet_service->bandwidth }}" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_tgl">Jadwal Tanggal</label>
                    <input type="date" class="form-control" id="jadwal_tgl" name="jadwal_tgl" value="{{ $internet_service->jadwal_tgl }}" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_jam_mulai">Jadwal Jam Mulai</label>
                    <input type="time" class="form-control" id="jadwal_jam_mulai" name="jadwal_jam_mulai" value="{{ $internet_service->jadwal_jam_mulai }}" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_jam_selesai">Jadwal Jam Selesai</label>
                    <input type="time" class="form-control" id="jadwal_jam_selesai" name="jadwal_jam_selesai" value="{{ $internet_service->jadwal_jam_selesai }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="petugas_1_nama">Nama Petugas 1</label>
                    <input type="text" class="form-control" id="petugas_1_nama" name="petugas_1_nama" value="{{ $internet_service->petugas_1_nama }}" required>
                </div>

                <div class="form-group">
                    <label for="petugas_1_ttd">Tanda Tangan Petugas 1</label>
                    <input type="text" class="form-control" id="petugas_1_ttd" name="petugas_1_ttd" value="{{ $internet_service->petugas_1_ttd }}" required>
                </div>

                <div class="form-group">
                    <label for="petugas_2_nama">Nama Petugas 2</label>
                    <input type="text" class="form-control" id="petugas_2_nama" name="petugas_2_nama" value="{{ $internet_service->petugas_2_nama }}" required>
                </div>

                <div class="form-group">
                    <label for="petugas_2_ttd">Tanda Tangan Petugas 2</label>
                    <input type="text" class="form-control" id="petugas_2_ttd" name="petugas_2_ttd" value="{{ $internet_service->petugas_2_ttd }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@stop
