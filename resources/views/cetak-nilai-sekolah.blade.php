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

        .cetak-btn {
            margin: 20px 0;
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h2>Data Sekolah: {{ $sekolah->nama_sekolah }}</h2>
    <p>Nomor Peserta: {{ $sekolah->nomor_peserta }}</p>
    <h3>Nilai PBB</h3>
    <table class="table-auto border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="border px-4 py-2">Materi Lomba</th>
                <th class="border px-4 py-2">Juri 1</th>
                <th class="border px-4 py-2">Juri 2</th>
                <th class="border px-4 py-2">Juri 3</th>
                <th class="border px-4 py-2">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($juri1 as $pbb1)
            <tr>
                <td class="border px-4 py-2">Bersaf Kumpul</td>
                <td class="border px-4 py-2">{{ $pbb1->bersaf_kumpul }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bersaf_kumpul ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bersaf_kumpul ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->bersaf_kumpul + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bersaf_kumpul ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bersaf_kumpul ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Sikap Sempurna</td>
                <td class="border px-4 py-2">{{ $pbb1->sikap_sempurna }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->sikap_sempurna + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Istirahat di Tempat</td>
                <td class="border px-4 py-2">{{ $pbb1->istirahat_di_tempat }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->istirahat_di_tempat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Hormat</td>
                <td class="border px-4 py-2">{{ $pbb1->hormat }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->hormat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Periksa Kerapihan</td>
                <td class="border px-4 py-2">{{ $pbb1->periksa_kerapihan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->periksa_kerapihan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Setengah Lengan Lencang Kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->setengah_lengan_lencang_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->setengah_lengan_lencang_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Lencang Kanan</td>
                <td class="border px-4 py-2">{{ $pbb1->lencang_kanan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->lencang_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Hadap Kanan</td>
                <td class="border px-4 py-2">{{ $pbb1->hadap_kanan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->hadap_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Lencang Depan</td>
                <td class="border px-4 py-2">{{ $pbb1->lencang_depan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->lencang_depan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Hadap Kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->hadap_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->hadap_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Jalan di Tempat</td>
                <td class="border px-4 py-2">{{ $pbb1->jalan_di_tempat }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->jalan_di_tempat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Balik Kanan Henti</td>
                <td class="border px-4 py-2">{{ $pbb1->balik_kanan_henti }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->balik_kanan_henti + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Tiga Langkah Kanan</td>
                <td class="border px-4 py-2">{{ $pbb1->tiga_langkah_kanan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiga_langkah_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Tiga Langkah Kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->tiga_langkah_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiga_langkah_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Tiga Langkah Depan</td>
                <td class="border px-4 py-2">{{ $pbb1->tiga_langkah_depan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiga_langkah_depan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Tiga Langkah Belakang</td>
                <td class="border px-4 py-2">{{ $pbb1->tiga_langkah_belakang }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiga_langkah_belakang + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Maju Jalan</td>
                <td class="border px-4 py-2">{{ $pbb1->maju_jalan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->maju_jalan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Langkah Tegap</td>
                <td class="border px-4 py-2">{{ $pbb1->langkah_tegap }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->langkah_tegap + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Langkah Berlari</td>
                <td class="border px-4 py-2">{{ $pbb1->langkah_berlari }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->langkah_berlari + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Hormat Kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->hormat_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->hormat_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Tiap Banjar Belok Kanan</td>
                <td class="border px-4 py-2">{{ $pbb1->tiap_banjar_belok_kanan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiap_banjar_belok_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Melintang Kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->melintang_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->melintang_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Haluan Kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->haluan_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->haluan_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Tiap Banjar Belok Kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->tiap_banjar_belok_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiap_banjar_belok_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Bubar Jalan</td>
                <td class="border px-4 py-2">{{ $pbb1->bubar_jalan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->bubar_jalan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Postur</td>
                <td class="border px-4 py-2">{{ $pbb1->postur }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->postur + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Suara</td>
                <td class="border px-4 py-2">{{ $pbb1->suara }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->suara + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Intonasi</td>
                <td class="border px-4 py-2">{{ $pbb1->intonasi }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->intonasi + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Penguasaan Materi</td>
                <td class="border px-4 py-2">{{ $pbb1->penguasaan_materi }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->penguasaan_materi + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Penguasaan Lapangan Pasukan</td>
                <td class="border px-4 py-2">{{ $pbb1->penguasaan_lapangan_pasukan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->penguasaan_lapangan_pasukan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0) }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>



    <h3>Nilai Pasukan</h3>
    <table class="table-auto border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="border px-4 py-2">Materi Lomba</th>
                <th class="border px-4 py-2">Nilai</th>
            </tr>
        </thead>
        @foreach ($pasukanData as $pasukan)
        <tbody>
            <tr>
                <td class="border px-4 py-2">Kerapihan Saf</td>
                <td class="border px-4 py-2">{{ $pasukan->kerapihan_saf }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Kerapihan Banjar</td>
                <td class="border px-4 py-2">{{ $pasukan->kerapihan_banjar }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Kekompakan Gerak</td>
                <td class="border px-4 py-2">{{ $pasukan->kekompakan_gerak }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Penempatan Ketinggian Personel</td>
                <td class="border px-4 py-2">{{ $pasukan->penempatan_ketinggian_personel }}</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Performance Keseluruhan</td>
                <td class="border px-4 py-2">{{ $pasukan->formasi_keseluruhan }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <h3>Nilai Variasi & Formasi</h3>
    <table class="table-auto border-collapse border border-gray-400">
        <thead>
            <tr>
                <th class="border px-4 py-2">Materi Lomba</th>
                <th class="border px-4 py-2">Total</th>
            </tr>
        </thead>
        @foreach ($vaforData as $vafor)
        <tbody>
            <tr>
                <td>Kekompakan Variasi</td>
                <td>{{ $vafor->kekompakan_variasi }}</td>
            </tr>
            <tr>
                <td>Tingkat Kesulitan Variasi</td>
                <td>{{ $vafor->tingkat_kesulitan_variasi }}</td>
            </tr>
            <tr>
                <td>Kreativitas Variasi</td>
                <td>{{ $vafor->kreativitas_variasi }}</td>
            </tr>
            <tr>
                <td>Keindahan Variasi</td>
                <td>{{ $vafor->keindahan_variasi }}</td>
            </tr>
            <tr>
                <td>Perpaduan PBB Murni Variasi</td>
                <td>{{ $vafor->perpaduan_pbb_murni_variasi }}</td>
            </tr>
            <tr>
                <td>Kekompakan Formasi</td>
                <td>{{ $vafor->kekompakan_formasi }}</td>
            </tr>
            <tr>
                <td>Tingkat Kesulitan Formasi</td>
                <td>{{ $vafor->tingkat_kesulitan_formasi }}</td>
            </tr>
            <tr>
                <td>Dinamis Struktur Formasi</td>
                <td>{{ $vafor->dinamis_struktur_formasi }}</td>
            </tr>
            <tr>
                <td>Penggunaan PBB Murni Formasi</td>
                <td>{{ $vafor->penggunaan_pbb_murni_formasi }}</td>
            </tr>
            <tr>
                <td>Bentuk Akhir Formasi</td>
                <td>{{ $vafor->bentuk_akhir_formasi }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <h3>Nilai Kostum</h3>
    <table>
        <thead>
            <tr>
                <th>Materi Lomba</th>
                <th>Total</th>
            </tr>
        </thead>
        @foreach ($kostumData as $kostum)
        <tbody>
            <tr>
                <td>Kelengkapan Atribut</td>
                <td>{{ $kostum->kelengkapan_atribut }}</td>
            </tr>
            <tr>
                <td>Keindahan Kerapihan</td>
                <td>{{ $kostum->keindahan_kerapihan }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <h3>Nilai Penalti</h3>
    <table>
        <thead>
            <tr>
                <th>Nama Penalti</th>
                <th>Total</th>
            </tr>
        </thead>
        @foreach ($penaltiData as $penalti)
        <tbody>
            <tr>
                <td>Tidak Ikut Daftar Ulang</td>
                <td>{{ $penalti->tidak_ikut_daftar_ulang }}</td>
            </tr>
            <tr>
                <td>Tidak Ikut Upacara Pembukaan</td>
                <td>{{ $penalti->tidak_ikut_upacara_pembukaan }}</td>
            </tr>
            <tr>
                <td>Terlambat ke DP 1</td>
                <td>{{ $penalti->terlambat_ke_dp_1 }}</td>
            </tr>
            <tr>
                <td>Tidak Sesuai Nomor Urut</td>
                <td>{{ $penalti->tidak_sesuai_nomor_urut }}</td>
            </tr>
            <tr>
                <td>Terlewat Tampil</td>
                <td>{{ $penalti->terlewat_tampil }}</td>
            </tr>
            <tr>
                <td>Kurang Lebih Personil</td>
                <td>{{ $penalti->kurang_lebih_personil }}</td>
            </tr>
            <tr>
                <td>Anggota Sakit di Lapangan</td>
                <td>{{ $penalti->anggota_sakit_di_lapangan }}</td>
            </tr>
            <tr>
                <td>Merusak Properti</td>
                <td>{{ $penalti->merusak_properti }}</td>
            </tr>
            <tr>
                <td>Melewati Garis Batas</td>
                <td>{{ $penalti->melewati_garis_batas }}</td>
            </tr>
            <tr>
                <td>Melebihi Waktu</td>
                <td>{{ $penalti->melebihi_waktu }}</td>
            </tr>
            <tr>
                <td>Manipulasi Anggota</td>
                <td>{{ $penalti->manipulasi_anggota }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>

</html>
