<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">8. Variasi (Tidak Merubah Bentuk)</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="kekompakan_variasi">Kekompakan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="kekompakan_variasi" id="kekompakan_variasi">
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="tingkat_kesulitan_variasi">Tingkat Kesulitan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="tingkat_kesulitan_variasi" id="tingkat_kesulitan_variasi">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="kreativitas_variasi">Kreativitas</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="kreativitas_variasi" id="kreativitas_variasi">
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="keindahan_variasi">Keindahan/Estestis</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="keindahan_variasi" id="keindahan_variasi">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="perbaduan_pbb_murni_variasi">Perpaduan dengan PBB Murni</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="perbaduan_pbb_murni_variasi" id="perbaduan_pbb_murni_variasi">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
