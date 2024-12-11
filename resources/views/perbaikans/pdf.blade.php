<!DOCTYPE html>
<html>
<head>
    <title>BERITA ACARA PERBAIKAN LAYANAN JARINGAN INTERNET</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000;
        }
        .header, .section {
            margin-bottom: 20px;
        }
        .header h1, .header h2 {
            text-align: center;
        }
        .section h2 {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #000;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .signature {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }
        .signature div {
            text-align: center;
            width: 45%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>BERITA ACARA PERBAIKAN LAYANAN JARINGAN INTERNET</h1>
            <h2>Tanggal: <?php echo date('d F Y'); ?></h2>
        </div>
        
        <div class="section">
            <h2>Informasi Umum</h2>
            <table>
                <tr>
                    <th>Nama Instansi</th>
                    <td>{{ $perbaikan->nama_instansi }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $perbaikan->alamat }}</td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>{{ $perbaikan->tanggal }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{ $perbaikan->no_hp }}</td>
                </tr>
                <tr>
                    <th>Typ</th>
                    <td>{{ $perbaikan->typ }}</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>IP Address</h2>
            <table>
                <tr>
                    <th>IP Address</th>
                    <td>{{ $perbaikan->ip_address }}</td>
                </tr>
                <tr>
                    <th>Ada</th>
                    <td>Ada / Tidak Ada</td>
                </tr>
                <tr>
                    <th>Waktu IP</th>
                    <td>{{ $perbaikan->waktu_ip }}</td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>{{ $perbaikan->code }}</td>
                </tr>
                <tr>
                    <th>Jar</th>
                    <td>{{ $perbaikan->jar }}</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Source Internet</h2>
            <table>
                <tr>
                    <th>Ada</th>
                    <td>Ada / Tidak Ada</td>
                </tr>
                <tr>
                    <th>Test Speed</th>
                    <td>Download: {{ $perbaikan->speed_download }} Mbps</td>
                </tr>
                <tr>
                    <th>Upload</th>
                    <td>Upload: {{ $perbaikan->speed_upload }} Mbps</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Switch Internal</h2>
            <table>
                <tr>
                    <th>Ada</th>
                    <td>Ada / Tidak Ada</td>
                </tr>
                <tr>
                    <th>Test Switch Internal</th>
                    <td>Download: {{ $perbaikan->switch_download }} Mbps</td>
                </tr>
                <tr>
                    <th>Upload</th>
                    <td>Upload: {{ $perbaikan->switch_upload }} Mbps</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Perangkat Alat</h2>
            <table>
                <tr>
                    <th>RADDL</th>
                    <td>{{ $perbaikan->raddl }}</td>
                </tr>
                <tr>
                    <th>Konektor</th>
                    <td>{{ $perbaikan->konektor }}</td>
                </tr>
                <tr>
                    <th>Access Point</th>
                    <td>{{ $perbaikan->access_point }}</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Keterangan Kondisi Jaringan</h2>
            <table>
                <tr>
                    <td>{{ $perbaikan->kondisi_jaringan }}</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Keterangan Perbaikan</h2>
            <table>
                <tr>
                    <td>{{ $perbaikan->keterangan_perbaikan }}</td>
                </tr>
            </table>
        </div>

        <div class="signature">
            <div>
                <p>Nama: ___________________________</p>
                <p>Tanda Tangan: ___________________</p>
            </div>
            <div>
                <p>Nama: ___________________________</p>
                <p>Tanda Tangan: ___________________</p>
            </div>
        </div>
    </div>
</body>
</html>
