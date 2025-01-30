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
            <a class="w-40 bg-green-700 text-white px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-green-500"
                href="/rekap">Rekap</a>
                <a class="w-40 bg-yellow-500 text-black px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-yellow-500"
            href="{{ url('/cetak-semua-sekolah') }}">Cetak</a>
            <a class="w-40 bg-green-500 text-white px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-green-500"
                href="{{ url('/dashboard') }}">Penilaian Peserta</a>
            <button @click="tambahPeserta = true"
                class="w-40 mb-4 px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                Tambah Peserta
            </button>
            <div x-show="tambahPeserta" class="fixed inset-0 transition-opacity" aria-hidden="true"
                @click="tambahPeserta = false">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <form action="{{ url('/tambah/sekolah') }}" method="POST">
                @csrf
                <input type="hidden" name="status" value="Belum Di Nilai">
                <div x-show="tambahPeserta" class="fixed z-10 inset-0 overflow-y-auto">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-20 sm:my-40 sm:align-middle sm:max-w-lg sm:w-full"
                            role="dialog">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Tambah Peserta</h3>
                                        <div class="mt-2 flex flex-col gap-1">
                                            <label for="">Nomor Peserta</label>
                                            <input
                                                class="border border-black p-1 px-2 rounded focus:border-transparent focus:outline-none focus:ring-blue-500 focus:ring-2"
                                                type="text" name="nomor_peserta">
                                            <label for="">Nama Sekolah</label>
                                            <input
                                                class="border border-black p-1 px-2 rounded focus:border-transparent focus:outline-none focus:ring-blue-500 focus:ring-2"
                                                type="text" name="nama_sekolah">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button type="submit"
                                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 sm:ml-3 sm:w-auto sm:text-sm">
                                    Lanjutkan
                                </button>
                                <button @click="tambahPeserta = false"
                                    class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                    Batalkan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
                                    $totalNilai = $data->nilai_juri_1 + $data->nilai_juri_2 + $data->nilai_juri_3 + $totalVafor + $totalKostum;
                                @endphp
                                {{ $totalNilai }}
                            </td>
                            <td class="border px-6 py-4">
                                <a href="{{ url('/cetak-sekolah/' . $data->sekolah_id) }}"
                                    class="w-40 flex justify-center mb-4 px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                    Cetak Detail PDF
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-layout>
