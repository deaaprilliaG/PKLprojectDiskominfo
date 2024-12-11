@extends('adminlte::page')

@section('title', 'Edit Perbaikan')

@section('content_header')
    <h1>Edit Perbaikan</h1>
@stop

@section('content')
    <form action="{{ route('perbaikans.update', $perbaikan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{ $perbaikan->nama_instansi }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat_pic">Alamat PIC</label>
                    <input type="text" class="form-control" id="alamat_pic" name="alamat_pic" value="{{ $perbaikan->alamat_pic }}" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $perbaikan->tanggal }}" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $perbaikan->no_hp }}" required>
                </div>

                <div class="form-group">
                    <label for="tipe">Tipe</label>
                    <input type="text" class="form-control" id="tipe" name="tipe" value="{{ $perbaikan->tipe }}" required>
                </div>

                <div class="form-group">
                    <label for="id_pelapor">ID Pelapor</label>
                    <input type="text" class="form-control" id="id_pelapor" name="id_pelapor" value="{{ $perbaikan->id_pelapor }}" required>
                </div>

                <div class="form-group">
                    <label for="sumber_internet">Sumber Internet</label>
                    <select class="form-control" id="sumber_internet" name="sumber_internet">
                        <option value="1" {{ $perbaikan->sumber_internet ? 'selected' : '' }}>Ada</option>
                        <option value="0" {{ !$perbaikan->sumber_internet ? 'selected' : '' }}>Tidak Ada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="switch_internal">Switch Internal</label>
                    <select class="form-control" id="switch_internal" name="switch_internal">
                        <option value="1" {{ $perbaikan->switch_internal ? 'selected' : '' }}>Ada</option>
                        <option value="0" {{ !$perbaikan->switch_internal ? 'selected' : '' }}>Tidak Ada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="perangkat_alat">Perangkat Alat</label>
                    <input type="text" class="form-control" id="perangkat_alat" name="perangkat_alat" value="{{ $perbaikan->perangkat_alat }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="keterangan_kondisi">Keterangan Kondisi Jaringan Internal</label>
                    <textarea class="form-control" id="keterangan_kondisi" name="keterangan_kondisi" required>{{ $perbaikan->keterangan_kondisi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="keterangan_perbaikan">Keterangan Perbaikan</label>
                    <textarea class="form-control" id="keterangan_perbaikan" name="keterangan_perbaikan" required>{{ $perbaikan->keterangan_perbaikan }}</textarea>
                </div>

                <div class="form-group">
                    <label for="petugas_nama">Nama Petugas</label>
                    <input type="text" class="form-control" id="petugas_nama" name="petugas_nama" value="{{ $perbaikan->petugas_nama }}" required>
                </div>

                <div class="form-group">
                    <label for="petugas_tanda_tangan">Tanda Tangan Petugas</label>
                    <input type="text" class="form-control" id="petugas_tanda_tangan" name="petugas_tanda_tangan" value="{{ $perbaikan->petugas_tanda_tangan }}" required>
                </div>

                <div class="form-group">
                    <label for="download_speed">Download Speed (Mbps)</label>
                    <input type="number" class="form-control" id="download_speed" name="download_speed" value="{{ $perbaikan->download_speed }}" required>
                </div>

                <div class="form-group">
                    <label for="upload_speed">Upload Speed (Mbps)</label>
                    <input type="number" class="form-control" id="upload_speed" name="upload_speed" value="{{ $perbaikan->upload_speed }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@stop
