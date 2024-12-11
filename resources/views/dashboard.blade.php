@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $internet_services_count }}</h3>
                <p>Internet Services</p>
            </div>
            <div class="icon">
                <i class="fas fa-globe"></i>
            </div>
            <a href="{{ route('internet_services.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $zoom_meetings_count }}</h3>
                <p>Zoom Meetings</p>
            </div>
            <div class="icon">
                <i class="fas fa-video"></i>
            </div>
            <a href="{{ route('zoom_meetings.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $monitorings_count }}</h3>
                <p>Monitorings</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <a href="{{ route('monitorings.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $perbaikans_count }}</h3>
                <p>Perbaikans</p>
            </div>
            <div class="icon">
                <i class="fas fa-tools"></i>
            </div>
            <a href="{{ route('perbaikans.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title">Recent Internet Services</h3>
            </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap table-hover table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nama Instansi</th>
                            <th>Nama PIC</th>
                            <th>Jabatan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recent_internet_services as $service)
                            <tr>
                                <td>{{ $service->nama_instansi }}</td>
                                <td>{{ $service->nama_pic }}</td>
                                <td>{{ $service->jabatan }}</td>
                                <td>{{ $service->tanggal }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-success">
                <h3 class="card-title">Recent Zoom Meetings</h3>
            </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap table-hover table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nama Instansi</th>
                            <th>Nama PIC</th>
                            <th>Jabatan</th>
                            <th>Nama Topic Meet</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recent_zoom_meetings as $meeting)
                            <tr>
                                <td>{{ $meeting->nama_instansi }}</td>
                                <td>{{ $meeting->nama_pic }}</td>
                                <td>{{ $meeting->jabatan }}</td>
                                <td>{{ $meeting->nama_topic_meet }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-warning">
                <h3 class="card-title">Recent Monitorings</h3>
            </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap table-hover table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nama Instansi</th>
                            <th>Nama PIC</th>
                            <th>Jabatan</th>
                            <th>Titik Lokasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recent_monitorings as $monitoring)
                            <tr>
                                <td>{{ $monitoring->nama_instansi }}</td>
                                <td>{{ $monitoring->nama_pic }}</td>
                                <td>{{ $monitoring->jabatan }}</td>
                                <td>{{ $monitoring->titik_lokasi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-danger">
                <h3 class="card-title">Recent Perbaikans</h3>
            </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap table-hover table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nama Instansi</th>
                            <th>Nama PIC</th>
                            <th>Jabatan</th>
                            <th>Nama Kegiatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recent_perbaikans as $perbaikan)
                            <tr>
                                <td>{{ $perbaikan->nama_instansi }}</td>
                                <td>{{ $perbaikan->nama_pic }}</td>
                                <td>{{ $perbaikan->jabatan }}</td>
                                <td>{{ $perbaikan->nama_kegiatan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>&copy; 2024 <a href="https://example.com">Your Company</a>.</strong> All rights reserved.
    </footer>
@stop
