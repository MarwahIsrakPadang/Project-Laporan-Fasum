<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel.
     */
    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            // Kolom untuk CRUD sesuai tema Laporan Fasum [cite: 11, 17]
            $table->string('nama_fasilitas'); // Contoh: Jembatan, Lampu Jalan
            $table->string('lokasi');         // Contoh: Kec. Sukajadi
            $table->text('keluhan');          // Deskripsi kerusakan atau laporan
            $table->enum('status', ['Pending', 'Proses', 'Selesai'])->default('Pending'); 
            $table->timestamps();             // Mencatat waktu laporan dibuat & diedit
        });
    }

    /**
     * Batalkan migrasi (Hapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};