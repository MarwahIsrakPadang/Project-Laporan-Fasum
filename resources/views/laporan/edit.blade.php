<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Laporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    
                    <div class="mb-4">
                        <x-input-label for="judul_laporan" :value="__('Nama Fasilitas')" />
                        <x-text-input name="judul_laporan" type="text" class="mt-1 block w-full" :value="$laporan->judul_laporan" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="lokasi" :value="__('Lokasi')" />
                        <x-text-input name="lokasi" type="text" class="mt-1 block w-full" :value="$laporan->lokasi" required />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="deskripsi_laporan" :value="__('Keluhan / Deskripsi')" />
                        <textarea name="deskripsi_laporan" class="w-full border-gray-300 rounded-md shadow-sm" rows="4" required>{{ $laporan->deskripsi_laporan }}</textarea>
                    </div>

                    <x-primary-button>{{ __('Simpan Perubahan') }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>