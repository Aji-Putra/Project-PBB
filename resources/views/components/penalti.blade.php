<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">Penalti</h2>
    <input type="hidden" name="juri_id" value="{{ Auth::user()->id }}">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-1 gap-5">
        <p class="flex gap-2 items-center justify-between">Tidak Daftar Ulang
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="tidak_ikut_daftar_ulang" id="tidak_ikut_daftar_ulang" value="25">
            <label for="tidak_ikut_daftar_ulang" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">25</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Tidak Ikut Upacara Pembukaan
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="tidak_ikut_upacara_pembukaan" id="tidak_ikut_upacara_pembukaan" value="25">
            <label for="tidak_ikut_upacara_pembukaan" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">25</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Terlambat ke DP 1
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="terlambat_ke_dp_1" id="terlambat_ke_dp_1" value="25">
            <label for="terlambat_ke_dp_1" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">25</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Terlambat ke DP 1
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="tidak_sesuai_nomor_urut" id="tidak_sesuai_nomor_urut" value="25">
            <label for="tidak_sesuai_nomor_urut" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">25</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Terlewat Tampil
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="terlewat_tampil" id="terlewat_tampil" value="25">
            <label for="terlewat_tampil" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">25</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Kurang/Lebih Personil
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="kurang_lebih_personil" id="kurang_lebih_personil" value="25">
            <label for="kurang_lebih_personil" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">25</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Anggota Sakit/Pingsan di Lapangan
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="anggota_sakit_di_lapangan" id="anggota_sakit_di_lapangan" value="25">
            <label for="anggota_sakit_di_lapangan" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">25</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Merusak Properti/Sarana
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="merusak_properti" id="merusak_properti" value="50">
            <label for="merusak_properti" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">50</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Menginjak/Melewati Garis Batas
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="melewati_garis_batas" id="melewati_garis_batas" value="50">
            <label for="melewati_garis_batas" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">50</label>
        </p>
        <p class="flex gap-2 items-center justify-between">Melebihi Waktu Normal
            <input class="[appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none w-32 h-10 peer p-1 px-2 md:rounded-xl rounded-md" placeholder="1 detik/-1 poin" type="number" name="melebihi_waktu" id="melebihi_waktu" value="0">
        </p>
        <p class="flex gap-2 items-center justify-between">Manipulasi Anggota
            <input class="w-5 h-5 peer hidden font-bold" type="checkbox" name="manipulasi_anggota" id="manipulasi_anggota" value="DIS">
            <label for="manipulasi_anggota" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 px-2 text-center peer-checked:bg-red-500 peer-checked:font-bold peer-checked:text-white transition-all">Diskualifikasi</label>
        </p>
    </div>
</div>
