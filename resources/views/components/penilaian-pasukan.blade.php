<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">11. Pasukan</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="kerapihan_saf">Kerapihan Saf</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="kerapihan_saf" id="kerapihan_saf" required>
            <option value="" selected>Nilai Maks: 7</option>
            <?php for ($i = 1; $i <= 7; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="kerapihan_banjar">Kerapihan Banjar</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="kerapihan_banjar" id="kerapihan_banjar" required>
            <option value="" selected>Nilai Maks: 7</option>
            <?php for ($i = 1; $i <= 7; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="kekompakan_gerak">Kekompakan Gerak</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="kekompakan_gerak" id="kekompakan_gerak" required>
            <option value="" selected>Nilai Maks: 9</option>
            <?php for ($i = 1; $i <= 9; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="penempatan_ketinggian_personel">Penempatan Ketinggian Personel</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="penempatan_ketinggian_personel" id="penempatan_ketinggian_personel" required>
            <option value="" selected>Nilai Maks: 8</option>
            <?php for ($i = 1; $i <= 8; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="formasi_keseluruhan">Performance Keseluruhan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="formasi_keseluruhan" id="formasi_keseluruhan" required>
            <option value="" selected>Nilai Maks: 9</option>
            <?php for ($i = 1; $i <= 9; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
