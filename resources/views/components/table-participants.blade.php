<div class="relative flex flex-col w-full h-full overflow-scroll lg:overflow-hidden text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
    <table class="w-full text-left table-auto min-w-max">
        <thead>
            <tr>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">Nomor Peserta</p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">Nama Sekolah</p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">Status</p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">Aksi</p>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($sekolah as $item)
            <tr class="hover:bg-slate-700">
                <td class="p-4 border-b border-slate-700 bg-slate-900">
                    <p class="text-sm text-slate-100 font-semibold">{{ $item->nomor_peserta }}</p>
                </td>
                <td class="p-4 border-b border-slate-700 bg-slate-800">
                    <p class="text-sm text-slate-300">{{ $item->nama_sekolah }}</p>
                </td>
                <td class="p-4 border-b border-slate-700 bg-slate-900">
                    <p class="text-sm text-slate-300">Belum Dinilai</p>
                </td>
                <td class="p-4 border-b border-slate-700 bg-slate-800">
                    <div x-data="{ showModal: false }">
                        <button @click="showModal = true" class="w-full px-4 py-2 text-sm text-white font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                            Nilai
                        </button>
                        <div x-show="showModal" class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showModal = false">
                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <div x-show="showModal" class="fixed z-10 inset-0 overflow-y-auto">
                            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-20 sm:my-40 sm:align-middle sm:max-w-lg sm:w-full" role="dialog">
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                            <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900">Apakah kamu yakin ingin menilai peserta ini?</h3>
                                                <div class="mt-2 flex flex-col gap-1">
                                                    <p class="text-sm text-black">Nomor Peserta: {{ $item->nomor_peserta }}</p>
                                                    <p class="text-sm text-black">Nama Sekolah: {{ $item->nama_sekolah }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <a href="/penilaian-juri/{{ $item->id }}" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 sm:ml-3 sm:w-auto sm:text-sm">
                                            Lanjut Menilai
                                        </a>
                                        <button @click="showModal = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                            Batalkan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>    
    </div>
