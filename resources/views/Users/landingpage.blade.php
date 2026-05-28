<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataSpace - Kuasai Basis Data</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
    body {
        background-color: #0b1120;
    }

    .bg-card {
        background-color: #131b2f;
    }

    .text-accent {
        color: #818cf8;
    }

    </style>
</head>

<body class="text-slate-300 font-sans antialiased overflow-x-hidden">

    <nav class="container mx-auto px-6 lg:px-12 py-6 flex justify-between items-center">
        <div class="flex items-center space-x-3 text-white font-bold text-xl cursor-pointer">
            <div class="w-7 h-7 bg-blue-500 rounded flex items-center justify-center">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                    </path>
                </svg>
            </div>
            <span>DataSpace</span>
        </div>

        <div class="hidden md:flex space-x-8 text-sm font-medium">
            <a href="#" class="text-blue-400">Beranda</a>
            <a href="#" class="hover:text-white transition">Materi</a>
            <a href="#" class="hover:text-white transition">Quiz</a>
        </div>

        <div class="hidden md:flex space-x-4 text-sm font-medium">
           <a href="{{ route('login') }}" class="px-5 py-2 border border-slate-700 rounded-lg hover:bg-slate-800 transition text-white" > Masuk </a> 
           <a href="{{ route('register') }}" class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition shadow-[0_0_15px_rgba(59,130,246,0.3)]" > Daftar </a>
        </div>
    </nav>

    <section class="container mx-auto px-6 lg:px-12 py-16 lg:py-24 grid lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-8">
            <div
                class="inline-flex items-center space-x-2 bg-slate-800/50 border border-slate-700 rounded-full px-4 py-1.5 text-xs text-slate-300">
                <span class="w-2 h-2 rounded-full bg-teal-400"></span>
                <span>Platform Pembelajaran Basis Data #1</span>
            </div>

            <h1 class="text-4xl lg:text-6xl font-bold text-white leading-tight">
                Kuasai <span class="text-accent">Basis Data</span><br>
                dengan Cara yang<br>
                Menyenangkan
            </h1>

            <p class="text-slate-400 text-lg max-w-md leading-relaxed">
                Platform interaktif untuk belajar ERD, EERD, dan konsep basis data lengkap dengan latihan dan feedback
                langsung.
            </p>

            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="px-6 py-3 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 transition flex items-center justify-center">
                    Mulai Belajar Gratis <span class="ml-2">→</span>
                </a>
                <a href="#"
                    class="px-6 py-3 border border-slate-700 text-white font-medium rounded-lg hover:bg-slate-800 transition flex items-center justify-center">
                    Lihat Materi
                </a>
            </div>

            <div class="flex items-center space-x-3 pt-4 text-sm text-slate-500">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
                <p>Dipelajari oleh <span class="text-white font-semibold">2.000+ mahasiswa</span> Filkom UB</p>
            </div>
        </div>

        <div
            class="relative w-full h-[400px] bg-card border border-slate-700/50 rounded-2xl p-4 shadow-2xl flex flex-col hidden lg:flex">
            <div class="flex items-center space-x-2 mb-4">
                <div class="w-3 h-3 rounded-full bg-rose-500"></div>
                <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                <span class="text-xs text-slate-500 ml-2 font-mono">erd-diagram.sql</span>
            </div>
            <div
                class="flex-1 border border-slate-700/50 rounded-xl bg-[#0b1120] flex items-center justify-center text-slate-600 text-sm">
                <img src="{{ asset('images/ERD-dashboard.png') }}" alt="ERD Dashboard" class="h-full object-contain w-[80%]">
            </div>
        </div>
    </section>

    <section class="container mx-auto px-6 lg:px-12 py-12">
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-card p-8 rounded-2xl border border-slate-800 hover:border-slate-700 transition">
                <div class="w-12 h-12 bg-blue-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3">Modul Terstruktur</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Materi dari dasar hingga lanjut, disusun dengan urutan
                    yang logis dan mudah dipahami.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-slate-800 hover:border-slate-700 transition">
                <div class="w-12 h-12 bg-purple-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3">Latihan Interaktif</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Kerjakan soal langsung di browser dengan feedback
                    real-time setiap saat.</p>
            </div>
            <div class="bg-card p-8 rounded-2xl border border-slate-800 hover:border-slate-700 transition">
                <div class="w-12 h-12 bg-emerald-500/10 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-white text-lg font-semibold mb-3">Lacak Progresmu</h3>
                <p class="text-sm text-slate-400 leading-relaxed">Dashboard pribadi untuk memantau progres belajar dan
                    skor kuis kamu.</p>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-6 lg:px-12 py-16 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Apa yang Akan Kamu Pelajari?</h2>
        <p class="text-slate-400 mb-12">Semua modul dirancang untuk membangun pemahamanmu secara bertahap</p>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 text-left">
            <div class="bg-card p-6 rounded-2xl border border-slate-800 flex flex-col h-full">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center"><span
                            class="text-slate-300">📄</span></div>
                    <span
                        class="text-[10px] font-semibold tracking-wider text-emerald-400 bg-emerald-400/10 px-2 py-1 rounded-full uppercase border border-emerald-500/20">Pemula</span>
                </div>
                <h3 class="text-white font-semibold mb-4">Pengenalan Basis Data</h3>
                <ul class="text-sm text-slate-400 space-y-2 mb-6 flex-1">
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Apa itu Basis
                        Data?</li>
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">DBMS & Contohnya
                    </li>
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Model Data</li>
                </ul>
                <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition mt-auto font-medium">Mulai
                    Belajar ›</a>
            </div>

            <div class="bg-card p-6 rounded-2xl border border-slate-800 flex flex-col h-full">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center"><span
                            class="text-slate-300">🔗</span></div>
                    <span
                        class="text-[10px] font-semibold tracking-wider text-emerald-400 bg-emerald-400/10 px-2 py-1 rounded-full uppercase border border-emerald-500/20">Pemula</span>
                </div>
                <h3 class="text-white font-semibold mb-4">Entity Relationship Diagram</h3>
                <ul class="text-sm text-slate-400 space-y-2 mb-6 flex-1">
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Entitas &
                        Atribut</li>
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Relasi &
                        Kardinalitas</li>
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Diagram ERD</li>
                </ul>
                <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition mt-auto font-medium">Mulai
                    Belajar ›</a>
            </div>

            <div class="bg-card p-6 rounded-2xl border border-slate-800 flex flex-col h-full">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center"><span
                            class="text-slate-300">💠</span></div>
                    <span
                        class="text-[10px] font-semibold tracking-wider text-amber-400 bg-amber-400/10 px-2 py-1 rounded-full uppercase border border-amber-500/20">Menengah</span>
                </div>
                <h3 class="text-white font-semibold mb-4">Enhanced ERD (EERD)</h3>
                <ul class="text-sm text-slate-400 space-y-2 mb-6 flex-1">
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Generalisasi
                    </li>
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Spesialisasi
                    </li>
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Agregasi</li>
                </ul>
                <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition mt-auto font-medium">Mulai
                    Belajar ›</a>
            </div>

            <div class="bg-card p-6 rounded-2xl border border-slate-800 flex flex-col h-full">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-10 h-10 bg-slate-800 rounded-lg flex items-center justify-center"><span
                            class="text-slate-300">📊</span></div>
                    <span
                        class="text-[10px] font-semibold tracking-wider text-amber-400 bg-amber-400/10 px-2 py-1 rounded-full uppercase border border-amber-500/20">Menengah</span>
                </div>
                <h3 class="text-white font-semibold mb-4">Normalisasi</h3>
                <ul class="text-sm text-slate-400 space-y-2 mb-6 flex-1">
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">1NF</li>
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">2NF & 3NF</li>
                    <li class="flex items-center before:content-['•'] before:mr-2 before:text-blue-500">Dependensi
                        Fungsional</li>
                </ul>
                <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition mt-auto font-medium">Mulai
                    Belajar ›</a>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-6 lg:px-12 py-16 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Cara Kerjanya Sederhana</h2>
        <p class="text-slate-400 mb-16">Tiga langkah mudah untuk memulai perjalanan belajarmu</p>

        <div class="grid md:grid-cols-3 gap-8 relative max-w-4xl mx-auto mb-12">
            <div class="hidden md:block absolute top-8 left-[16%] right-[16%] h-[1px] bg-slate-800 -z-10"></div>

            <div class="flex flex-col items-center">
                <div
                    class="w-16 h-16 rounded-xl border border-blue-500/30 bg-[#0b1120] flex items-center justify-center text-blue-400 text-xl font-bold mb-6">
                    01</div>
                <h4 class="text-white font-semibold mb-2">Pilih Modul</h4>
                <p class="text-sm text-slate-400">Telusuri semua modul dan pilih topik yang ingin kamu kuasai.</p>
            </div>

            <div class="flex flex-col items-center">
                <div
                    class="w-16 h-16 rounded-xl border border-purple-500/30 bg-[#0b1120] flex items-center justify-center text-purple-400 text-xl font-bold mb-6">
                    02</div>
                <h4 class="text-white font-semibold mb-2">Pelajari Materi Interaktif</h4>
                <p class="text-sm text-slate-400">Baca materi dengan diagram, contoh, dan definisi yang jelas.</p>
            </div>

            <div class="flex flex-col items-center">
                <div
                    class="w-16 h-16 rounded-xl border border-emerald-500/30 bg-[#0b1120] flex items-center justify-center text-emerald-400 text-xl font-bold mb-6">
                    03</div>
                <h4 class="text-white font-semibold mb-2">Uji Pemahamanmu</h4>
                <p class="text-sm text-slate-400">Kerjakan kuis dan dapatkan feedback langsung untuk setiap jawaban.</p>
            </div>
        </div>

        <button
            class="px-8 py-3 bg-blue-500 text-white font-medium rounded-lg hover:bg-blue-600 transition inline-flex items-center">
            Mulai Belajar Sekarang <span class="ml-2">→</span>
        </button>
    </section>

    <footer class="border-t border-slate-800/80 bg-[#0b1120] mt-12 pt-16 pb-8">
        <div class="container mx-auto px-6 lg:px-12 grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center space-x-2 text-white font-bold text-lg mb-4">
                    <div class="w-5 h-5 bg-blue-500 rounded flex items-center justify-center">
                        <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                            </path>
                        </svg>
                    </div>
                    <span>DataSpace</span>
                </div>
                <p class="text-sm text-slate-500">Platform interaktif untuk belajar basis data</p>
            </div>

            <div>
                <h5 class="text-white font-medium mb-4">Pembelajaran</h5>
                <ul class="text-sm text-slate-500 space-y-3">
                    <li><a href="#" class="hover:text-slate-300">Materi</a></li>
                    <li><a href="#" class="hover:text-slate-300">Quiz</a></li>
                    <li><a href="#" class="hover:text-slate-300">Beranda</a></li>
                </ul>
            </div>

            <div>
                <h5 class="text-white font-medium mb-4">Tentang</h5>
                <ul class="text-sm text-slate-500 space-y-3">
                    <li><a href="#" class="hover:text-slate-300">Tim</a></li>
                    <li><a href="#" class="hover:text-slate-300">Kebijakan Privasi</a></li>
                </ul>
            </div>

            <div>
                <h5 class="text-white font-medium mb-4">Kontak</h5>
                <p class="text-sm text-slate-500">Filkom Universitas Brawijaya</p>
            </div>
        </div>

        <div class="container mx-auto px-6 lg:px-12 text-center text-xs text-slate-600">
            &copy; 2026 DataSpace — Filkom UB
        </div>
    </footer>
</body>
</html>