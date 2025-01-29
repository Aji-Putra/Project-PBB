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
    <form action="{{ url('/sumbit/penilaian/kostum') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ auth()->user()->id }}" name="juri_id">
        <input type="hidden" value=" {{ $sekolahID->id }}" name="sekolah_id">
    <div class="bg-white p-4 rounded shadow-lg mb-4">
        <h1 class="text-xl font-medium">Nomor Peserta: {{ $sekolahID->nomor_peserta }} </h1>
        <h1 class="text-xl font-medium">Nama Sekolah: {{ $sekolahID->nama_sekolah }} </h1>
    </div>
    <h1 class="font-bold text-xl">Penalti</h1>
    <hr class="mt border-black">
    <x-penalti></x-penalti>
</form>
<script src="{{ Storage::url('js/radio-btn.js') }}"></script>
</x-layout>
