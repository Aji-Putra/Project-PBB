<div class="relative flex flex-col w-full h-full overflow-scroll lg:overflow-hidden text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
    <table class="w-full text-left table-auto min-w-max">
        <thead>
            <tr>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Nomor Peserta
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Nama Sekolah
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Status
                    </p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">
                        Aksi
                    </p>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="hover:bg-slate-700">
                <td class="p-4 border-b border-slate-700 bg-slate-900">
                    <p class="text-sm text-slate-100 font-semibold">
                        0853953
                    </p>
                </td>
                <td class="p-4 border-b border-slate-700 bg-slate-800">
                    <p class="text-sm text-slate-300">
                        SMK ABCD
                    </p>
                </td>
                <td class="p-4 border-b border-slate-700 bg-slate-900">
                    <p class="text-sm text-slate-300">
                        Belum Dinilai
                    </p>
                </td>
                <td class="p-4 border-b border-slate-700 bg-slate-800">
                 <div x-data="{ showModal: false, email: '' }">
                     <!-- Button to open the modal -->
                     <button @click="showModal = true" class="w-full px-4 py-2 text-sm text-white font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500"> Nilai </button>
                     <!-- Background overlay -->
                     <div x-show="showModal" class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showModal = false">
                         <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                     </div>
                     <!-- Modal -->
                     <div x-show="showModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="fixed z-10 inset-0 overflow-y-auto" x-cloak>
                         <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                         <!-- Modal panel -->
                         <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-20 sm:my-40 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                             <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                             <!-- Modal content -->
                             <div class="sm:flex sm:items-start">
                                 <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                 <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline"> Apakah kamu yakin ingin menilai peserta ini?</h3>
                                 <div class="mt-2 flex flex-col gap-1">
                                     <p class="text-sm text-black"> Nomor Peserta : </p>
                                     <p class="text-sm text-black"> Nama Sekolah : </p>
                                 </div>
                                 </div>
                             </div>
                             </div>
                             <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                             <!-- Subscribe button -->
                             <a @click="subscribeToNewsletter" href="/penilaian-juri" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm"> Lanjut Menilai </a>
                             <!-- Cancel button -->
                             <button @click="showModal = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"> Batalkan </button>
                             </div>
                         </div>
                         </div>
                     </div>
                 </div>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
