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
                <td class="border px-4 py-2">sikap_sempurna</td>
                <td class="border px-4 py-2">{{ $pbb1->sikap_sempurna }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->sikap_sempurna + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">istirahat_di_tempat</td>
                <td class="border px-4 py-2">{{ $pbb1->istirahat_di_tempat }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->istirahat_di_tempat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">hormat</td>
                <td class="border px-4 py-2">{{ $pbb1->hormat }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->hormat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">periksa_kerapihan</td>
                <td class="border px-4 py-2">{{ $pbb1->periksa_kerapihan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->periksa_kerapihan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">setengah_lengan_lencang_kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->setengah_lengan_lencang_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->setengah_lengan_lencang_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">lencang_kanan</td>
                <td class="border px-4 py-2">{{ $pbb1->lencang_kanan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->lencang_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">hadap_kanan</td>
                <td class="border px-4 py-2">{{ $pbb1->hadap_kanan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->hadap_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">lencang_depan</td>
                <td class="border px-4 py-2">{{ $pbb1->lencang_depan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->lencang_depan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">hadap_kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->hadap_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->hadap_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">jalan_di_tempat</td>
                <td class="border px-4 py-2">{{ $pbb1->jalan_di_tempat }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->jalan_di_tempat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">balik_kanan_henti</td>
                <td class="border px-4 py-2">{{ $pbb1->balik_kanan_henti }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->balik_kanan_henti + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">tiga_langkah_kanan</td>
                <td class="border px-4 py-2">{{ $pbb1->tiga_langkah_kanan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiga_langkah_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">tiga_langkah_kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->tiga_langkah_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiga_langkah_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">tiga_langkah_depan</td>
                <td class="border px-4 py-2">{{ $pbb1->tiga_langkah_depan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiga_langkah_depan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">tiga_langkah_belakang</td>
                <td class="border px-4 py-2">{{ $pbb1->tiga_langkah_belakang }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiga_langkah_belakang + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">maju_jalan</td>
                <td class="border px-4 py-2">{{ $pbb1->maju_jalan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->maju_jalan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">langkah_tegap</td>
                <td class="border px-4 py-2">{{ $pbb1->langkah_tegap }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->langkah_tegap + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">langkah_berlari</td>
                <td class="border px-4 py-2">{{ $pbb1->langkah_berlari }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->langkah_berlari + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">hormat_kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->hormat_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->hormat_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">tiap_banjar_belok_kanan</td>
                <td class="border px-4 py-2">{{ $pbb1->tiap_banjar_belok_kanan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiap_banjar_belok_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">melintang_kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->melintang_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->melintang_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">haluan_kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->haluan_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->haluan_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">tiap_banjar_belok_kiri</td>
                <td class="border px-4 py-2">{{ $pbb1->tiap_banjar_belok_kiri }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->tiap_banjar_belok_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">bubar_jalan</td>
                <td class="border px-4 py-2">{{ $pbb1->bubar_jalan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->bubar_jalan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">postur</td>
                <td class="border px-4 py-2">{{ $pbb1->postur }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->postur + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">suara</td>
                <td class="border px-4 py-2">{{ $pbb1->suara }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->suara + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">intonasi</td>
                <td class="border px-4 py-2">{{ $pbb1->intonasi }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->intonasi + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">penguasaan_materi</td>
                <td class="border px-4 py-2">{{ $pbb1->penguasaan_materi }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->penguasaan_materi + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0) }}
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">penguasaan_lapangan_pasukan</td>
                <td class="border px-4 py-2">{{ $pbb1->penguasaan_lapangan_pasukan }}</td>
                <td class="border px-4 py-2">{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0 }}</td>
                <td class="border px-4 py-2">{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0 }}</td>
                <td class="border px-4 py-2">
                    {{ $pbb1->penguasaan_lapangan_pasukan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0) }}
                </td>
            </tr>
            <!-- Ulangi baris untuk setiap materi lomba lainnya -->
        @endforeach
        </tbody>
    </table>
    
    

    <h3>Nilai Pasukan</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Juri ID</th>
            <th>Kerapihan Saf</th>
            <th>Kerapihan Banjar</th>
            <th>kekompakan_gerak </th>
            <th>penempatan_ketinggian_personel</th>
            <th>formasi_keseluruhan</th>
        </tr>
        @foreach ($pasukanData as $pasukan)
            <tr>
                <td>{{ $pasukan->id }}</td>
                <td>{{ $pasukan->juri_id }}</td>
                <td>{{ $pasukan->kerapihan_saf }}</td>
                <td>{{ $pasukan->kerapihan_banjar }}</td>
                <td>{{ $pasukan->kekompakan_gerak }}</td>
                <td>{{ $pasukan->penempatan_ketinggian_personel }}</td>
                <td>{{ $pasukan->formasi_keseluruhan }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Nilai Variasi & Formasi</h3>
    <table>
        <tr>>
            <th>Kekompakan Variasi</th>
            <th>tingkat_kesulitan_variasi </th>
            <th>kreativitas_variasi</th>
            <th>keindahan_variasi</th>
            <th>perpaduan_pbb_murni_variasi</th>
            <th>kekompakan_formasi</th>
            <th>tingkat_kesulitan_formasi</th>
            <th>dinamis_struktur_formasi</th>
            <th>penggunaan_pbb_murni_formasi</th>
            <th>bentuk_akhir_formasi</th>
        </tr>
        @foreach ($vaforData as $vafor)
            <tr>
                <td>{{ $vafor->kekompakan_variasi }}</td>
                <td>{{ $vafor->tingkat_kesulitan_variasi }}</td>
                <td>{{ $vafor->kreativitas_variasi }}</td>
                <td>{{ $vafor->keindahan_variasi }}</td>
                <td>{{ $vafor->perpaduan_pbb_murni_variasi }}</td>
                <td>{{ $vafor->kekompakan_formasi }}</td>
                <td>{{ $vafor->tingkat_kesulitan_formasi }}</td>
                <td>{{ $vafor->dinamis_struktur_formasi }}</td>
                <td>{{ $vafor->penggunaan_pbb_murni_formasi }}</td>
                <td>{{ $vafor->bentuk_akhir_formasi }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Nilai Kostum</h3>
    <table>
        <tr>
            <th>Kelengkapan Atribut</th>
            <th>Keindahan Kerapihan</th>
        </tr>
        @foreach ($kostumData as $kostum)
            <tr>
                <td>{{ $kostum->kelengkapan_atribut }}</td>
                <td>{{ $kostum->keindahan_kerapihan }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Nilai Penalti</h3>
    <table>
        <tr>
            <th>Tidak Ikut Daftar Ulang</th>
            <th>tidak_ikut_upacara_pembukaan</th>
            <th>terlambat_ke_dp_1</th>
            <th>tidak_sesuai_nomor_urut</th>
            <th>terlewat_tampil</th>
            <th>kurang_lebih_personil</th>
            <th>anggota_sakit_di_lapangan</th>
            <th>merusak_properti</th>
            <th>melewati_garis_batas</th>
            <th>melebihi_waktu</th>
            <th>Manipulasi Anggota</th>
        </tr>
        @foreach ($penaltiData as $penalti)
            <tr>
                <td>{{ $penalti->id }}</td>
                <td>{{ $penalti->juri_id }}</td>
                <td>{{ $penalti->tidak_ikut_daftar_ulang }}</td>
                <td>{{ $penalti->terlambat_ke_dp_1 }}</td>
                <td>{{ $penalti->tidak_sesuai_nomor_urut }}</td>
                <td>{{ $penalti->terlewat_tampil }}</td>
                <td>{{ $penalti->kurang_lebih_personil }}</td>
                <td>{{ $penalti->anggota_sakit_di_lapangan }}</td>
                <td>{{ $penalti->merusak_properti }}</td>
                <td>{{ $penalti->melewati_garis_batas }}</td>
                <td>{{ $penalti->melebihi_waktu }}</td>
                <td>{{ $penalti->manipulasi_anggota }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
