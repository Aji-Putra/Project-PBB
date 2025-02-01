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
    <p>Nama Sekolah: {{ $sekolah->nama_sekolah }}</p>
    <p>Nomor Peserta: {{ $sekolah->nomor_peserta }}</p>
    <h3>Nilai PBB</h3>
    <table>
        <thead>
            <tr>
                <th>Materi Lomba</th>
                <th>Juri 1</th>
                <th>Juri 2</th>
                <th>Juri 3</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
            $totalKeseluruhan = 0;
        @endphp
            @foreach ($juri1 as $pbb1)
            <tr>
                <td>Bersaf Kumpul</td>
                <td>{{ $pbb1->bersaf_kumpul }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bersaf_kumpul ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bersaf_kumpul ?? 0 }}</td>
                <td>
                    @php
    $bersafKumpul = $pbb1->bersaf_kumpul + 
        ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bersaf_kumpul ?? 0) + 
        ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bersaf_kumpul ?? 0);
@endphp
{{ $bersafKumpul }}
                </td>
            </tr>
            <tr>
                <td>Sikap Sempurna</td>
                <td>{{ $pbb1->sikap_sempurna }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0 }}</td>
                <td>
                    @php
                        $sikapSempurna = $pbb1->sikap_sempurna + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->sikap_sempurna ?? 0);
                    @endphp
                    {{ $sikapSempurna }}
                </td>
            </tr>
            <tr>
                <td>Istirahat di Tempat</td>
                <td>{{ $pbb1->istirahat_di_tempat }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0 }}</td>
                <td>
                    @php
                        $istirahatDiTempat = $pbb1->istirahat_di_tempat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->istirahat_di_tempat ?? 0);
                    @endphp

                    {{ $istirahatDiTempat }}
                </td>
            </tr>
            <tr>
                <td>Hormat</td>
                <td>{{ $pbb1->hormat }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0 }}</td>
                <td>
                    @php
                        $hormat = $pbb1->hormat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat ?? 0);
                    @endphp
                    {{ $hormat }}
                </td>
            </tr>
            <tr>
                <td>Periksa Kerapihan</td>
                <td>{{ $pbb1->periksa_kerapihan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0 }}</td>
                <td>
                    @php
                        $periksaKerapihan = $pbb1->periksa_kerapihan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->periksa_kerapihan ?? 0);
                    @endphp
                    {{ $periksaKerapihan }}
                </td>
            </tr>
            <tr>
                <td>Setengah Lengan Lencang Kiri</td>
                <td>{{ $pbb1->setengah_lengan_lencang_kiri }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0 }}</td>
                <td>
                    @php
                        $lencangKiri = $pbb1->setengah_lengan_lencang_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->setengah_lengan_lencang_kiri ?? 0);
                    @endphp
                    {{ $lencangKiri }}
                </td>
            </tr>
            <tr>
                <td>Lencang Kanan</td>
                <td>{{ $pbb1->lencang_kanan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0 }}</td>
                <td>
                    @php
                        $lencangKanan = $pbb1->lencang_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_kanan ?? 0);
                    @endphp
                    {{ $lencangKanan }}
                </td>
            </tr>
            <tr>
                <td>Hadap Kanan</td>
                <td>{{ $pbb1->hadap_kanan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0 }}</td>
                <td>
                    @php
                        $hadapKanan = $pbb1->hadap_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kanan ?? 0);
                    @endphp
                    {{ $hadapKanan }}
                </td>
            </tr>
            <tr>
                <td>Lencang Depan</td>
                <td>{{ $pbb1->lencang_depan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0 }}</td>
                <td>
                    @php
                        $lencangDepan = $pbb1->lencang_depan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->lencang_depan ?? 0);
                    @endphp
                    {{ $lencangDepan }}
                </td>
            </tr>
            <tr>
                <td>Hadap Kiri</td>
                <td>{{ $pbb1->hadap_kiri }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0 }}</td>
                <td>
                    @php
                        $hadapKiri = $pbb1->hadap_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hadap_kiri ?? 0);
                    @endphp
                    {{ $hadapKiri }}
                </td>
            </tr>
            <tr>
                <td>Jalan di Tempat</td>
                <td>{{ $pbb1->jalan_di_tempat }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0 }}</td>
                <td>
                    @php
                        $jalanDiTempat = $pbb1->jalan_di_tempat + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->jalan_di_tempat ?? 0);
                    @endphp
                    {{ $jalanDiTempat }}
                </td>
            </tr>
            <tr>
                <td>Balik Kanan Henti</td>
                <td>{{ $pbb1->balik_kanan_henti }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0 }}</td>
                <td>
                    @php
                        $balikKananHenti = $pbb1->balik_kanan_henti + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->balik_kanan_henti ?? 0);
                    @endphp
                    {{ $balikKananHenti }}
                </td>
            </tr>
            <tr>
                <td>Tiga Langkah Kanan</td>
                <td>{{ $pbb1->tiga_langkah_kanan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0 }}</td>
                <td>
                    @php
                        $tigaLangkahKanan = $pbb1->tiga_langkah_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kanan ?? 0);
                    @endphp
                    {{ $tigaLangkahKanan }}
                </td>
            </tr>
            <tr>
                <td>Tiga Langkah Kiri</td>
                <td>{{ $pbb1->tiga_langkah_kiri }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0 }}</td>
                <td>
                    @php
                        $tigaLangkahKiri = $pbb1->tiga_langkah_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_kiri ?? 0);
                    @endphp
                    {{ $tigaLangkahKiri }}
                </td>
            </tr>
            <tr>
                <td>Tiga Langkah Depan</td>
                <td>{{ $pbb1->tiga_langkah_depan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0 }}</td>
                <td>
                    @php
                        $tigaLangkahDepan =$pbb1->tiga_langkah_depan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_depan ?? 0);
                    @endphp
                    {{ $tigaLangkahDepan }}
                </td>
            </tr>
            <tr>
                <td>Tiga Langkah Belakang</td>
                <td>{{ $pbb1->tiga_langkah_belakang }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0 }}</td>
                <td>
                    @php
                        $tigaLangkahBelakang =  $pbb1->tiga_langkah_belakang + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiga_langkah_belakang ?? 0);
                    @endphp
                    {{$tigaLangkahBelakang }}
                </td>
            </tr>
            <tr>
                <td>Maju Jalan</td>
                <td>{{ $pbb1->maju_jalan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0 }}</td>
                <td>
                    @php
                        $majuJalan = $pbb1->maju_jalan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->maju_jalan ?? 0);
                    @endphp
                    {{ $majuJalan }}
                </td>
            </tr>
            <tr>
                <td>Langkah Tegap</td>
                <td>{{ $pbb1->langkah_tegap }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0 }}</td>
                <td>
                    @php
                        $langkahTegap = $pbb1->langkah_tegap + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_tegap ?? 0);
                    @endphp
                    {{ $langkahTegap }}
                </td>
            </tr>
            <tr>
                <td>Langkah Berlari</td>
                <td>{{ $pbb1->langkah_berlari }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0 }}</td>
                <td>
                    @php
                        $langkahBerlari =  $pbb1->langkah_berlari + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->langkah_berlari ?? 0);
                    @endphp
                    {{ $langkahBerlari}}
                </td>
            </tr>
            <tr>
                <td>Hormat Kiri</td>
                <td>{{ $pbb1->hormat_kiri }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0 }}</td>
                <td>
                    @php
                        $hormatKiri = $pbb1->hormat_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->hormat_kiri ?? 0);
                    @endphp
                    {{  $hormatKiri }}
                </td>
            </tr>
            <tr>
                <td>Tiap Banjar Belok Kanan</td>
                <td>{{ $pbb1->tiap_banjar_belok_kanan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0 }}</td>
                <td>
                    @php
                        $tiapBanjarBelokKanan = $pbb1->tiap_banjar_belok_kanan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kanan ?? 0);
                    @endphp
                    {{ $tiapBanjarBelokKanan }}
                </td>
            </tr>
            <tr>
                <td>Melintang Kiri</td>
                <td>{{ $pbb1->melintang_kiri }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0 }}</td>
                <td>
                    @php
                        $melintangKiri = $pbb1->melintang_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->melintang_kiri ?? 0);
                    @endphp
                    {{ $melintangKiri}}
                </td>
            </tr>
            <tr>
                <td>Haluan Kiri</td>
                <td>{{ $pbb1->haluan_kiri }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0 }}</td>
                <td>
                    @php
                        $haluanKiri = $pbb1->haluan_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->haluan_kiri ?? 0);
                    @endphp
                    {{ $haluanKiri }}
                </td>
            </tr>
            <tr>
                <td>Tiap Banjar Belok Kiri</td>
                <td>{{ $pbb1->tiap_banjar_belok_kiri }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0 }}</td>
                <td>
                    @php
                        $tiapBanjarBelokKiri = $pbb1->tiap_banjar_belok_kiri + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->tiap_banjar_belok_kiri ?? 0);
                    @endphp
                    {{ $tiapBanjarBelokKiri }}
                </td>
            </tr>
            <tr>
                <td>Bubar Jalan</td>
                <td>{{ $pbb1->bubar_jalan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0 }}</td>
                <td>
                    @php
                        $bubarJalan = $pbb1->bubar_jalan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->bubar_jalan ?? 0);
                    @endphp
                    {{ $bubarJalan }}
                </td>
            </tr>
            <tr>
                <td>Postur</td>
                <td>{{ $pbb1->postur }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0 }}</td>
                <td>
                    @php
                        $postur = $pbb1->postur + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->postur ?? 0);
                    @endphp
                    {{ $postur }}
                </td>
            </tr>
            <tr>
                <td>Suara</td>
                <td>{{ $pbb1->suara }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0 }}</td>
                <td>
                    @php
                        $suara = $pbb1->suara + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->suara ?? 0);
                    @endphp
                    {{ $suara }}
                </td>
            </tr>
            <tr>
                <td>Intonasi</td>
                <td>{{ $pbb1->intonasi }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0 }}</td>
                <td>
                    @php
                        $intonasi = $pbb1->intonasi + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->intonasi ?? 0);
                    @endphp
                    {{ $intonasi }}
                </td>
            </tr>
            <tr>
                <td>Penguasaan Materi</td>
                <td>{{ $pbb1->penguasaan_materi }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0 }}</td>
                <td>
                    @php
                        $penguasaanMateri = $pbb1->penguasaan_materi + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_materi ?? 0);
                    @endphp
                    {{ $penguasaanMateri }}
                </td>
            </tr>
            <tr>
                <td>Penguasaan Lapangan Pasukan</td>
                <td>{{ $pbb1->penguasaan_lapangan_pasukan }}</td>
                <td>{{ $juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0 }}</td>
                <td>{{ $juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0 }}</td>
                <td>
                    @php
                        $penguasaanLapanganPasukan = $pbb1->penguasaan_lapangan_pasukan + ($juri2->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0) + ($juri3->firstWhere('sekolah_id', $pbb1->sekolah_id)->penguasaan_lapangan_pasukan ?? 0)
                    @endphp
                    {{ $penguasaanLapanganPasukan }}
                </td>
            </tr>
            <tr class="total">
                <td colspan="4">Total Keseluruhan</td>
                <td>{{ $bersafKumpul + $sikapSempurna + $istirahatDiTempat + $hormat + $periksaKerapihan + $lencangKiri + $lencangKanan + $hadapKanan + $lencangDepan +  $hadapKiri + $jalanDiTempat + $balikKananHenti + $tigaLangkahKanan + $tigaLangkahKiri + $tigaLangkahDepan +  $tigaLangkahBelakang + $majuJalan + $langkahTegap + $langkahBerlari + $hormatKiri + $tiapBanjarBelokKanan + $melintangKiri + $haluanKiri + $tiapBanjarBelokKiri + $bubarJalan + $postur + $suara + $intonasi + $penguasaanMateri + $penguasaanLapanganPasukan}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>



    <h3>Nilai Pasukan</h3>
    <table>
        <thead>
            <tr>
                <th>Materi Lomba</th>
                <th>Nilai</th>
            </tr>
        </thead>
        @foreach ($pasukanData as $pasukan)
    @php
        $totalKeseluruhan = 
            $pasukan->kerapihan_saf +
            $pasukan->kerapihan_banjar +
            $pasukan->kekompakan_gerak +
            $pasukan->penempatan_ketinggian_personel +
            $pasukan->formasi_keseluruhan;
    @endphp
    <tbody>
        <tr>
            <td>Kerapihan Saf</td>
            <td>{{ $pasukan->kerapihan_saf }}</td>
        </tr>
        <tr>
            <td>Kerapihan Banjar</td>
            <td>{{ $pasukan->kerapihan_banjar }}</td>
        </tr>
        <tr>
            <td>Kekompakan Gerak</td>
            <td>{{ $pasukan->kekompakan_gerak }}</td>
        </tr>
        <tr>
            <td>Penempatan Ketinggian Personel</td>
            <td>{{ $pasukan->penempatan_ketinggian_personel }}</td>
        </tr>
        <tr>
            <td>Performance Keseluruhan</td>
            <td>{{ $pasukan->formasi_keseluruhan }}</td>
        </tr>
        <tr class="total">
            <td>Total Keseluruhan</strong></td>
            <td>{{ $totalKeseluruhan }}</td>
        </tr>
    </tbody>
@endforeach
    </table>

    <h3>Nilai Variasi & Formasi</h3>
    <table>
        <thead>
            <tr>
                <th>Materi Lomba</th>
                <th>Total</th>
            </tr>
        </thead>
        @foreach ($vaforData as $vafor)
    @php
        $totalKeseluruhan = 
            $vafor->kekompakan_variasi +
            $vafor->tingkat_kesulitan_variasi +
            $vafor->kreativitas_variasi +
            $vafor->keindahan_variasi +
            $vafor->perpaduan_pbb_murni_variasi +
            $vafor->kekompakan_formasi +
            $vafor->tingkat_kesulitan_formasi +
            $vafor->dinamis_struktur_formasi +
            $vafor->penggunaan_pbb_murni_formasi +
            $vafor->bentuk_akhir_formasi;
    @endphp
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
        <tr class="total">
            <td>Total Keseluruhan</td>
            <td>{{ $totalKeseluruhan }}</td>
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
        @php
        $totalKeseluruhan = $kostum->kelengkapan_atribut + $kostum->keindahan_kerapihan;
    @endphp
        <tbody>
            <tr>
                <td>Kelengkapan Atribut</td>
                <td>{{ $kostum->kelengkapan_atribut }}</td>
            </tr>
            <tr>
                <td>Keindahan Kerapihan</td>
                <td>{{ $kostum->keindahan_kerapihan }}</td>
            </tr>
            <tr class="total">
                <td>Total Keseluruhan</td>
                <td>{{ $totalKeseluruhan }}</td>
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
    @php
        // Menjumlahkan semua penalti
        $totalPenalti = 
            ($penalti->tidak_ikut_daftar_ulang ?? 0) +
            ($penalti->tidak_ikut_upacara_pembukaan ?? 0) +
            ($penalti->terlambat_ke_dp_1 ?? 0) +
            ($penalti->tidak_sesuai_nomor_urut ?? 0) +
            ($penalti->terlewat_tampil ?? 0) +
            ($penalti->kurang_lebih_personil ?? 0) +
            ($penalti->anggota_sakit_di_lapangan ?? 0) +
            ($penalti->merusak_properti ?? 0) +
            ($penalti->melewati_garis_batas ?? 0) +
            ($penalti->melebihi_waktu ?? 0);

        // Cek apakah tim didiskualifikasi
        $diskualifikasi = $penalti->manipulasi_anggota === -1;
    @endphp

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
            <td>{{ $penalti->melebihi_waktu ?? 0 }}</td>
        </tr>
        <tr>
            <td>Manipulasi Anggota</td>
            <td>{{ $diskualifikasi ? 'DISKUALIFIKASI' : '0' }}</td>
        </tr>
        <tr class="total">
            <td>Total Keseluruhan</td>
            <td>{{ $diskualifikasi ? 'DISKUALIFIKASI' : $totalPenalti }}</td>
        </tr>
    </tbody>
@endforeach

    </table>
    <table>
        <thead>
            <tr>
                <th>Juri PBB 1</th>
                <th>Juri PBB 2</th>
                <th>Juri PBB 3</th>
                <th>Juri Vafor</th>
                <th>Juri Kostum</th>
                <th>Penalti</th>
                <th>Total Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nilai Juri PBB 1</td>
                <td>Nilai Juri PBB 2</td>
                <td>Nilai Juri PBB 3</td>
                <td>Nilai Juri Vafor</td>
                <td>Nilai Juri Kostum</td>
                <td>Nilai Penalti</td>
                <td>Hasil Total Nilai</td>
            </tr>
        </tbody>
    </table>

    <table style="margin-top: 50px;">
        <tr>
            <td style="text-align: center">Pelatih</td>
            <td style="text-align: center">Panitia</td>
        </tr>
        <tr>
            <td style="text-align: center; padding: 80px 0 20px;">(___________________)</td>
            <td style="text-align: center; padding: 80px 0 20px;">(___________________)</td>
        </tr>
    </table>
</body>

</html>
