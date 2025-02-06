<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">1. Kostum</h2>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kelengkapan_atribut">Kelengkapan & Atribut</label>
        <div id="kelengkapan_atribut" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kelengkapan_atribut_<?= $value ?>" type="radio" name="kelengkapan_atribut" value="<?= $value ?>" required>
                <label for="kelengkapan_atribut_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="keindahan">Keindahan</label>
        <div id="keindahan" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="keindahan_<?= $value ?>" type="radio" name="keindahan" value="<?= $value ?>" required>
                <label for="keindahan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="keseragaman">Keseragaman</label>
        <div id="keseragaman" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="keseragaman_<?= $value ?>" type="radio" name="keseragaman" value="<?= $value ?>" required>
                <label for="keseragaman_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kebersihan">Kebersihan</label>
        <div id="kebersihan" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kebersihan_<?= $value ?>" type="radio" name="kebersihan" value="<?= $value ?>" required>
                <label for="kebersihan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex md:flex-row flex-col gap-2 md:items-center items-start justify-between">
        <label for="kerapihan">Kerapihan</label>
        <div id="kerapihan" class="flex flex-wrap gap-4 bg-transparent p-1 px-2 rounded md:text-base text-xs">
            <?php
            $values = [18, 20, 22, 24, 26, 28, 30];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'md:px-3 px-2' : 'md:px-2 px-1';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="kerapihan_<?= $value ?>" type="radio" name="kerapihan" value="<?= $value ?>" required>
                <label for="kerapihan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none md:rounded-xl rounded-md p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
