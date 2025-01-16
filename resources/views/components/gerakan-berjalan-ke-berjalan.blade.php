<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">5. Gerakan Berjalan ke Berjalan</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="hormat_kiri">Hormat Kiri</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="hormat_kiri" id="hormat_kiri" required>
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="tiap_banjar_belok_kanan">Tiap-Tiap Banjar 2x Belok Kanan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="tiap_banjar_belok_kanan" id="tiap_banjar_belok_kanan" required>
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="melintang_kiri">Melintang Kiri</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="melintang_kiri" id="melintang_kiri" required>
            <option value="" selected>Nilai Maks: 30</option>
            <?php for ($i = 1; $i <= 30; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="haluan_kiri">Haluan Kiri</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="haluan_kiri" id="haluan_kiri" required>
            <option value="" selected>Nilai Maks: 30</option>
            <?php for ($i = 1; $i <= 30; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="tiap_banjar_belok_kiri">Tiap-Tiap Banjar 2x Belok Kiri</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="tiap_banjar_belok_kiri" id="tiap_banjar_belok_kiri" required>
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
