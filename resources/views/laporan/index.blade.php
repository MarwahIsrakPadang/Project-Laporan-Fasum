<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Laporan Fasilitas Umum') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-bold text-gray-700">Data Laporan Masuk</h3>
                    <a href="{{ route('laporan.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                        + Tambah Laporan
                    </a>
                </div>

                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 border-l-4 border-green-500 text-green-700">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="overflow-x-auto border rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th class="px-6 py-4 border-b text-center">No</th>
                                <th class="px-6 py-4 border-b">Nama Fasilitas</th>
                                <th class="px-6 py-4 border-b">Lokasi</th>
                                <th class="px-6 py-4 border-b">Keluhan</th>
                                <th class="px-6 py-4 border-b text-center">Status</th>
                                <th class="px-6 py-4 border-b text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($laporans as $index => $data)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 text-center font-medium text-gray-900">{{ $index + 1 }}</td>
                                <td class="px-6 py-4 font-semibold text-gray-800">{{ $data->nama_fasilitas }}</td>
                                <td class="px-6 py-4 italic">{{ $data->lokasi }}</td>
                                <td class="px-6 py-4">{{ $data->keluhan }}</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                                        {{ $data->status == 'Selesai' ? 'bg-green-100 text-green-800' : 
                                           ($data->status == 'Proses' ? 'bg-blue-100 text-blue-800' : 'bg-yellow-100 text-yellow-800') }}">
                                        {{ $data->status }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center items-center space-x-4">
                                        <a href="{{ route('laporan.edit', $data->id) }}" class="text-indigo-600 hover:text-indigo-900 font-bold">Edit</a>
                                        <form action="{{ route('laporan.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 font-bold">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="px-6 py-10 text-center text-gray-400">Belum ada data laporan yang tersedia.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>