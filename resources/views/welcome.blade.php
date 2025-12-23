<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaporFasum - Sistem Aspirasi Fasilitas Umum</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans text-gray-900 bg-gray-50">
    
    <nav class="absolute top-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-end h-20 items-center gap-6">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-gray-600 hover:text-indigo-600 transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-600 hover:text-indigo-600 transition">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm font-semibold text-gray-600 hover:text-indigo-600 transition">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <main class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-4xl mx-auto text-center">
            
            <div class="flex justify-center mb-10">
                <img src="{{ asset('images/logo-gedung.png') }}" 
                     alt="Logo Fasum" 
                     style="height: 80px !important; width: auto !important; display: block !important; object-fit: contain;">
            </div>

            <h1 class="text-5xl md:text-7xl font-extrabold text-gray-900 leading-tight tracking-tight">
                Sistem Laporan Kerusakan <span class="text-indigo-600">Fasilitas Umum</span>
            </h1>
            
            <p class="mt-8 text-xl text-gray-500 max-w-2xl mx-auto leading-relaxed">
                Laporkan kerusakan fasilitas publik di sekitar Anda dengan cepat dan pantau proses perbaikannya secara real-time.
            </p>

            <div class="mt-12 flex flex-col sm:flex-row justify-center items-center gap-6">
                <a href="{{ route('login') }}" class="px-10 py-4 bg-indigo-600 text-white font-bold rounded-xl hover:bg-indigo-700 transition-all transform hover:scale-105 shadow-xl shadow-indigo-200 w-full sm:w-auto">
                    Mulai Lapor Sekarang
                </a>
                
                <a href="{{ route('register') }}" class="text-gray-700 font-bold hover:text-indigo-600 transition flex items-center group">
                    Buat Akun Baru 
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </main>

    <footer class="absolute bottom-8 w-full text-center text-gray-400 text-sm font-medium uppercase tracking-widest">
        &copy; {{ date('Y') }} LAPOR<span class="text-indigo-400">FASUM</span> ADMIN PANEL V1.0
    </footer>

</body>
</html>