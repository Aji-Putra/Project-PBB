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
            <a class="w-40 bg-green-500 text-white px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-green-500" href="{{ url('/dashboard') }}">Penilaian Peserta</a>
            <button @click="tambahPeserta = true" class="w-40 mb-4 px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                Tambah Peserta
            </button>
            <div x-show="tambahPeserta" class="fixed inset-0 transition-opacity" aria-hidden="true" @click="tambahPeserta = false">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <form action="{{ url('/tambah/sekolah') }}" method="POST">
                @csrf
                <input type="hidden" name="status" value="Belum Di Nilai">
                <div x-show="tambahPeserta" class="fixed z-10 inset-0 overflow-y-auto">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-20 sm:my-40 sm:align-middle sm:max-w-lg sm:w-full" role="dialog">
                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">Tambah Peserta</h3>
                                        <div class="mt-2 flex flex-col gap-1">
                                            <label for="">Nomor Peserta</label>
                                            <input class="border border-black p-1 px-2 rounded focus:border-transparent focus:outline-none focus:ring-blue-500 focus:ring-2" type="text" name="nomor_peserta">
                                            <label for="">Nama Sekolah</label>
                                            <input class="border border-black p-1 px-2 rounded focus:border-transparent focus:outline-none focus:ring-blue-500 focus:ring-2" type="text" name="nama_sekolah">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                <button type="submit"  class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 sm:ml-3 sm:w-auto sm:text-sm">
                                    Lanjutkan
                                </button>
                                <button @click="tambahPeserta = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                    Batalkan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="relative flex flex-col w-full h-full overflow-scroll lg:overflow-hidden text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Juara</th>
                        <th class="border px-4 py-2">Nomor Peserta</th>
                        <th class="border px-4 py-2">Nama Sekolah</th>
                        <th class="border px-4 py-2">PBB</th>
                        <th class="border px-4 py-2">Pasukan</th>
                        <th class="border px-4 py-2">VAFOR</th>
                        <th class="border px-4 py-2">Kostum</th>
                        <th class="border px-4 py-2">Penalti</th>
                        <th class="border px-4 py-2">Total Nilai</th>
                        <th class="border px-4 py-2">Cetak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rekapData as $rank => $data)
                        <tr>
                            <td class="border px-4 py-2">{{ $rank + 1 }}</td>
                            <td class="border px-4 py-2">{{ $data['nomor_peserta'] }}</td>
                            <td class="border px-4 py-2">{{ $data['nama_sekolah'] }}</td>
                            <td class="border px-4 py-2">{{ $data['pbb'] }}</td>
                            <td class="border px-4 py-2">{{ $data['pasukan'] }}</td>
                            <td class="border px-4 py-2">{{ $data['vafor'] }}</td>
                            <td class="border px-4 py-2">{{ $data['kostum'] }}</td>
                            <td class="border px-4 py-2">{{ $data['penalti'] }}</td>
                            <td class="border px-4 py-2">{{ $data['total_nilai'] }}</td>
                            <td class="border px-4 py-2"><a href=""></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


            </div>

    </div>
</x-layout>
