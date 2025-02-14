<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">2. Variasi (Tidak Merubah Bentuk)</h2>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kekompakan_variasi">Kekompakan</label>
        <div id="kekompakan_variasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 14, 16, 18, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kekompakan_variasi_<?= $value ?>" type="radio" name="kekompakan_variasi" value="<?= $value ?>" required>
                <label for="kekompakan_variasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="tingkat_kesulitan_variasi">Tingkat Kesulitan</label>
        <div id="tingkat_kesulitan_variasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 14, 16, 18, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="tingkat_kesulitan_variasi_<?= $value ?>" type="radio" name="tingkat_kesulitan_variasi" value="<?= $value ?>" required>
                <label for="tingkat_kesulitan_variasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kreativitas_variasi">Kreativitas</label>
        <div id="kreativitas_variasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 14, 16, 18, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kreativitas_variasi_<?= $value ?>" type="radio" name="kreativitas_variasi" value="<?= $value ?>" required>
                <label for="kreativitas_variasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="keindahan_variasi">Keindahan/Estestis</label>
        <div id="keindahan_variasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="keindahan_variasi_<?= $value ?>" type="radio" name="keindahan_variasi" value="<?= $value ?>" required>
                <label for="keindahan_variasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="perpaduan_pbb_murni_variasi">Perpaduan dengan PBB Murni</label>
        <div id="perpaduan_pbb_murni_variasi" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [0, 21, 24, 27, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="perpaduan_pbb_murni_variasi_<?= $value ?>" type="radio" name="perpaduan_pbb_murni_variasi" value="<?= $value ?>" required>
                <label for="perpaduan_pbb_murni_variasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
