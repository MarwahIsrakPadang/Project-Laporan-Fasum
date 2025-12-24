<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cara Kerja - LaporFasum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-900">

    <nav class="bg-white border-b sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 h-16 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-indigo-600 tracking-tighter">
                Lapor<span class="text-gray-800">Fasum</span>
            </a>
            <a href="{{ url('/') }}" class="text-[10px] font-bold uppercase tracking-[0.2em] text-gray-400 hover:text-indigo-600 transition">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </nav>

    <header class="bg-white py-20 border-b border-gray-100">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter mb-6">
                Langkah Mudah <br> <span class="text-indigo-600">Melapor</span>
            </h1>
        </div>
    </header>

    <main class="py-20">
        <div class="max-w-5xl mx-auto px-4">
            <div class="grid gap-12">
                
                <div class="group bg-white p-10 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition duration-500 flex flex-col md:flex-row items-center gap-10">
                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-2xl font-Open Sans-black text-gray-900 uppercase tracking-tight mb-3"> <strong> 1. Dokumentasikan </strong></h2>
                        <p class="text-gray-500 leading-relaxed">
                            Ambil foto kerusakan fasilitas umum (seperti bangku rusak, lampu jalan mati, atau Halte rusak).<br> <span>Pastikan foto terlihat jelas untuk memudahkan petugas melakukan verifikasi awal di lapangan.</span>
                        </p>
                    </div>
                </div>

                <div class="group bg-white p-10 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition duration-500 flex flex-col md:flex-row-reverse items-center gap-10">
            
                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-2xl font-black text-gray-900 uppercase tracking-tight mb-3"> <strong>2. Kirim Laporan </strong></h2>
                        <p class="text-gray-500 leading-relaxed">
                            Masuk ke dashboard Anda, klik <strong>Tambah Laporan</strong>, unggah foto, dan berikan keterangan lokasi yang akurat.<br> <span> Deskripsi yang detail akan membantu kami menentukan skala prioritas perbaikan.</span>
                        </p>
                    </div>
                </div>

                <div class="group bg-white p-10 rounded-[2rem] border border-gray-100 shadow-sm hover:shadow-xl transition duration-500 flex flex-col md:flex-row items-center gap-10">
                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-2xl font-black text-gray-900 uppercase tracking-tight mb-3"><strong> 3. Pantau Real-Time </strong></h2>
                        <p class="text-gray-500 leading-relaxed">
                            Setelah terkirim, Anda cukup memantau status di tabel laporan.<br> <span>Anda akan melihat perubahan status dari <span class="italic text-amber-600 font-bold">PROSES</span> menjadi <span class="italic text-green-600 font-bold">SELESAI</span> setelah petugas merampungkan pekerjaan.</span>
                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-24 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-8">Siap Berkontribusi Untuk Lingkungan Anda?</h3>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('laporan.create') }}" class="bg-indigo-600 text-white px-10 py-4 rounded-xl font-bold shadow-xl hover:bg-indigo-700 hover:-translate-y-1 transition duration-300 uppercase text-[11px] tracking-widest">
                        Buat Laporan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </main>

</body>
</html>