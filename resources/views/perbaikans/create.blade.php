@extends('adminlte::page')

@section('title', 'Create New Perbaikan')

@section('content_header')
    <h1>Create New Perbaikan</h1>
@stop

@section('content')
    <form action="{{ route('perbaikans.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" required>
                </div>

                <div class="form-group">
                    <label for="alamat_pic">Alamat PIC</label>
                    <input type="text" class="form-control" id="alamat_pic" name="alamat_pic" required>
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
                    <label for="tipe">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name="tipe" required>
                </div>

                <div class="form-group">
                    <label for="id_pelapor">ID Pelapor</label>
                    <input type="text" class="form-control" id="id_pelapor" name="id_pelapor" required>
                </div>

                <div class="form-group">
                    <label for="sumber_internet">Sumber Internet</label>
                    <select class="form-control" id="sumber_internet" name="sumber_internet">
                        <option value="1">Ada</option>
                        <option value="0">Tidak Ada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="switch_internal">Switch Internal</label>
                    <select class="form-control" id="switch_internal" name="switch_internal">
                        <option value="1">Ada</option>
                        <option value="0">Tidak Ada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="perangkat_alat">Perangkat Alat</label>
                    <input type="text" class="form-control" id="perangkat_alat" name="perangkat_alat" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="keterangan_kondisi">Keterangan Kondisi Jaringan Internal</label>
                    <textarea class="form-control" id="keterangan_kondisi" name="keterangan_kondisi" required></textarea>
                </div>

                <div class="form-group">
                    <label for="keterangan_perbaikan">Keterangan Perbaikan</label>
                    <textarea class="form-control" id="keterangan_perbaikan" name="keterangan_perbaikan" required></textarea>
                </div>

                <div class="form-group">
                    <label for="petugas_nama">Nama Petugas</label>
                    <input type="text" class="form-control" id="petugas_nama" name="petugas_nama" required>
                </div>

                <div class="form-group">
                    <label for="petugas_tanda_tangan">Tanda Tangan Petugas</label>
                    <input type="text" class="form-control" id="petugas_tanda_tangan" name="petugas_tanda_tangan" required>
                </div>

                <div class="form-group">
                    <label for="download_speed">Download Speed (Mbps)</label>
                    <input type="number" class="form-control" id="download_speed" name="download_speed" required>
                </div>

                <div class="form-group">
                    <label for="upload_speed">Upload Speed (Mbps)</label>
                    <input type="number" class="form-control" id="upload_speed" name="upload_speed" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@stop
