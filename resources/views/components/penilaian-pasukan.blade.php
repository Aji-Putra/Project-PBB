<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">3. Pasukan</h2>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kerapihan_saf">Kerapihan Saf</label>
        <div id="kerapihan_saf" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kerapihan_saf_<?= $value ?>" type="radio" name="kerapihan_saf" value="<?= $value ?>" required>
                <label for="kerapihan_saf_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kerapihan_banjar">Kerapihan Banjar</label>
        <div id="kerapihan_banjar" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kerapihan_banjar_<?= $value ?>" type="radio" name="kerapihan_banjar" value="<?= $value ?>" required>
                <label for="kerapihan_banjar_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kekompakan_gerak">Kekompakan Gerak</label>
        <div id="kekompakan_gerak" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kekompakan_gerak_<?= $value ?>" type="radio" name="kekompakan_gerak" value="<?= $value ?>" required>
                <label for="kekompakan_gerak_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="penempatan_ketinggian_personel">Penempatan Ketinggian Personel</label>
        <div id="penempatan_ketinggian_personel" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="penempatan_ketinggian_personel_<?= $value ?>" type="radio" name="penempatan_ketinggian_personel" value="<?= $value ?>" required>
                <label for="penempatan_ketinggian_personel_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="formasi_keseluruhan">Performance Keseluruhan</label>
        <div id="formasi_keseluruhan" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="formasi_keseluruhan_<?= $value ?>" type="radio" name="formasi_keseluruhan" value="<?= $value ?>" required>
                <label for="formasi_keseluruhan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
