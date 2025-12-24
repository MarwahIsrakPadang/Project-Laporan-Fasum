<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    // READ: Menampilkan semua laporan
    public function index()
    {
        $reports = Report::with('user')->latest()->get();
        return view('reports.index', compact('reports'));
    }

    // CREATE: Menampilkan form input
    public function create()
    {
        return view('reports.create');
    }

    // CREATE: Proses simpan ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul_laporan' => 'required|string|max:255',
            'deskripsi_laporan' => 'required',
            'lokasi' => 'required',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $report = new Report($request->all());
        $report->user_id = Auth::id(); // Otomatis ambil ID user yang login

        if ($request->hasFile('foto')) {
            $report->foto = $request->file('foto')->store('reports', 'public');
        }

        $report->save();
        return redirect()->route('reports.index')->with('success', 'Laporan berhasil dikirim!');
    }

    public function edit(Report $report)
    {
        if ($report->user_id !== Auth::id()) { abort(403); }
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        if ($report->user_id !== Auth::id()) { abort(403); }

        $request->validate([
            'judul_laporan' => 'required',
            'deskripsi_laporan' => 'required',
            'lokasi' => 'required',
        ]);

        $report->update($request->all());
        return redirect()->route('reports.index')->with('success', 'Laporan berhasil diperbarui!');
    }

    public function destroy(Report $report)
    {
        if ($report->user_id !== Auth::id()) { abort(403); }
        $report->delete();
        return redirect()->route('reports.index')->with('success', 'Laporan berhasil dihapus!');
    }
}