{{-- @php
    dd($sekolah);
@endphp --}}
<x-layout>
    <div class="flex flex-col gap-2 max-w-screen-xl px-0 mx-auto mb-3 md:px-2 lg:px-3">
        <h1 class="text-2xl">Selamat Datang, {{ Auth::user()->name }}</h1>
        <p class="text-lg">Pilih Peserta yang akan dinilai</p>

    </div>

    <div class="md:max-w-[1080px] max-w-[720px] mx-auto">
        <div class="w-full flex justify-end items-center gap-2" x-data="{ tambahPeserta: false }">
            <a class="w-60 bg-green-500 text-white px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-green-500"
                href="/total-juri">Total Penilaian Setiap Juri</a>
            <a class="w-40 bg-blue-500 text-white px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500"
                href="{{ url('/dashboard') }}">Penilaian Peserta</a>
        </div>
        <div
            class="relative flex flex-col w-full h-full overflow-scroll lg:overflow-hidden text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Juara</th>
                        <th class="border px-4 py-2">Nomor Peserta</th>
                        <th class="border px-4 py-2">Nama Sekolah</th>
                        <th class="border px-4 py-2">PBB</th>
                        <th class="border px-4 py-2">Vafor</th>
                        <th class="border px-4 py-2">Kostum</th>
                        <th class="border px-4 py-2">Penalti</th>
                        <th class="border px-4 py-2">Total Nilai</th>
                        {{-- <th class="border px-4 py-2">Cetak</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rekapData as $rank => $data)
                        <tr>
                            <td class="border px-4 py-2">{{ $rank + 1 }}</td>
                            <td class="border px-4 py-2">{{ $data['nomor_peserta'] }}</td>
                            <td class="border px-4 py-2">{{ $data['nama_sekolah'] }}</td>
                            <td class="border px-4 py-2">{{ $data['pbb'] }}</td>
                            <td class="border px-4 py-2">{{ $data['vafor'] + $data['pasukan'] }}</td>
                            <td class="border px-4 py-2">{{ $data['kostum'] }}</td>
                            @if (intval($data['penalti']) === -1)
                                <td class="border px-4 py-2">DIS</td>
                            @else
                                <td class="border px-4 py-2">{{ $data['penalti'] ?? 0 }}</td>
                            @endif
                            <td class="border px-4 py-2">{{ $data['total_nilai'] }}</td>
                            {{-- <td class="border px-6 py-4">
                                <a href="{{ route('rekap.cetakPdf', $data['sekolah_id']) }}"
                                    class="w-32 flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">Cetak
                                    PDF</a>
                            </td> --}}

                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>

    </div>
</x-layout>
