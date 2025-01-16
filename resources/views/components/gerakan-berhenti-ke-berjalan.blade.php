<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">4. Gerakan Berhenti ke Berjalan</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="maju_jalan">Maju Jalan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="maju_jalan" id="maju_jalan" required>
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="langkah_tegap">Langkah Tegap</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="langkah_tegap" id="langkah_tegap" required>
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="langkah_berlari">Langkah Berlari</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="langkah_berlari" id="langkah_berlari" required>
            <option value="" selected>Nilai Maks: 30</option>
            <?php for ($i = 1; $i <= 30; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
