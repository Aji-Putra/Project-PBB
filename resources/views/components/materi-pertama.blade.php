<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">1. Materi Pertama</h2>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="bersaf_kumpul">Bersaf Kumpul</label>
        <div id="bersaf_kumpul" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
                <?php
                $values = [0, 22, 25, 28, 31, 34, 37, 40];
                foreach ($values as $value):
                    $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
                ?>
                <div>
                    <input class="w-7 h-7 peer hidden font-bold" id="bersaf_kumpul_<?= $value ?>" type="radio" name="bersaf_kumpul" value="<?= $value ?>" required>
                    <label for="bersaf_kumpul_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
                </div>
                <?php endforeach; ?>
        </div>
    </div>
</div>

