<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">6. Materi Terakhir (Setelah Vafor)</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="bubar_jalan">Bubar Jalan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="bubar_jalan" id="bubar_jalan">
            <option value="" selected>Nilai Maks: 20</option>
            <?php for ($i = 1; $i <= 20; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
