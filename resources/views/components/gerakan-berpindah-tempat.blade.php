<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">3. Gerakan Berpindah Tempat</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="tiga_langkah_kanan">3 Langkah ke Kanan</label>
        <div id="tiga_langkah_kanan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="tiga_langkah_kanan_<?= $value ?>" type="radio" name="tiga_langkah_kanan" value="<?= $value ?>" required>
                <label for="tiga_langkah_kanan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="tiga_langkah_kiri">3 Langkah ke Kiri</label>
        <div id="tiga_langkah_kiri" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="tiga_langkah_kiri_<?= $value ?>" type="radio" name="tiga_langkah_kiri" value="<?= $value ?>" required>
                <label for="tiga_langkah_kiri_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="tiga_langkah_depan">3 Langkah ke Depan</label>
        <div id="tiga_langkah_depan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="tiga_langkah_depan_<?= $value ?>" type="radio" name="tiga_langkah_depan" value="<?= $value ?>" required>
                <label for="tiga_langkah_depan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="tiga_langkah_belakang">3 Langkah ke Belakang</label>
        <div id="tiga_langkah_belakang" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="tiga_langkah_belakang_<?= $value ?>" type="radio" name="tiga_langkah_belakang" value="<?= $value ?>" required>
                <label for="tiga_langkah_belakang_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
