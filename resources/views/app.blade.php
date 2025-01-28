{{-- @php
    dd($sekolah);
@endphp --}}
<x-layout>
    @if (Auth::user()->role === 'panitia')
        <x-panitia-page :sekolah="$sekolah"></x-panitia-page>
    @else
        <x-juri-page :sekolah="$sekolah"></x-juri-page>
    @endif
</x-layout>
