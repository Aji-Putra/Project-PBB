<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Sekolah</title>
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

        .total {
            background-color: #FADA7A;
            font-weight: 700;
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
    <h2 style="text-align: center;">Juara Penilaian Baris-Berbaris (PBB)</h2>
    <table>
        <thead>
            <tr>
                <th>Juara</th>
                <th>Nomor Peserta</th>
                <th>Nama Sekolah</th>
                <th>Juri 1</th>
                <th>Juri 2</th>
                <th>Juri 3</th>
                <th>Total Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <h2 style="text-align: center;">Juara Komandan Pleton (Danton)</h2>
    <table>
        <thead>
            <tr>
                <th>Juara</th>
                <th>Nomor Peserta</th>
                <th>Nama Sekolah</th>
                <th>Juri 1</th>
                <th>Juri 2</th>
                <th>Juri 3</th>
                <th>Total Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <h2 style="text-align: center;">Juara Variasi & Formasi (Vafor)</h2>
    <table>
        <thead>
            <tr>
                <th>Juara</th>
                <th>Nomor Peserta</th>
                <th>Nama Sekolah</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <h2 style="text-align: center;">Juara Kostum</h2>
    <table>
        <thead>
            <tr>
                <th>Juara</th>
                <th>Nomor Peserta</th>
                <th>Nama Sekolah</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
