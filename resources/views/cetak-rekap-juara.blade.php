{{-- @php
    dd($data);
@endphp --}}
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
    @php
        $dataPbb = collect($data)->sortByDesc('total_nilai_pbb')->take(3);
        $dataDanton = collect($data)->sortByDesc('total_nilai_danton')->take(3);
        $dataVafor = collect($data)->sortByDesc('nilai_vafor')->take(3);
        $dataPasukan = collect($data)->sortByDesc('nilai_pasukan')->take(3);
        $dataKostum = collect($data)->sortByDesc('nilai_kostum')->take(3);
        
    @endphp
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
            @php
                $juara = 1;
            @endphp
            @foreach ($dataPbb as $index => $sekolah)
                <tr>
                    <td>Juara {{ $juara++ }}</td>
                    <td>{{ $sekolah['nomor_peserta'] }}</td>
                    <td>{{ $sekolah['nama_sekolah'] }}</td>
                    <td>{{ $sekolah['nilai_juri_1'] }}</td>
                    <td>{{ $sekolah['nilai_juri_2'] }}</td>
                    <td>{{ $sekolah['nilai_juri_3'] }}</td>
                    <td>{{ $sekolah['total_nilai_pbb'] }}</td>
                </tr>
            @endforeach
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
            @php
                $juaraDanton = 1;
            @endphp
            @foreach ($dataDanton as $index => $sekolah)
                <tr>
                    <td>Juara {{ $juaraDanton++ }}</td>
                    <td>{{ $sekolah['nomor_peserta'] }}</td>
                    <td>{{ $sekolah['nama_sekolah'] }}</td>
                    <td>{{ $sekolah['nilai_danton_juri_1'] }}</td>
                    <td>{{ $sekolah['nilai_danton_juri_2'] }}</td>
                    <td>{{ $sekolah['nilai_danton_juri_3'] }}</td>
                    <td>{{ $sekolah['total_nilai_danton'] }}</td>
                </tr>
            @endforeach
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
            @php
                $juaraVafor = 1;
            @endphp
            @foreach ($dataVafor as $index => $sekolah)
            <tr>
                <td>Juara {{ $juaraVafor++ }}</td>
                <td>{{ $sekolah['nomor_peserta'] }}</td>
                <td>{{ $sekolah['nama_sekolah'] }}</td>
                <td>{{ $sekolah['nilai_vafor'] }}</td>
            </tr>
            @endforeach
            
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
            @php
                $juaraKostum = 1;
            @endphp
            @foreach ($dataKostum as $index => $sekolah)
            <tr>
                <td>Juara {{ $juaraKostum++ }}</td>
                <td>{{ $sekolah['nomor_peserta'] }}</td>
                <td>{{ $sekolah['nama_sekolah'] }}</td>
                <td>{{ $sekolah['nilai_kostum'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
