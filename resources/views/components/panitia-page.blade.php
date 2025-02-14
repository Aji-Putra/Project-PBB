@props(['sekolah'])

<div class="flex flex-col gap-2 max-w-screen-xl px-0 mx-auto mb-3 md:px-2 lg:px-3">
    <h1 class="text-2xl">Selamat Datang, {{ Auth::user()->name }}</h1>
    <p class="text-lg">Pilih Peserta yang akan dinilai</p>
</div>
<div class="md:max-w-[1080px] max-w-[720px] mx-auto">
    <div class="w-full flex justify-end items-center gap-2" x-data="{ tambahPeserta: false }">
        <a class="w-40 bg-green-500 text-white px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-green-500"
            href="{{ url('/rekap') }}">Rekap</a>
        {{-- <a class="w-40 bg-yellow-500 text-black px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-yellow-500"
            href="{{ url('/cetak-semua-sekolah') }}">Cetak</a> --}}
        {{-- <button @click="tambahPeserta = true"
            class="w-40 mb-4 px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
            Tambah Peserta
        </button> --}}
        {{-- <div x-show="tambahPeserta" class="fixed inset-0 transition-opacity" aria-hidden="true"
            @click="tambahPeserta = false">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div> --}}
        {{-- <form action="{{ url('/tambah/sekolah') }}" method="POST">
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
                                        <label for="nomor_peserta">Nomor Peserta</label>
                                        <input class="border border-black p-1 px-2 rounded focus:border-transparent focus:outline-none focus:ring-blue-500 focus:ring-2" type="text" name="nomor_peserta">
                                        <label for="nama_sekolah">Nama Sekolah</label>
                                        <select name="nama_sekolah" id="nama_sekolah" class="border border-black p-1 px-2 rounded focus:border-transparent focus:outline-none focus:ring-blue-500 focus:ring-2">
                                            <option class="text-gray-500" value="">Pilih Nama Sekolah</option>
                                            <option value="SMP Negeri 2 Dayeuh Kolot">SMP Negeri 2 Dayeuh Kolot</option>
                                            <option value="SMP Negeri 2 Katapang C">SMP Negeri 2 Katapang C</option>
                                            <option value="SMP Negeri 2 Kersamanah Garut">SMP Negeri 2 Kersamanah Garut</option>
                                            <option value="SMP Negeri 1 Bojongsoang A">SMP Negeri 1 Bojongsoang A</option>
                                            <option value="SMP Negeri 2 Katapang A">SMP Negeri 2 Katapang A</option>
                                            <option value="SMP Negeri 2 Cileunyi 2 B">SMP Negeri 2 Cileunyi 2 B</option>
                                            <option value="SMP Negeri 3 Padalarang E">SMP Negeri 3 Padalarang E</option>
                                            <option value="SMP Negeri 28 Bandung">SMP Negeri 28 Bandung</option>
                                            <option value="SMP Negeri 3 Padalarang B">SMP Negeri 3 Padalarang B</option>
                                            <option value="SMP Negeri 2 Cileunyi 2 C">SMP Negeri 2 Cileunyi 2 C</option>
                                            <option value="Daarut Tauhid Boarding School Putri">Daarut Tauhid Boarding School Putri</option>
                                            <option value="SMP Negeri 3 Padalarang A">SMP Negeri 3 Padalarang A</option>
                                            <option value="SMP Negeri 2 Katapang D">SMP Negeri 2 Katapang D</option>
                                            <option value="SMP Negeri 3 Padalarang F">SMP Negeri 3 Padalarang F</option>
                                            <option value="SMP Negeri 9 Bandung">SMP Negeri 9 Bandung</option>
                                            <option value="SMP Negeri 3 Padalarang C">SMP Negeri 3 Padalarang C</option>
                                            <option value="SMP Negeri 1 Bojongsoang B">SMP Negeri 1 Bojongsoang B</option>
                                            <option value="SMP Negeri 2 Katapang B">SMP Negeri 2 Katapang B</option>
                                            <option value="SMP Negeri 2 Cileunyi 2 A">SMP Negeri 2 Cileunyi 2 A</option>
                                            <option value="SMP Darul Hikmah">SMP Darul Hikmah</option>
                                            <option value="SMP Negeri 3 Padalarang D">SMP Negeri 3 Padalarang D</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="submit"  class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 sm:ml-3 sm:w-auto sm:text-sm">
                                Lanjutkan
                            </button>
                            <button type="button" @click="tambahPeserta = false"
                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Batalkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form> --}}
    </div>
    <x-table-panitia :sekolah="$sekolah"></x-table-panitia>
</div>
