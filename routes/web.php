<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Models\Laporan;

Route::get('/', function () {
    $totalLaporan = Laporan::count();
    $laporanSelesai = Laporan::where('status', 'selesai')->count();
    
    return view('welcome', compact('totalLaporan', 'laporanSelesai'));
});

Route::get('/cara-kerja', function () {
    return view('cara-kerja');
})->name('cara.kerja');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [LaporanController::class, 'index'])->name('dashboard');
    Route::resource('laporan', LaporanController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';