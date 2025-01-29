<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">Penalti</h2>
    <input type="hidden" name="juri_id" value="{{ Auth::user()->id }}">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-1 gap-5">
        <label for="tidak_daftar_ulang" class="flex gap-2 items-center justify-between">Tidak Daftar Ulang
            <input class="w-5 h-5" type="checkbox" name="tidak_daftar_ulang" id="tidak_daftar_ulang" value="25">
        </label>
        <label for="tidak_ikut_upacara_pembukaan" class="flex gap-2 items-center justify-between">Tidak Ikut Upacara Pembukaan
            <input class="w-5 h-5" type="checkbox" name="tidak_ikut_upacara_pembukaan" id="tidak_ikut_upacara_pembukaan" value="25">
        </label>
        <label for="terlambat_ke_dp_1" class="flex gap-2 items-center justify-between">Terlambat ke DP 1
            <input class="w-5 h-5" type="checkbox" name="terlambat_ke_dp_1" id="terlambat_ke_dp_1" value="25">
        </label>
        <label for="tidak_sesuai_nomor_urut" class="flex gap-2 items-center justify-between">Tidak Tampil Sesuai Nomor Urut
            <input class="w-5 h-5" type="checkbox" name="tidak_sesuai_nomor_urut" id="tidak_sesuai_nomor_urut" value="25">
        </label>
        <label for="terlewat_tampil" class="flex gap-2 items-center justify-between">Terlewat Tampil
            <input class="w-5 h-5" type="checkbox" name="terlewat_tampil" id="terlewat_tampil" value="25">
        </label>
        <label for="kurang_lebih_personil" class="flex gap-2 items-center justify-between">Kurang/Lebih Personil
            <input class="w-5 h-5" type="checkbox" name="kurang_lebih_personil" id="kurang_lebih_personil" value="25">
        </label>
        <label for="anggota_sakit_di_lapangan" class="flex gap-2 items-center justify-between">Anggota Sakit/Pingsan di Lapangan
            <input class="w-5 h-5" type="checkbox" name="anggota_sakit_di_lapangan" id="anggota_sakit_di_lapangan" value="25">
        </label>
        <label for="merusak_properti" class="flex gap-2 items-center justify-between">Merusak Properti/Sarana
            <input class="w-5 h-5" type="checkbox" name="merusak_properti" id="merusak_properti" value="50">
        </label>
        <label for="melewati_garis_batas" class="flex gap-2 items-center justify-between">Menginjak/Melewati Garis Batas
            <input class="w-5 h-5" type="checkbox" name="melewati_garis_batas" id="melewati_garis_batas" value="50">
        </label>
        <label for="melebihi_waktu" class="flex gap-2 items-center justify-between">Melebihi Waktu Normal
            <input class="w-5 h-5" type="checkbox" name="melebihi_waktu" id="melebihi_waktu" value="25">
        </label>
        <label for="manipulasi_anggota" class="flex gap-2 items-center justify-between">Manipulasi Anggota
            <input class="w-5 h-5" type="checkbox" name="manipulasi_anggota" id="manipulasi_anggota" value="DIS">
        </label>
    </div>
</div>
