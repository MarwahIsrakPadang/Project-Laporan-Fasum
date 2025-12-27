<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LaporanController extends Controller
{
    public function index()
    {
        $laporans = Laporan::where('user_id', auth()->id())->latest()->get();
        return view('laporan.index', compact('laporans'));
    }

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_laporan' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi_laporan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('laporan-foto', 'public');
        }

        $data['status'] = 'pending';
        $data['user_id'] = auth()->id();

        Laporan::create($data);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil disimpan!');
    }

    public function edit(Laporan $laporan)
    {
        if ($laporan->user_id !== auth()->id()) {
            abort(403);
        }
        return view('laporan.edit', compact('laporan'));
    }

    public function update(Request $request, Laporan $laporan)
    {
        $request->validate([
            'judul_laporan' => 'required|string|max:255',
            'lokasi' => 'required|string',
            'deskripsi_laporan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($laporan->foto) {
                Storage::disk('public')->delete($laporan->foto);
            }
            $data['foto'] = $request->file('foto')->store('laporan-foto', 'public');
        }

        $laporan->update($data);

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil diperbarui!');
    }

    public function destroy(Laporan $laporan)
    {
        if ($laporan->foto) {
            Storage::disk('public')->delete($laporan->foto);
        }
        
        $laporan->delete();

        return redirect()->route('laporan.index')->with('success', 'Laporan berhasil dihapus!');
    }
}