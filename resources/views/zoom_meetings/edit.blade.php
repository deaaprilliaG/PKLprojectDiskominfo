@extends('adminlte::page')

@section('title', 'Edit Zoom Meeting')

@section('content_header')
    <h1>Edit Zoom Meeting</h1>
@stop

@section('content')
    <form action="{{ route('zoom_meetings.update', $zoom_meeting->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{ $zoom_meeting->nama_instansi }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_pic">Nama PIC</label>
                    <input type="text" class="form-control" id="nama_pic" name="nama_pic" value="{{ $zoom_meeting->nama_pic }}" required>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $zoom_meeting->jabatan }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_topic_meet">Nama Topic Meet</label>
                    <input type="text" class="form-control" id="nama_topic_meet" name="nama_topic_meet" value="{{ $zoom_meeting->nama_topic_meet }}" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_participant">Jumlah Participant</label>
                    <input type="number" class="form-control" id="jumlah_participant" name="jumlah_participant" value="{{ $zoom_meeting->jumlah_participant }}" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_tgl">Jadwal Tanggal</label>
                    <input type="date" class="form-control" id="jadwal_tgl" name="jadwal_tgl" value="{{ $zoom_meeting->jadwal_tgl }}" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_jam_mulai">Jadwal Jam Mulai</label>
                    <input type="time" class="form-control" id="jadwal_jam_mulai" name="jadwal_jam_mulai" value="{{ $zoom_meeting->jadwal_jam_mulai }}" required>
                </div>

                <div class="form-group">
                    <label for="jadwal_jam_selesai">Jadwal Jam Selesai</label>
                    <input type="time" class="form-control" id="jadwal_jam_selesai" name="jadwal_jam_selesai" value="{{ $zoom_meeting->jadwal_jam_selesai }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_petugas_1">Nama Petugas 1</label>
                    <input type="text" class="form-control" id="nama_petugas_1" name="nama_petugas_1" value="{{ $zoom_meeting->nama_petugas_1 }}" required>
                </div>

                <div class="form-group">
                    <label for="ttd_petugas_1">Tanda Tangan Petugas 1</label>
                    <input type="text" class="form-control" id="ttd_petugas_1" name="ttd_petugas_1" value="{{ $zoom_meeting->ttd_petugas_1 }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_petugas_2">Nama Petugas 2</label>
                    <input type="text" class="form-control" id="nama_petugas_2" name="nama_petugas_2" value="{{ $zoom_meeting->nama_petugas_2 }}" required>
                </div>

                <div class="form-group">
                    <label for="ttd_petugas_2">Tanda Tangan Petugas 2</label>
                    <input type="text" class="form-control" id="ttd_petugas_2" name="ttd_petugas_2" value="{{ $zoom_meeting->ttd_petugas_2 }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@stop
