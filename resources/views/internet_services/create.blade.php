@extends('adminlte::page')

@section('title', 'Create New Internet Service')

@section('content_header')
    <h1>Create New Internet Service</h1>
@stop

@section('content')
    <form action="{{ route('internet_services.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" required>
                </div>

                <div class="form-group">
                    <label for="nama_pic">Nama PIC</label>
                    <input type="text" class="form-control" id="nama_pic" name="nama_pic" required>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>

                <div class="form-group">
                    <label for="nama_kegiatan">Nama Kegiatan</label>
                    <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" required>
                </div>
                <div class="form-group">
                    <label for="bandwidth">Bandwidth</label>
                    <input type="text" class="form-control" id="bandwidth" name="bandwidth" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_tgl">Jadwal Tanggal</label>
                    <input type="date" class="form-control" id="jadwal_tgl" name="jadwal_tgl" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_jam_mulai">Jadwal Jam Mulai</label>
                    <input type="time" class="form-control" id="jadwal_jam_mulai" name="jadwal_jam_mulai" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_jam_selesai">Jadwal Jam Selesai</label>
                    <input type="time" class="form-control" id="jadwal_jam_selesai" name="jadwal_jam_selesai" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="petugas_1_nama">Nama Petugas 1</label>
                    <input type="text" class="form-control" id="petugas_1_nama" name="petugas_1_nama" required>
                </div>

                <div class="form-group">
                    <label for="petugas_1_ttd">Tanda Tangan Petugas 1</label>
                    <input type="text" class="form-control" id="petugas_1_ttd" name="petugas_1_ttd" required>
                </div>

                <div class="form-group">
                    <label for="petugas_2_nama">Nama Petugas 2</label>
                    <input type="text" class="form-control" id="petugas_2_nama" name="petugas_2_nama" required>
                </div>

                <div class="form-group">
                    <label for="petugas_2_ttd">Tanda Tangan Petugas 2</label>
                    <input type="text" class="form-control" id="petugas_2_ttd" name="petugas_2_ttd" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@stop
