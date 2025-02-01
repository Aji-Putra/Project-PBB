{{-- @php
    dd($datapbb);
@endphp --}}
<x-layout>
    <div class="flex flex-col gap-2 max-w-screen-xl px-0 mx-auto mb-3 md:px-2 lg:px-3">
        <h1 class="text-2xl">Selamat Datang, {{ Auth::user()->name }}</h1>
        <p class="text-lg">Pilih Peserta yang akan dinilai</p>

    </div>

    <div class="md:max-w-[1080px] max-w-[720px] mx-auto">
        <div class="w-full flex justify-end items-center gap-2" x-data="{ tambahPeserta: false }">
            <a class="w-40 bg-green-500 text-white px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-green-500"
                href="/rekap">Rekap</a>
                <a class="w-40 bg-yellow-500 text-black px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-yellow-500"
            href="{{ url('/cetak-semua-sekolah') }}">Cetak</a>
            <a class="w-40 bg-blue-500 text-white px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500"
                href="{{ url('/dashboard') }}">Penilaian Peserta</a>
        </div>
        <div
            class="relative flex flex-col w-full h-full overflow-scroll lg:overflow-hidden text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Nomor Peserta</th>
                        <th class="border px-4 py-2">Nama Sekolah</th>
                        <th class="border px-4 py-2">Juri PBB 1</th>
                        <th class="border px-4 py-2">Juri PBB 2</th>
                        <th class="border px-4 py-2">Juri PBB 3</th>
                        <th class="border px-4 py-2">Juri Vafor </th>
                        <th class="border px-4 py-2">Juri Kostum </th>
                        <th class="border px-4 py-2">Penalti </th>
                        <th class="border px-4 py-2">Total Nilai</th>
                        <th class="border px-4 py-2">Cetak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datapbb as $data)
                        <tr>
                            <td class="border px-4 py-2">{{ $data->sekolah->nomor_peserta }}</td>
                            <td class="border px-4 py-2">{{ $data->sekolah->nama_sekolah ?? 'Tidak Diketahui' }}</td>
                            <td class="border px-4 py-2">{{ $data->nilai_juri_1 }}</td>
                            <td class="border px-4 py-2">{{ $data->nilai_juri_2 }}</td>
                            <td class="border px-4 py-2">{{ $data->nilai_juri_3 }}</td>
                            <td class="border px-4 py-2">
                                @php
                                    $totalVafor = 0;
                                @endphp
                                @foreach($data->sekolah->nilaivafor as $vafor)
                                    @php
                                        $totalVafor += $vafor->kekompakan_variasi + $vafor->tingkat_kesulitan_variasi +
                                                       $vafor->kreativitas_variasi + $vafor->keindahan_variasi +
                                                       $vafor->perpaduan_pbb_murni_variasi + $vafor->kekompakan_formasi +
                                                       $vafor->tingkat_kesulitan_formasi + $vafor->dinamis_struktur_formasi +
                                                       $vafor->penggunaan_pbb_murni_formasi + $vafor->bentuk_akhir_formasi;
                                    @endphp
                                @endforeach
                                {{ $totalVafor }}
                            </td>
                            <td class="border px-4 py-2">
                                @php
                                    $totalKostum = 0;
                                @endphp
                                @foreach($data->sekolah->nilaiKostum as $kostum)
                                    @php
                                        $totalKostum += $kostum->kelengkapan_atribut + $kostum->keindahan_kerapihan;
                                    @endphp
                                @endforeach
                                {{ $totalKostum }}
                            </td>
                            <td class="border px-4 py-2">
                                @php
                                    $totalPenalti = 0;
                                @endphp
                                @foreach ($data->sekolah->nilaiPenalti as $penalti)
                                    @php
                                        $totalPenalti += $penalti->tidak_ikut_daftar_ulang + $penalti->tidak_ikut_upacara_pembukaan + $penalti->terlambat_ke_dp_1 + $penalti->tidak_sesuai_nomor_urut + $penalti->terlewat_tampil + $penalti->kurang_lebih_personil + $penalti->anggota_sakit_di_lapangan + $penalti->merusak_properti + $penalti->melewati_garis_batas + $penalti->melebihi_waktu;
                                    @endphp
                                @endforeach
                                {{ $totalPenalti }}
                            </td>
                            <td class="border px-4 py-2">
                                @php
                                    $totalNilai = $data->nilai_juri_1 + $data->nilai_juri_2 + $data->nilai_juri_3 + $totalVafor + $totalKostum - $totalPenalti;
                                @endphp
                                {{ $totalNilai }}
                            </td>
                            @if ($data->sekolah->status === 'DISKUALIFIKASI')
                            <td class="border px-6 py-4">

                                <a class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-red-500 
                                ">
                                                                DISKUALIFIKASI
                                                            </a>
                            </td>
                            @else
                                
                            <td class="border px-6 py-4">
                                <a href="{{ url('/cetak-sekolah/' . $data->sekolah_id) }}"
                                    class="w-40 flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                    Cetak Detail PDF
                                </a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-layout>
