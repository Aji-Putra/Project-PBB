<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">1. Materi Pertama</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="">Bersaf Kumpul</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="numbers" id="numbers">
            <option value="" selected>Nilai Maks: 30</option>
            <?php for ($i = 1; $i <= 30; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
