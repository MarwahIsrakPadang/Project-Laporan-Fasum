<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaporFasum - Layanan Aspirasi Fasilitas Umum</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html { scroll-behavior: smooth; }
        .btn-custom {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: auto;
            min-width: 220px;
            max-width: 280px;
        }
    </style>
</head>
<body class="antialiased bg-white text-gray-900">

    <nav class="bg-white border-b sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-indigo-600 tracking-tighter">Lapor<span class="text-gray-800">Fasum</span></span>
                </div>
                <div class="hidden md:flex space-x-8 text-[10px] font-black uppercase tracking-[0.2em] text-gray-400">
                    <a href="{{ url('/') }}" class="hover:text-indigo-600 transition">Beranda</a>
                    <a href="{{ route('cara.kerja') }}" class="hover:text-indigo-600 transition">Cara Kerja</a>
                    <a href="#statistik" class="hover:text-indigo-600 transition">Statistik</a>
                </div>
                <div class="flex items-center space-x-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-[10px] font-bold text-indigo-600 border border-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-50 transition uppercase tracking-widest">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-[10px] font-bold text-gray-500 px-4 py-2 uppercase tracking-widest">Login</a>
                        <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-5 py-2 rounded-lg text-[10px] font-bold shadow-md hover:bg-indigo-700 transition uppercase tracking-widest">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <section class="relative py-20 bg-white border-b border-gray-50 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-black text-gray-900 leading-tight tracking-tighter">
                Wujudkan Fasilitas Lebih Bagus Dengan <br class="hidden md:block"> 
                <span class="text-indigo-600">Laporan Anda.</span>
            </h1>
            <p class="mt-6 text-base text-gray-500 leading-relaxed max-w-2xl mx-auto italic">
                Laporkan kerusakan jalan, lampu mati, atau fasilitas publik lainnya. Kami pantau hingga selesai.
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row justify-center items-center gap-4 max-w-lg mx-auto">
                <a href="{{ route('dashboard') }}" 
                    class="btn-custom bg-indigo-600 text-white px-6 py-4 rounded-xl font-bold shadow-xl hover:bg-indigo-700 transform hover:-translate-y-1 transition duration-300 uppercase text-[11px] tracking-[0.1em]">
                     Mulai Lapor Sekarang
                </a>
                <a href="{{ route('cara.kerja') }}" 
                   class="btn-custom bg-white text-gray-600 border border-gray-200 px-6 py-4 rounded-xl font-bold hover:bg-gray-50 transition uppercase text-[11px] tracking-[0.1em]">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </section>

    <section id="statistik" class="bg-indigo-700 py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8 text-white">
                <div>
                    <div class="text-4xl font-black mb-1">{{ $totalLaporan }}</div>
                    <div class="text-indigo-200 text-[10px] font-bold uppercase tracking-widest">Laporan Masuk</div>
                </div>
                <div>
                    <div class="text-4xl font-black mb-1">{{ $laporanSelesai }}</div>
                    <div class="text-indigo-200 text-[10px] font-bold uppercase tracking-widest">Perbaikan Selesai</div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <div class="text-4xl font-black mb-1">24/7</div>
                    <div class="text-indigo-200 text-[10px] font-bold uppercase tracking-widest">Monitoring</div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-10 border-t border-gray-100 bg-white text-center">
        <p class="text-gray-400 text-[9px] font-bold uppercase tracking-[0.3em]">
            &copy; {{ date('Y') }} LaporFasum &bull; Prioritas Kualitas Publik
        </p>
    </footer>

</body>
</html>