<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">1. Kostum</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="kelengkapan_atribut">Kelengkapan & Atribut</label>
        <div id="kelengkapan_atribut" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [2, 3, 4, 5, 6, 7, 8, 9];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kelengkapan_atribut_<?= $value ?>" type="radio" name="kelengkapan_atribut" value="<?= $value ?>" required>
                <label for="kelengkapan_atribut_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="keindahan_kerapihan">Keindahan & Kerapihan</label>
        <div id="keindahan_kerapihan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [2, 3, 4, 5, 6, 7, 8, 9];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="keindahan_kerapihan_<?= $value ?>" type="radio" name="keindahan_kerapihan" value="<?= $value ?>" required>
                <label for="keindahan_kerapihan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
