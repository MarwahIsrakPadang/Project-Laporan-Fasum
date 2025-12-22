<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::latest()->get();
        return view('laporan.index', compact('laporans'));
    }

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'keluhan' => 'required|string',
        ]);

        Laporan::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'lokasi' => $request->lokasi,
            'keluhan' => $request->keluhan,
            'status' => 'Pending',
        ]);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dikirim!');
    }

    public function edit(Laporan $laporan)
    {
        return view('laporan.edit', compact('laporan'));
    }

    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'nama_fasilitas' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'keluhan' => 'required|string',
            'status' => 'required|in:Pending,Proses,Selesai',
        ]);

        $laporan->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'lokasi' => $request->lokasi,
            'keluhan' => $request->keluhan,
            'status' => $request->status,
        ]);

        return redirect()->route('laporan.index')->with('success', 'Data dan Status laporan berhasil diperbarui!');
    }

    public function destroy(Laporan $laporan)
    {
        $laporan->delete();
        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus!');
    }
}