{{-- @php
    dd($data);
@endphp --}}
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Semua Nilai Sekolah</title>
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
    <h2 style="text-align: center;">Laporan Nilai Semua Sekolah</h2>
    @php
        // Urutkan data berdasarkan total_nilai secara descending
        $sortedData = collect($data)->sortByDesc('total_nilai')->values();
    @endphp

<table>
    <thead>
        <tr>
            <th>Juara</th>
            <th>Nomor Peserta</th>
            <th>Nama Sekolah</th>
            <th>Nilai PBB</th>
            <th>Nilai Danton</th>
            <th>Nilai Vafor</th>
            <th>Nilai Kostum</th>
            <th>Penalti</th>
            <th>Total Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sortedData as $index => $sekolah)
            <tr>
                <td>{{ $index + 1 }}</td> <!-- Ranking dimulai dari 1 -->
                <td>{{ $sekolah['status'] === 'DISKUALIFIKASI' ? 'DIS' : $sekolah['nomor_peserta'] }}</td>
                <td>{{ $sekolah['nama_sekolah'] }}</td>
                <td>{{ $sekolah['status'] === 'DISKUALIFIKASI' ? 0 : $sekolah['nilai_juri_1'] + $sekolah['nilai_juri_2'] + $sekolah['nilai_juri_3']}}</td>
                <td>{{ $sekolah['status'] === 'DISKUALIFIKASI' ? 0 : $sekolah['nilai_danton'] }}</td>
                <td>{{ $sekolah['status'] === 'DISKUALIFIKASI' ? 0 : $sekolah['nilai_vafor'] + $sekolah['nilai_pasukan']}}</td>
                <td>{{ $sekolah['status'] === 'DISKUALIFIKASI' ? 0 : $sekolah['nilai_kostum'] }}</td>
                <td>{{ $sekolah['status'] === 'DISKUALIFIKASI' ? 'DIS' : $sekolah['nilai_penalti'] }}</td>
                <td>{{ $sekolah['status'] === 'DISKUALIFIKASI' ? 0 : $sekolah['total_nilai'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>

</html>
