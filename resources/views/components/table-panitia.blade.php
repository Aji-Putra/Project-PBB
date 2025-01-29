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
                <p class="text-sm font-normal leading-none text-slate-300">Nama Sekolah</p>
            </th>
            <th class="p-4 border-b border-slate-600 bg-slate-700">
                <p class="text-sm font-normal leading-none text-slate-300">Aksi</p>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sekolah as $item)
            <tr class="hover:bg-slate-700">
                <td class="p-4 border-b border-slate-700 bg-slate-900">
                    <p class="text-sm text-slate-100 font-semibold">{{ $item->nomor_peserta }}</p>
                </td>
                <td class="p-4 border-b border-slate-700 bg-slate-800">
                    <p class="text-sm text-slate-300">{{ $item->nama_sekolah }}</p>
                </td>
                <td class="p-4 border-b border-slate-700 bg-slate-800">
                    <div class="flex gap-4 items-center">
                        @if ($item->status !== 'Sudah Registrasi')
                            <a class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-green-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-green-500"
                                href="/registrasi/{{ $item->id }}">Registrasi</a>
                        @else
                            <p class="text-sm font-medium w-full text-slate-300">Sudah Registrasi</p>
                        @endif
                        <a class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-red-500" href="/penalti/{{ $item->id }}">Penalti</a>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
