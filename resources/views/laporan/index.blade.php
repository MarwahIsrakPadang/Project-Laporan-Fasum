<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight uppercase tracking-tighter">
                {{ __('Daftar Laporan Fasum') }}
            </h2>
            
            <div class="flex items-center gap-3">
                <a href="{{ url('/') }}" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-[10px] text-gray-600 uppercase tracking-widest shadow-sm hover:bg-gray-50 transition duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Beranda
                </a>

                <a href="{{ route('laporan.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-bold text-[10px] text-white uppercase tracking-widest hover:bg-indigo-700 shadow-md transition duration-150">
                    + Tambah Laporan
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm">
                    <p class="text-sm font-bold uppercase tracking-tight">{{ session('success') }}</p>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="w-full divide-y divide-gray-200 border-collapse">
                            <thead>
                                <tr class="bg-gray-50/80">
                                    <th style="width: 10%" class="px-6 py-4 text-center text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Foto</th>
                                    <th style="width: 20%" class="px-6 py-4 text-left text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Nama Fasilitas</th>
                                    <th style="width: 20%" class="px-6 py-4 text-left text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Lokasi</th>
                                    <th style="width: 25%" class="px-6 py-4 text-left text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Keluhan</th>
                                    <th style="width: 10%" class="px-6 py-4 text-center text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Status</th>
                                    <th style="width: 15%" class="px-6 py-4 text-center text-[10px] font-black text-gray-400 uppercase tracking-[0.2em]">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-100">
                                @forelse ($laporans as $laporan)
                                    <tr class="hover:bg-gray-50/50 transition duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            @if($laporan->foto)
                                                <a href="{{ asset('storage/' . $laporan->foto) }}" target="_blank" title="Klik untuk memperbesar">
                                                    <img src="{{ asset('storage/' . $laporan->foto) }}" class="h-16 w-16 object-cover rounded-xl mx-auto shadow-sm border border-gray-100 hover:scale-110 transition duration-300">
                                                </a>
                                            @else
                                                <div class="h-16 w-16 bg-gray-50 rounded-xl flex items-center justify-center mx-auto border border-dashed border-gray-200">
                                                    <span class="text-[8px] text-gray-400 font-bold uppercase">No Image</span>
                                                </div>
                                            @endif
                                        </td>
                                        
                                        <td class="px-6 py-4 text-sm font-bold text-gray-700 uppercase tracking-tight">
                                            {{ $laporan->judul_laporan }}
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500 italic">
                                            <span class="text-rose-400 mr-1">📍</span> {{ $laporan->lokasi }}
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-600">
                                            <div class="max-w-xs truncate" title="{{ $laporan->deskripsi_laporan }}">
                                                {{ $laporan->deskripsi_laporan }}
                                            </div>
                                        </td>
                                        
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <span class="px-4 py-1.5 text-[10px] font-black bg-yellow-100 text-yellow-700 rounded-full uppercase italic tracking-widest shadow-sm">
                                                {{ $laporan->status }}
                                            </span>
                                        </td>
                                        
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-[10px] font-bold">
                                            <div class="flex justify-center items-center gap-3">
                                                <a href="{{ route('laporan.edit', $laporan->id) }}" class="text-indigo-600 hover:text-indigo-900 transition uppercase tracking-tighter">Edit</a>
                                                <span class="text-gray-200 text-lg">|</span>
                                                <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" onsubmit="return confirm('Hapus laporan ini?')">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="text-rose-500 hover:text-rose-700 transition uppercase tracking-tighter">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-20 text-center text-gray-400 italic text-sm tracking-widest uppercase font-medium">
                                            Belum ada data laporan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>