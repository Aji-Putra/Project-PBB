<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">4. Gerakan Berhenti ke Berjalan</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="maju_jalan">Maju Jalan</label>
        <div id="maju_jalan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="maju_jalan_<?= $value ?>" type="radio" name="maju_jalan" value="<?= $value ?>" required>
                <label for="maju_jalan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="langkah_tegap">Langkah Tegap</label>
        <div id="langkah_tegap" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="langkah_tegap_<?= $value ?>" type="radio" name="langkah_tegap" value="<?= $value ?>" required>
                <label for="langkah_tegap_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="langkah_berlari">Langkah Berlari</label>
        <div id="langkah_berlari" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [22, 25, 28, 31, 34, 37, 40];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="langkah_berlari_<?= $value ?>" type="radio" name="langkah_berlari" value="<?= $value ?>" required>
                <label for="langkah_berlari_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="hormat_kiri">Hormat Kiri</label>
        <div id="hormat_kiri" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="hormat_kiri_<?= $value ?>" type="radio" name="hormat_kiri" value="<?= $value ?>" required>
                <label for="hormat_kiri_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
