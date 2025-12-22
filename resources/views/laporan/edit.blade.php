<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Laporan & Update Status') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('laporan.update', $laporan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas" value="{{ $laporan->nama_fasilitas }}" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Lokasi</label>
                        <input type="text" name="lokasi" value="{{ $laporan->lokasi }}" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Keluhan</label>
                        <textarea name="keluhan" rows="4" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>{{ $laporan->keluhan }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-indigo-600 text-sm font-bold mb-2">Status Laporan (Admin Only)</label>
                        <select name="status" class="shadow border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 bg-indigo-50">
                            <option value="Pending" {{ $laporan->status == 'Pending' ? 'selected' : '' }}>🟡 Pending</option>
                            <option value="Proses" {{ $laporan->status == 'Proses' ? 'selected' : '' }}>🔵 Proses</option>
                            <option value="Selesai" {{ $laporan->status == 'Selesai' ? 'selected' : '' }}>🟢 Selesai</option>
                        </select>
                    </div>

                    <div class="flex items-center justify-between border-t pt-4">
                        <a href="{{ route('laporan.index') }}" class="text-gray-600 hover:text-gray-900 text-sm font-medium">Batal</a>
                        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-6 rounded-md shadow-md transition duration-150">
                            Update Laporan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>