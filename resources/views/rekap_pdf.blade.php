<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Nilai - {{ $rekapData['nama_sekolah'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .header-title {
            text-align: center
        }

        img {
            width: 5rem;
            position: absolute;
            top: 40px
        }
    </style>
</head>
<body>
    <img src="{{ public_path('storage/img/logo.jpeg') }}" alt="logo">
    <div class="header-title">
        <h2>Lomba Baris Berbaris Gempalan Saga</h2>
        <h3>Paskibra SMK Angkasa 2 Margahayu</h3>
        <h3>Tingkat SMP Se-Jawa Barat Open Tahun 2025</h3>
    </div>
    <hr>
    <h2>Rekap Nilai - {{ $rekapData['nama_sekolah'] }}</h2>
    <table>
        <tr>
            <th>Kategori</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>PBB</td>
            <td>{{ $rekapData['pbb'] }}</td>
        </tr>
        <tr>
            <td>Pasukan</td>
            <td>{{ $rekapData['pasukan'] }}</td>
        </tr>
        <tr>
            <td>VAFOR</td>
            <td>{{ $rekapData['vafor'] }}</td>
        </tr>
        <tr>
            <td>Kostum</td>
            <td>{{ $rekapData['kostum'] }}</td>
        </tr>
        <tr>
            <td>Penalti</td>
            <td>{{ $rekapData['penalti'] }}</td>
        </tr>
        <tr>
            <td><strong>Total Nilai</strong></td>
            <td><strong>{{ $rekapData['total_nilai'] }}</strong></td>
        </tr>
    </table>
</body>
</html>
