<!DOCTYPE html>
<html>
<head>
    <title>Rekap Nilai - {{ $rekapData['nama_sekolah'] }}</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Rekap Nilai - {{ $rekapData['nama_sekolah'] }}</h1>
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
