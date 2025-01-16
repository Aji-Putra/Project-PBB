<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">9. Formasi (Merubah Bentuk)</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="kekompakan_formasi">Kekompakan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="kekompakan_formasi" id="kekompakan_formasi" value="{{ old('kekompakan_formasi')}}">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="tingkat_kesulitan_formasi">Tingkat Kesulitan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="tingkat_kesulitan_formasi" id="tingkat_kesulitan_formasi">
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="dinamis_struktur_formasi">Dinamis Struktur</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="dinamis_struktur_formasi" id="dinamis_struktur_formasi">
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="pengunaan_pbb_murni_formasi">Penggunaan PBB Murni</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="penggunaan_pbb_murni_formasi" id="pengunaan_pbb_murni_formasi">
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="bentuk_akhir_formasi">Bentuk Akhir Formasi</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="bentuk_akhir_formasi" id="bentuk_akhir_formasi">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
