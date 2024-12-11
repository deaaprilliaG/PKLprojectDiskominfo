@extends('adminlte::page')

@section('title', 'Edit Monitoring')

@section('content_header')
    <h1>Edit Monitoring</h1>
@stop

@section('content')
    <form action="{{ route('monitorings.update', $monitoring->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_instansi">Nama Instansi</label>
                    <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{ $monitoring->nama_instansi }}" required>
                </div>

                <div class="form-group">
                    <label for="nama_pic">Nama PIC</label>
                    <input type="text" class="form-control" id="nama_pic" name="nama_pic" value="{{ $monitoring->nama_pic }}" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $monitoring->tanggal }}" required>
                </div>

                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $monitoring->no_hp }}" required>
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $monitoring->jabatan }}" required>
                </div>

                <div class="form-group">
                    <label for="titik_lokasi">Titik Lokasi</label>
                    <input type="text" class="form-control" id="titik_lokasi" name="titik_lokasi" value="{{ $monitoring->titik_lokasi }}" required>
                </div>

                <div class="form-group">
                    <label for="isp_backup">ISP Backup</label>
                    <select class="form-control" id="isp_backup" name="isp_backup">
                        <option value="1" {{ $monitoring->isp_backup ? 'selected' : '' }}>Ada</option>
                        <option value="0" {{ !$monitoring->isp_backup ? 'selected' : '' }}>Tidak Ada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="router_internal">Router Internal</label>
                    <select class="form-control" id="router_internal" name="router_internal">
                        <option value="1" {{ $monitoring->router_internal ? 'selected' : '' }}>Ada</option>
                        <option value="0" {{ !$monitoring->router_internal ? 'selected' : '' }}>Tidak Ada</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="switch_internal">Switch Internal</label>
                    <select class="form-control" id="switch_internal" name="switch_internal">
                        <option value="1" {{ $monitoring->switch_internal ? 'selected' : '' }}>Ada</option>
                        <option value="0" {{ !$monitoring->switch_internal ? 'selected' : '' }}>Tidak Ada</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="waktu_uji_coba">Waktu Uji Coba</label>
                    <input type="time" class="form-control" id="waktu_uji_coba" name="waktu_uji_coba" value="{{ $monitoring->waktu_uji_coba }}" required>
                </div>

                <div class="form-group">
                    <label for="jam_internetan">Jam Internetan</label>
                    <input type="time" class="form-control" id="jam_internetan" name="jam_internetan" value="{{ $monitoring->jam_internetan }}" required>
                </div>

                <div class="form-group">
                    <label for="test_speed">Test Speed</label>
                    <input type="text" class="form-control" id="test_speed" name="test_speed" value="{{ $monitoring->test_speed }}" required>
                </div>

                <div class="form-group">
                    <label for="test_switch_internal">Test Switch Internal</label>
                    <input type="text" class="form-control" id="test_switch_internal" name="test_switch_internal" value="{{ $monitoring->test_switch_internal }}" required>
                </div>

                <div class="form-group">
                    <label for="download_speed">Download Speed (Mbps)</label>
                    <input type="number" class="form-control" id="download_speed" name="download_speed" value="{{ $monitoring->download_speed }}" required>
                </div>

                <div class="form-group">
                    <label for="upload_speed">Upload Speed (Mbps)</label>
                    <input type="number" class="form-control" id="upload_speed" name="upload_speed" value="{{ $monitoring->upload_speed }}" required>
                </div>

                <div class="form-group">
                    <label for="kabel_lan">Kabel LAN</label>
                    <input type="text" class="form-control" id="kabel_lan" name="kabel_lan" value="{{ $monitoring->kabel_lan }}" required>
                </div>

                <div class="form-group">
                    <label for="aksespoint">Aksespoint</label>
                    <input type="text" class="form-control" id="aksespoint" name="aksespoint" value="{{ $monitoring->aksespoint }}" required>
                </div>

                <div class="form-group">
                    <label for="switch_pembagi">Switch Pembagi</label>
                    <input type="text" class="form-control" id="switch_pembagi" name="switch_pembagi" value="{{ $monitoring->switch_pembagi }}" required>
                </div>

                <div class="form-group">
                    <label for="keterangan_kondisi">Keterangan Kondisi Jaringan Internal</label>
                    <textarea class="form-control" id="keterangan_kondisi" name="keterangan_kondisi" required>{{ $monitoring->keterangan_kondisi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="topologi">Topologi</label>
                    <textarea class="form-control" id="topologi" name="topologi" required>{{ $monitoring->topologi }}</textarea>
                </div>

                <div class="form-group">
                    <label for="monitor_1_name">Nama Monitor 1</label>
                    <input type="text" class="form-control" id="monitor_1_name" name="monitor_1_name" value="{{ $monitoring->monitor_1_name }}" required>
                </div>

                <div class="form-group">
                    <label for="monitor_2_name">Nama Monitor 2</label>
                    <input type="text" class="form-control" id="monitor_2_name" name="monitor_2_name" value="{{ $monitoring->monitor_2_name }}" required>
                </div>

                <div class="form-group">
                    <label for="monitor_1_signature">Tanda Tangan Monitor 1</label>
                    <input type="text" class="form-control" id="monitor_1_signature" name="monitor_1_signature" value="{{ $monitoring->monitor_1_signature }}" required>
                </div>

                <div class="form-group">
                    <label for="monitor_2_signature">Tanda Tangan Monitor 2</label>
                    <input type="text" class="form-control" id="monitor_2_signature" name="monitor_2_signature" value="{{ $monitoring->monitor_2_signature }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@stop
