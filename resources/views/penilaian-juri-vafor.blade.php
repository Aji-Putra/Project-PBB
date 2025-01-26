<x-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('penilaian-vafor') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ auth()->user()->name }}" name="nama_juri">
        <input type="hidden" value="{{ $sekolahID->id }}" name="sekolah_id">
    <div class="bg-white p-4 rounded shadow-lg mb-4">
        <h1 class="text-xl font-medium">Nomor Peserta: {{ $sekolahID->nomor_peserta }} </h1>
        <h1 class="text-xl font-medium">Nama Sekolah: {{ $sekolahID->nama_sekolah }} </h1>
    </div>
    <h1 class="font-bold text-xl">Penilaian Variasi dan Formasi</h1>
    <hr class="mt border-black">
    <x-penilaian-variasi></x-penilaian-variasi>
    <x-penilaian-formasi></x-penilaian-formasi>
    <h1 class="font-bold text-xl">Penilaian Pasukan</h1>
    <hr class="mt border-black">
    <x-penilaian-pasukan></x-penilaian-pasukan>
    <h1 class="font-bold text-xl">Penalti</h1>
    <hr class="mt border-black">
    <x-penalti></x-penalti>
    <div x-data="{ kirimPenilaian: false, email: '' }">
        <!-- Button to open the modal -->
        <a @click="kirimPenilaian = true" class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500 cursor-pointer"> Kirim </a>
        <!-- Background overlay -->
        <div x-show="kirimPenilaian" class="fixed inset-0 transition-opacity" aria-hidden="true" @click="kirimPenilaian = false">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- Modal -->
        <div x-show="kirimPenilaian" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="fixed z-10 inset-0 overflow-y-auto" x-cloak>
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Modal panel -->
            <div class="w-full inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-20 sm:my-40 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <!-- Modal content -->
                <div class="sm:flex sm:items-start">
                    <div class="w-full mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">Mohon dikoreksi kembali penilaiannya.</h3>
                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">Penilaian yang sudah dikirim, tidak bisa diubah kembali.</h3>
                    </div>
                </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <!-- Subscribe button -->
                <button id="submit-btn" type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm"> Lanjutkan </button>
                <!-- Cancel button -->
                <button @click="kirimPenilaian = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"> Batalkan </button>
                </div>
            </div>
            </div>
        </div>
    </div>
</form>
<script>
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
</script>
</x-layout>
