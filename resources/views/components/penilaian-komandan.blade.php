<div class="flex flex-col gap-2 mb-4">
    <h2 class="font-medium text-lg">7. Komandan</h2>
    <div class="flex gap-2 items-center justify-between">
        <label for="postur">Postur</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="postur" id="postur">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="suara">Suara</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="suara" id="suara">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="intonasi">Intonasi, Kata, Irama, Tempo</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="intonasi" id="intonasi">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="penguasaan_materi">Penguasaan Materi</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="penguasaan_materi" id="penguasaan_materi">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <div class="flex gap-2 items-center justify-between">
        <label for="penguasaan_lapangan_pasukan">Penguasaan Lapang & Pasukan</label>
        <select
            class="px-2 py-1 border border-black rounded focus:border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500"
            name="penguasaan_lapangan_pasukan" id="penguasaan_lapangan_pasukan">
            <option value="" selected>Nilai Maks: 10</option>
            <?php for ($i = 1; $i <= 10; $i++): ?>
            <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>
