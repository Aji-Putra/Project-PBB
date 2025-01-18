<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">1. Materi Pertama</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="bersaf_kumpul">Bersaf Kumpul</label>
        <div id="bersaf_kumpul" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
                <?php
                $values = [12, 15, 18, 21, 24, 27, 30];
                foreach ($values as $value):
                ?>
                <div>
                    <input class="w-7 h-7 peer hidden font-bold" id="bersaf_kumpul_<?= $value ?>" type="radio" name="bersaf_kumpul" value="<?= $value ?>" required>
                    <label for="bersaf_kumpul_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 px-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
                </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>

