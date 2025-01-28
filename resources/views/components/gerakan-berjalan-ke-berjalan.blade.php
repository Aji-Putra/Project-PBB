<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">5. Gerakan Berjalan ke Berjalan</h2>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="tiap_banjar_belok_kanan">Tiap-Tiap Banjar 2x Belok Kanan</label>
        <div id="tiap_banjar_belok_kanan" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="tiap_banjar_belok_kanan_<?= $value ?>" type="radio" name="tiap_banjar_belok_kanan" value="<?= $value ?>" required>
                <label for="tiap_banjar_belok_kanan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="melintang_kiri">Melintang Kiri</label>
        <div id="melintang_kiri" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 22, 25, 28, 31, 34, 37, 40];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="melintang_kiri_<?= $value ?>" type="radio" name="melintang_kiri" value="<?= $value ?>" required>
                <label for="melintang_kiri_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="haluan_kiri">Haluan Kiri</label>
        <div id="haluan_kiri" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 22, 25, 28, 31, 34, 37, 40];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="haluan_kiri_<?= $value ?>" type="radio" name="haluan_kiri" value="<?= $value ?>" required>
                <label for="haluan_kiri_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="tiap_banjar_belok_kiri">Tiap-Tiap Banjar 2x Belok Kiri</label>
        <div id="tiap_banjar_belok_kiri" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="tiap_banjar_belok_kiri_<?= $value ?>" type="radio" name="tiap_banjar_belok_kiri" value="<?= $value ?>" required>
                <label for="tiap_banjar_belok_kiri_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
