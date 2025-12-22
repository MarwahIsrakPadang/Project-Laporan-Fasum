<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lapor Fasum - Sistem Informasi Fasilitas Umum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="antialiased bg-gray-50">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center selection:bg-indigo-500 selection:text-white">
        
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/laporan') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8 text-center">
            <div class="flex justify-center">
                <svg class="h-20 w-20 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>

            <div class="mt-8">
                <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                    Sistem Lapor <span class="text-indigo-600">Fasilitas Umum</span>
                </h1>
                <p class="mt-4 text-lg text-gray-500 max-w-2xl mx-auto">
                    Laporkan kerusakan fasilitas publik di sekitar Anda dengan cepat dan pantau proses perbaikannya secara real-time.
                </p>
            </div>

            <div class="mt-10 flex items-center justify-center gap-x-6">
                @auth
                    <a href="{{ url('/laporan') }}" class="rounded-md bg-indigo-600 px-10 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Masuk ke Aplikasi
                    </a>
                @else
                    <a href="{{ route('login') }}" class="rounded-md bg-indigo-600 px-10 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Mulai Lapor Sekarang
                    </a>
                    <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-gray-900">
                        Buat Akun Baru <span aria-hidden="true">→</span>
                    </a>
                @endauth
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-3 text-center">
                <div class="p-4">
                    <h3 class="font-bold text-gray-900 italic">1. Lapor</h3>
                    <p class="text-sm text-gray-500">Sampaikan keluhan fasilitas rusak.</p>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-gray-900 italic">2. Proses</h3>
                    <p class="text-sm text-gray-500">Admin memvalidasi laporan Anda.</p>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-gray-900 italic">3. Selesai</h3>
                    <p class="text-sm text-gray-500">Fasilitas diperbaiki dan siap digunakan.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>