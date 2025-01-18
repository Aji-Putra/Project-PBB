<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">7. Komandan</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="postur">Postur</label>
        <div id="postur" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="postur_<?= $value ?>" type="radio" name="postur" value="<?= $value ?>" required>
                <label for="postur_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="suara">Suara</label>
        <div id="suara" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="suara_<?= $value ?>" type="radio" name="suara" value="<?= $value ?>" required>
                <label for="suara_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="intonasi">Intonasi, Kata, Irama, Tempo</label>
        <div id="intonasi" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="intonasi_<?= $value ?>" type="radio" name="intonasi" value="<?= $value ?>" required>
                <label for="intonasi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="penguasaan_materi">Penguasaan Materi</label>
        <div id="penguasaan_materi" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="penguasaan_materi_<?= $value ?>" type="radio" name="penguasaan_materi" value="<?= $value ?>" required>
                <label for="penguasaan_materi_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="penguasaan_lapangan_pasukan">Penguasaan Lapang & Pasukan</label>
        <div id="penguasaan_lapangan_pasukan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [4, 5, 6, 7, 8, 9, 10];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="penguasaan_lapangan_pasukan_<?= $value ?>" type="radio" name="penguasaan_lapangan_pasukan" value="<?= $value ?>" required>
                <label for="penguasaan_lapangan_pasukan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
