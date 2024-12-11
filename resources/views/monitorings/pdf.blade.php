<!DOCTYPE html>
<html>
<head>
    <title>FORM BERITA ACARA MONITORING JARINGAN INTERNET/INTRANET</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }
        .header, .section {
            margin-bottom: 20px;
        }
        .header h1, .header h3 {
            text-align: center;
            margin: 0;
            padding: 10px 0;
        }
        .section h2 {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #000;
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
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
            <h1>FORM BERITA ACARA MONITORING JARINGAN INTERNET/INTRANET</h1>
            <h3>Tanggal: <?php echo date('d F Y'); ?></h3>
        </div>
        
        <div class="section">
            <h2>Informasi Umum</h2>
            <table>
                <tr>
                    <th>Nama Instansi</th>
                    <td>{{ $monitoring->nama_instansi }}</td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>{{ $monitoring->tanggal }}</td>
                </tr>
                <tr>
                    <th>Nama PIC</th>
                    <td>{{ $monitoring->nama_pic }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{ $monitoring->no_hp }}</td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>{{ $monitoring->jabatan }}</td>
                </tr>
                <tr>
                    <th>Titik Lokasi</th>
                    <td>{{ $monitoring->titik_lokasi }}</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>ISP dan Perangkat Internal</h2>
            <table>
                <tr>
                    <th>ISP Backup</th>
                    <td>Ada / Tidak Ada</td>
                </tr>
                <tr>
                    <th>Router Internal</th>
                    <td>Ada / Tidak Ada</td>
                </tr>
                <tr>
                    <th>Switch Internal</th>
                    <td>Ada / Tidak Ada</td>
                </tr>
                <tr>
                    <th>Waktu Uji Coba</th>
                    <td>Jam:</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Test Speed</h2>
            <table>
                <tr>
                    <th>Test Speed Test Switch Internal</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Download (Mbps)</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Upload (Mbps)</th>
                    <td>-</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Sarana Pendukung Jaringan Internal</h2>
            <table>
                <tr>
                    <th>Kabel LAN</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Akses Point</th>
                    <td>-</td>
                </tr>
                <tr>
                    <th>Switch Pembagi</th>
                    <td>-</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Keterangan Kondisi Jaringan Internal</h2>
            <table>
                <tr>
                    <td>-</td>
                </tr>
            </table>
        </div>

        <div class="section">
            <h2>Topologi</h2>
            <table>
                <tr>
                    <td>-</td>
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
