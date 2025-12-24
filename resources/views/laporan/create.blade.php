<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Laporan Fasilitas Umum') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 text-red-700">
                        <p class="font-bold">Terjadi Kesalahan:</p>
                        <ul class="list-disc ml-5 mt-1 text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-4">
                        <x-input-label for="judul_laporan" :value="__('Nama Fasilitas')" />
                        <x-text-input id="judul_laporan" name="judul_laporan" type="text" class="mt-1 block w-full" placeholder="Contoh: Lampu Jalan" :value="old('judul_laporan')" required autofocus />
                        <x-input-error class="mt-2" :messages="$errors->get('judul_laporan')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="lokasi" :value="__('Lokasi')" />
                        <x-text-input id="lokasi" name="lokasi" type="text" class="mt-1 block w-full" placeholder="Contoh: Jl. Merdeka No. 10" :value="old('lokasi')" required />
                        <x-input-error class="mt-2" :messages="$errors->get('lokasi')" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="deskripsi_laporan" :value="__('Keluhan / Deskripsi Kerusakan')" />
                        <textarea id="deskripsi_laporan" name="deskripsi_laporan" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" rows="4" placeholder="Jelaskan detail kerusakan..." required>{{ old('deskripsi_laporan') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('deskripsi_laporan')" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="foto" :value="__('Foto Bukti (Opsional)')" />
                        <input type="file" id="foto" name="foto" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" />
                        <p class="mt-1 text-xs text-gray-500 text-italic">*Format: JPG, PNG, JPEG (Maks. 2MB)</p>
                        <x-input-error class="mt-2" :messages="$errors->get('foto')" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>
                            {{ __('Simpan Laporan') }}
                        </x-primary-button>
                        
                        <a href="{{ route('laporan.index') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                            {{ __('Batal') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>