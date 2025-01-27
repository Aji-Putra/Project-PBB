<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">6. Materi Terakhir (Setelah Vafor)</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="bubar_jalan">Bubar Jalan</label>
        <div id="bubar_jalan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [0, 18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="bubar_jalan_<?= $value ?>" type="radio" name="bubar_jalan" value="<?= $value ?>" required>
                <label for="bubar_jalan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
