<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Berita Acara Layanan Internet</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            margin: 20px;
        }
        table {
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black; 
            padding: 8px; 
            text-align: left;
        }
        .header {
            text-align: center; 
            font-weight: bold; 
            font-size: 24px; 
            margin-bottom: 20px;
        }
        .section-title {
            font-weight: bold; 
            background-color: #f2f2f2;
        }
        .no-border {
            border: none; 
            padding: 0;
        }
        .footer {
            margin-top: 30px; 
            font-size: 14px; 
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="header">FORM BERITA ACARA LAYANAN INTERNET</h1>
    <table class="no-border">
        <tr>
            <td class="no-border section-title">NAMA INSTANSI</td>
            <td class="no-border">{{ $internet_service->nama_instansi }}</td>
            <td class="no-border section-title">TANGGAL</td>
            <td class="no-border">{{ $internet_service->jadwal_tgl }}</td>
        </tr>
    </table>
    <table>
        <tr class="section-title">
            <td colspan="4">DETAIL LAYANAN INTERNET</td>
        </tr>
        <tr>
            <td>1. NAMA PIC</td>
            <td>{{ $internet_service->nama_pic }}</td>
            <td>NO HP</td>
            <td>{{ $internet_service->no_hp }}</td>
        </tr>
        <tr>
            <td>2. JABATAN</td>
            <td>{{ $internet_service->jabatan }}</td>
            <td>TTD</td>
            <td>{{ $internet_service->ttd }}</td>
        </tr>
        <tr>
            <td>3. NAMA KEGIATAN</td>
            <td colspan="3">{{ $internet_service->nama_kegiatan }}</td>
        </tr>
        <tr>
            <td>4. BANDWIDTH</td>
            <td>{{ $internet_service->bandwidth }}</td>
            <td colspan="2"></td>
        </tr>
        <tr class="section-title">
            <td colspan="4">JADWAL</td>
        </tr>
        <tr>
            <td>TGL</td>
            <td>{{ $internet_service->jadwal_tgl }}</td>
            <td>JAM MULAI</td>
            <td>{{ $internet_service->jadwal_jam_mulai }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>JAM SELESAI</td>
            <td>{{ $internet_service->jadwal_jam_selesai }}</td>
        </tr>
        <tr class="section-title">
            <td colspan="4">PETUGAS</td>
        </tr>
        <tr>
            <td>1. NAMA</td>
            <td>{{ $internet_service->nama_petugas_1 }}</td>
            <td>TANDA TANGAN</td>
            <td>{{ $internet_service->ttd_petugas_1 }}</td>
        </tr>
        <tr>
            <td>2. NAMA</td>
            <td>{{ $internet_service->nama_petugas_2 }}</td>
            <td>TANDA TANGAN</td>
            <td>{{ $internet_service->ttd_petugas_2 }}</td>
        </tr>
    </table>
</body>
</html>
