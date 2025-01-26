<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">2. Gerakan di Tempat</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="sikap_sempurna">Sikap Sempurna</label>
        <div id="sikap_sempurna" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="sikap_sempurna_<?= $value ?>" type="radio" name="sikap_sempurna" value="<?= $value ?>" required>
                <label for="sikap_sempurna_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="istirahat_di_tempat">Istirahat di Tempat &#40;Biasa&#41;</label>
        <div id="istirahat_di_tempat" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="istirahat_di_tempat_<?= $value ?>" type="radio" name="istirahat_di_tempat" value="<?= $value ?>" required>
                <label for="istirahat_di_tempat_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="hormat">Hormat</label>
        <div id="hormat" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="hormat_<?= $value ?>" type="radio" name="hormat" value="<?= $value ?>" required>
                <label for="hormat_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="periksa_kerapihan">Periksa Kerapihan &#40;Parade&#41;</label>
        <div id="periksa_kerapihan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [22, 25, 28, 31, 34, 37, 40];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="periksa_kerapihan_<?= $value ?>" type="radio" name="periksa_kerapihan" value="<?= $value ?>" required>
                <label for="periksa_kerapihan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="setengah_lengan_lencang_kiri">1/2 Lengan Lencang Kiri</label>
        <div id="setengah_lengan_lencang_kiri" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="setengah_lengan_lencang_kiri_<?= $value ?>" type="radio" name="setengah_lengan_lencang_kiri" value="<?= $value ?>" required>
                <label for="setengah_lengan_lencang_kiri_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="lencang_kanan">Lencang Kanan</label>
        <div id="lencang_kanan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="lencang_kanan_<?= $value ?>" type="radio" name="lencang_kanan" value="<?= $value ?>" required>
                <label for="lencang_kanan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="hadap_kanan">Hadap Kanan</label>
        <div id="hadap_kanan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="hadap_kanan_<?= $value ?>" type="radio" name="hadap_kanan" value="<?= $value ?>" required>
                <label for="hadap_kanan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="lencang_depan">Lencang Depan</label>
        <div id="lencang_depan" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="lencang_depan_<?= $value ?>" type="radio" name="lencang_depan" value="<?= $value ?>" required>
                <label for="lencang_depan_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="hadap_kiri">Hadap Kiri</label>
        <div id="hadap_kiri" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="hadap_kiri_<?= $value ?>" type="radio" name="hadap_kiri" value="<?= $value ?>" required>
                <label for="hadap_kiri_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="jalan_di_tempat">Jalan di Tempat</label>
        <div id="jalan_di_tempat" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
                $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="jalan_di_tempat_<?= $value ?>" type="radio" name="jalan_di_tempat" value="<?= $value ?>" required>
                <label for="jalan_di_tempat_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="balik_kanan_henti">Balik Kanan Henti</label>
        <div id="balik_kanan_henti" class="flex flex-wrap gap-4 bg-white p-1 px-2 rounded">
            <?php
            $values = [14, 15, 16, 17, 18, 19, 20];
            foreach ($values as $value):
            $paddingClass = $value < 10 ? 'px-3' : 'px-2';
            ?>
            <div>
                <input class="w-7 h-7 peer hidden font-bold" id="balik_kanan_henti_<?= $value ?>" type="radio" name="balik_kanan_henti" value="<?= $value ?>" required>
                <label for="balik_kanan_henti_<?= $value ?>" class="block border border-gray-500 cursor-pointer select-none rounded-xl p-1 <?= $paddingClass ?> text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white transition-all"><?= $value ?></label>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
