document.getElementById('submit-btn').addEventListener('click', function (event) {
    // Cari semua input radio yang bersifat "required"
    const requiredRadios = document.querySelectorAll('input[type="radio"][required]');
    let allFilled = true;

    requiredRadios.forEach((radio) => {
        // Cari semua radio dengan name yang sama
        const groupName = radio.name;
        const radiosInGroup = document.querySelectorAll(`input[name="${groupName}"]`);
        const isSelected = Array.from(radiosInGroup).some(radio => radio.checked);

        // Highlight jika tidak ada yang dipilih
        const parentDiv = radio.closest('.flex'); // Cari parent div terdekat untuk highlight
        if (!isSelected) {
            allFilled = false;
            parentDiv.classList.add('border-red-500'); // Tambahkan highlight
        } else {
            parentDiv.classList.remove('border-red-500'); // Hapus highlight
        }
    });

    if (!allFilled) {
        event.preventDefault(); // Hentikan submit
        alert('Harap isi semua pilihan yang diperlukan.');
    }
});
