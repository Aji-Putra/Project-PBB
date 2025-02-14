<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">3. Formasi (Merubah Bentuk)</h2>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kekompakan_formasi">Kekompakan</label>
        <div id="kekompakan_formasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 14, 16, 18, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kekompakan_formasi_<?= $value ?>" type="radio" name="kekompakan_formasi" value="<?= $value ?>" required>
                <label for="kekompakan_formasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="tingkat_kesulitan_formasi">Tingkat Kesulitan</label>
        <div id="tingkat_kesulitan_formasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 14, 16, 18, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="tingkat_kesulitan_formasi_<?= $value ?>" type="radio" name="tingkat_kesulitan_formasi" value="<?= $value ?>" required>
                <label for="tingkat_kesulitan_formasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="dinamis_struktur_formasi">Dinamis Struktur</label>
        <div id="dinamis_struktur_formasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 14, 16, 18, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="dinamis_struktur_formasi_<?= $value ?>" type="radio" name="dinamis_struktur_formasi" value="<?= $value ?>" required>
                <label for="dinamis_struktur_formasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="pengunaan_pbb_murni_formasi">Penggunaan PBB Murni</label>
        <div id="pengunaan_pbb_murni_formasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 21, 24, 27, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="pengunaan_pbb_murni_formasi_<?= $value ?>" type="radio" name="penggunaan_pbb_murni_formasi" value="<?= $value ?>" required>
                <label for="pengunaan_pbb_murni_formasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="bentuk_akhir_formasi">Bentuk Akhir Formasi</label>
        <div id="bentuk_akhir_formasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="bentuk_akhir_formasi_<?= $value ?>" type="radio" name="bentuk_akhir_formasi" value="<?= $value ?>" required>
                <label for="bentuk_akhir_formasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
