<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">10. Kostum</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="kelengkapan_atribut">Kelengkapan & Atribut</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="kelengkapan_atribut" id="kelengkapan_atribut" required>
            <option value="" selected>Nilai Maks: 9</option>
            <?php for ($i = 1; $i <= 9; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="keindahan_kerapihan">Keindahan & Kerapihan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="keindahan_kerapihan" id="keindahan_kerapihan" required>
            <option value="" selected>Nilai Maks: 9</option>
            <?php for ($i = 1; $i <= 9; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
