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
    <form action="{{ url('/submit/penilaian/vafor') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ auth()->user()->id }}" name="juri_id">
        <input type="hidden" value="{{ $sekolahID->id }}" name="sekolah_id">
        <div class="bg-white p-4 rounded shadow-lg mb-4">
            <h1 class="text-xl font-medium">Nomor Peserta: {{ $sekolahID->nomor_peserta }} </h1>
            <h1 class="hidden text-xl font-medium">Nama Sekolah: {{ $sekolahID->nama_sekolah }} </h1>
        </div>
        <div class="w-full flex justify-end">
            <a href="{{ url()->previous() }}" class="w-20 bg-yellow-500 text-black px-4 py-2 text-sm font-medium flex justify-center mb-4 rounded-md border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-yellow-500">Kembali</a>
        </div>
        <h1 class="font-bold text-xl">Penilaian Variasi dan Formasi</h1>
        <hr class="mt border-black">
        <x-penilaian-variasi></x-penilaian-variasi>
        <x-penilaian-formasi></x-penilaian-formasi>
        <h1 class="font-bold text-xl">Penilaian Pasukan</h1>
        <hr class="mt border-black">
        <x-penilaian-pasukan></x-penilaian-pasukan>
        <x-submit-nilai></x-submit-nilai>
    </form>
<script src="{{ Storage::url('js/radio-btn.js') }}"></script>
</x-layout>
