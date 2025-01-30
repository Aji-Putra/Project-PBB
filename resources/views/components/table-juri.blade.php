@props(['sekolah'])

<div
    class="relative flex flex-col w-full h-full overflow-scroll lg:overflow-hidden text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
    <table class="w-full text-left table-auto min-w-max">
        <thead>
            <tr>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">Nomor Peserta</p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="hidden text-sm font-normal leading-none text-slate-300">Nama Sekolah</p>
                </th>
                <th class="p-4 border-b border-slate-600 bg-slate-700">
                    <p class="text-sm font-normal leading-none text-slate-300">Aksi</p>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sekolah as $item)
                @php
                    $userId = Auth::user()->id;
                    $isUserEvaluated = \App\Models\NilaiPbb::where('juri_id', $userId)
                        ->where('sekolah_id', $item->id)
                        ->exists();
                    $vafor = \App\Models\NilaiVafor::where('juri_id', $userId)
                        ->where('sekolah_id', $item->id)
                        ->exists();
                    $kostum = \App\Models\NilaiKostum::where('juri_id', $userId)
                        ->where('sekolah_id', $item->id)
                        ->exists();
                @endphp
                <tr class="hover:bg-slate-700">
                    <td class="p-4 border-b border-slate-700 bg-slate-900">
                        <p class="text-sm text-slate-100 font-semibold">{{ $item->nomor_peserta }}</p>
                    </td>
                    <td class="p-4 border-b border-slate-700 bg-slate-800">
                        <p class="hidden text-sm text-slate-300">{{ $item->nama_sekolah }}</p>
                    </td>
                    <td class="p-4 border-b border-slate-700 bg-slate-800">
                        <div class="flex gap-4 items-center" x-data="{ showModal: false }">
                            @if (Auth::user()->role === 'PBB')
                                @if ($isUserEvaluated)
                                    <p>Anda sudah menilai sekolah ini</p>
                                @else
                                    <button @click="showModal = true"
                                        class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                        Nilai
                                    </button>
                                @endif
                            @elseif (Auth::user()->role === 'vafor')
                                @if ($vafor)
                                    <p>Anda sudah menilai sekolah ini</p>
                                @else
                                    <button @click="showModal = true"
                                        class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                        Nilai
                                    </button>
                                @endif
                            @elseif (Auth::user()->role === 'kostum')
                                @if ($kostum)
                                    <p>Anda sudah menilai sekolah ini</p>
                                @else
                                    <button @click="showModal = true"
                                        class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
                                        Nilai
                                    </button>
                                @endif
                            @endif

                            <div x-show="showModal" class="fixed inset-0 transition-opacity" aria-hidden="true"
                                @click="showModal = false">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>
                            <x-modal-nilai :item="$item"></x-modal-nilai>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
