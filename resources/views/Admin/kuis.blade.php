<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kuis - Admin DataSpace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
    body {
        font-family: 'Inter', sans-serif;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background-color: #1f232b;
        border-radius: 10px;
    }
    </style>
</head>

<body class="bg-[#0f1115] text-gray-300 font-sans antialiased flex h-screen overflow-hidden">

    <aside class="w-64 bg-[#14171d] border-r border-gray-800 flex flex-col justify-between shrink-0">
        <div>
            <div class="h-20 flex flex-col justify-center px-6 border-b border-gray-800">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-blue-500 rounded-md flex items-center justify-center text-white font-bold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-white font-bold text-lg leading-tight">DataSpace</h1>
                        <p class="text-red-400 text-xs font-medium">⬡ Admin Panel</p>
                    </div>
                </div>
            </div>

            <nav class="p-4 space-y-1">
                <a href="dashboard"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="modul"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                    Modul
                </a>
                <a href="kuis"
                    class="flex items-center gap-3 bg-[#1e232d] border border-blue-500/30 text-blue-400 px-4 py-3 rounded-lg font-medium transition shadow-[0_0_15px_rgba(59,130,246,0.1)]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                        </path>
                    </svg>
                    Kuis
                    <span class="ml-auto text-blue-500">›</span>
                </a>
                <a href="pengguna"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    Pengguna
                </a>
                <a href="pengaturan"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Pengaturan
                </a>
            </nav>
        </div>

        <div class="p-4">
            <div class="bg-[#1e232d] rounded-xl p-3 flex items-center gap-3 border border-gray-800">
                <div class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center text-black font-bold">
                    A</div>
                <div class="overflow-hidden">
                    <p class="text-white text-sm font-semibold truncate">Admin</p>
                    <p class="text-gray-500 text-xs truncate">admin@dataspace.id</p>
                </div>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden">

        <header class="h-20 border-b border-gray-800 flex items-center justify-end px-8 shrink-0 bg-[#0f1115]">
            <button
                class="flex items-center gap-2 px-4 py-2 bg-[#1e232d] text-gray-300 rounded-lg text-sm border border-gray-700 hover:text-white transition">
                <span>←</span> Ke Situs
            </button>
        </header>

        <div class="flex-1 overflow-y-auto p-8 custom-scrollbar">
            <div class="max-w-6xl mx-auto space-y-8">

                <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-white mb-1">Kelola Kuis</h2>
                        <p class="text-gray-400 text-sm">3 kuis · 2 aktif</p>
                    </div>
                    <button id="openModalBtn"
                        class="bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-400 hover:to-indigo-400 text-white px-5 py-2.5 rounded-lg font-medium flex items-center gap-2 transition shadow-lg shadow-blue-500/20">
                        <span class="text-lg leading-none">+</span> Tambah Kuis
                    </button>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 hover:border-gray-700 transition">
                        <div
                            class="w-10 h-10 bg-blue-500/10 text-blue-500 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-1">3</h3>
                        <p class="text-sm text-gray-500">Total Kuis</p>
                    </div>
                    <div class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 hover:border-gray-700 transition">
                        <div
                            class="w-10 h-10 bg-emerald-500/10 text-emerald-400 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-1">2</h3>
                        <p class="text-sm text-gray-500">Kuis Aktif</p>
                    </div>
                    <div class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 hover:border-gray-700 transition">
                        <div
                            class="w-10 h-10 bg-purple-500/10 text-purple-400 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-1">198</h3>
                        <p class="text-sm text-gray-500">Total Percobaan</p>
                    </div>
                    <div class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 hover:border-gray-700 transition">
                        <div
                            class="w-10 h-10 bg-yellow-500/10 text-yellow-400 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-1">77%</h3>
                        <p class="text-sm text-gray-500">Rata-rata Skor</p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text" placeholder="Cari kuis atau soal..."
                            class="w-full pl-11 pr-4 py-3 bg-[#14171d] border border-gray-800 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500 transition">
                    </div>

                    <div class="relative w-full md:w-48">
                        <button id="filterBtn"
                            class="w-full flex items-center justify-between px-4 py-3 bg-[#14171d] border border-gray-800 rounded-xl text-sm text-white hover:border-gray-600 transition">
                            <span id="filterText">Semua Status</span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div id="filterMenu"
                            class="absolute right-0 mt-2 w-full bg-[#1e232d] border border-gray-700 rounded-xl shadow-xl hidden z-40 overflow-hidden">
                            <button
                                class="filter-option w-full text-left px-4 py-2.5 text-sm text-white hover:bg-[#252b36] transition"
                                data-value="Semua Status">Semua Status</button>
                            <button
                                class="filter-option w-full text-left px-4 py-2.5 text-sm text-emerald-400 hover:bg-[#252b36] transition"
                                data-value="Aktif">Aktif</button>
                            <button
                                class="filter-option w-full text-left px-4 py-2.5 text-sm text-gray-400 hover:bg-[#252b36] transition"
                                data-value="Draft">Draft</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <div
                        class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 hover:border-gray-700 transition group flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-[#1e232d] border border-gray-700 flex items-center justify-center text-gray-400">
                                    🗄️</div>
                                <span
                                    class="px-2.5 py-1 rounded-full text-[11px] font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Aktif</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-500">
                                <button class="btn-view hover:text-white transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button>
                                <button class="btn-edit hover:text-blue-400 transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg></button>
                                <button class="btn-hapus hover:text-red-400 transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg></button>
                            </div>
                        </div>

                        <h3 class="text-lg font-bold text-white mb-1 group-hover:text-blue-400 transition">Kuis:
                            Pengenalan Basis Data</h3>
                        <p class="text-gray-500 text-sm mb-5">Pengenalan Basis Data</p>

                        <div
                            class="bg-[#1e232d] rounded-xl p-4 flex justify-between items-center mb-5 mt-auto border border-gray-800">
                            <div class="text-center flex-1 border-r border-gray-700/50">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-blue-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                        </path>
                                    </svg>
                                    3
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Soal</p>
                            </div>
                            <div class="text-center flex-1 border-r border-gray-700/50">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-purple-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    10
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Menit</p>
                            </div>
                            <div class="text-center flex-1">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-yellow-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    70%
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Lulus</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-end text-sm">
                            <div class="flex gap-6">
                                <div>
                                    <p class="text-gray-500 text-xs mb-0.5">Percobaan</p>
                                    <p class="text-white font-medium">84</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-xs mb-0.5">Avg. Skor</p>
                                    <p class="text-emerald-400 font-medium">78%</p>
                                </div>
                            </div>
                            <span class="text-gray-600 text-xs">12 Mei 2026</span>
                        </div>
                    </div>

                    <div
                        class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 hover:border-gray-700 transition group flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-[#1e232d] border border-gray-700 flex items-center justify-center text-gray-400">
                                    🔗</div>
                                <span
                                    class="px-2.5 py-1 rounded-full text-[11px] font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">Aktif</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-500">
                                <button class="btn-view hover:text-white transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button>
                                <button class="btn-edit hover:text-blue-400 transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg></button>
                                <button class="btn-hapus hover:text-red-400 transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg></button>
                            </div>
                        </div>

                        <h3 class="text-lg font-bold text-white mb-1 group-hover:text-blue-400 transition">Kuis: Entity
                            Relationship Diagram</h3>
                        <p class="text-gray-500 text-sm mb-5">Entity Relationship Diagram</p>

                        <div
                            class="bg-[#1e232d] rounded-xl p-4 flex justify-between items-center mb-5 mt-auto border border-gray-800">
                            <div class="text-center flex-1 border-r border-gray-700/50">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-blue-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                        </path>
                                    </svg>
                                    5
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Soal</p>
                            </div>
                            <div class="text-center flex-1 border-r border-gray-700/50">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-purple-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    10
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Menit</p>
                            </div>
                            <div class="text-center flex-1">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-yellow-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    70%
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Lulus</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-end text-sm">
                            <div class="flex gap-6">
                                <div>
                                    <p class="text-gray-500 text-xs mb-0.5">Percobaan</p>
                                    <p class="text-white font-medium">53</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-xs mb-0.5">Avg. Skor</p>
                                    <p class="text-emerald-400 font-medium">72%</p>
                                </div>
                            </div>
                            <span class="text-gray-600 text-xs">15 Mei 2026</span>
                        </div>
                    </div>

                    <div
                        class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 hover:border-gray-700 transition group flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-[#1e232d] border border-gray-700 flex items-center justify-center text-gray-400">
                                    📊</div>
                                <span
                                    class="px-2.5 py-1 rounded-full text-[11px] font-medium bg-[#1e232d] text-gray-400 border border-gray-700">Draft</span>
                            </div>
                            <div class="flex items-center gap-3 text-gray-500">
                                <button class="btn-view hover:text-white transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg></button>
                                <button class="btn-edit hover:text-blue-400 transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg></button>
                                <button class="btn-hapus hover:text-red-400 transition"><svg class="w-5 h-5" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg></button>
                            </div>
                        </div>

                        <h3 class="text-lg font-bold text-white mb-1 group-hover:text-blue-400 transition">Kuis: Model
                            Relasional</h3>
                        <p class="text-gray-500 text-sm mb-5">Model Relasional</p>

                        <div
                            class="bg-[#1e232d] rounded-xl p-4 flex justify-between items-center mb-5 mt-auto border border-gray-800">
                            <div class="text-center flex-1 border-r border-gray-700/50">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-blue-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                                        </path>
                                    </svg>
                                    1
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Soal</p>
                            </div>
                            <div class="text-center flex-1 border-r border-gray-700/50">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-purple-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    8
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Menit</p>
                            </div>
                            <div class="text-center flex-1">
                                <div
                                    class="flex items-center justify-center gap-1.5 text-yellow-400 font-bold text-lg mb-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    65%
                                </div>
                                <p class="text-[11px] text-gray-500 uppercase tracking-wide">Lulus</p>
                            </div>
                        </div>

                        <div class="flex justify-between items-end text-sm">
                            <div class="flex gap-6">
                                <div>
                                    <p class="text-gray-500 text-xs mb-0.5">Percobaan</p>
                                    <p class="text-white font-medium">61</p>
                                </div>
                                <div>
                                    <p class="text-gray-500 text-xs mb-0.5">Avg. Skor</p>
                                    <p class="text-emerald-400 font-medium">81%</p>
                                </div>
                            </div>
                            <span class="text-gray-600 text-xs">18 Mei 2026</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="tambahModulModal"
            class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
            <div
                class="bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-2xl shadow-2xl shadow-black/50 transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]">
                <div class="flex justify-between items-center p-6 border-b border-gray-800 shrink-0">
                    <h3 class="text-xl font-bold text-white">Tambah Soal Kuis</h3>
                    <button id="closeModalBtn"
                        class="text-gray-400 hover:text-white transition bg-[#1e232d] hover:bg-gray-700 p-1.5 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-6 overflow-y-auto custom-scrollbar">
                    <form id="tambahModulForm" class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Pilih Modul <span
                                    class="text-red-400">*</span></label>
                            <select name="modul_id"
                                class="w-full px-4 py-2.5 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500 transition appearance-none"
                                required>
                                <option value="">-- Pilih Modul Terkait --</option>
                                <option value="1">Pengenalan Basis Data</option>
                                <option value="2">Entity Relationship Diagram</option>
                                <option value="3">Model Relasional</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Pertanyaan <span
                                    class="text-red-400">*</span></label>
                            <textarea name="pertanyaan" rows="3" placeholder="Tuliskan pertanyaan soal di sini..."
                                class="w-full px-4 py-2.5 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition resize-none"
                                required></textarea>
                        </div>

                        <div class="space-y-3">
                            <label class="block text-sm font-medium text-gray-300">Opsi Jawaban <span
                                    class="text-red-400">*</span></label>

                            <div class="flex gap-3 items-center">
                                <span
                                    class="w-9 h-9 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold shrink-0">A</span>
                                <input type="text" name="opsi_a" placeholder="Teks opsi A"
                                    class="w-full px-4 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-white text-sm focus:outline-none focus:border-blue-500 transition"
                                    required>
                            </div>
                            <div class="flex gap-3 items-center">
                                <span
                                    class="w-9 h-9 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold shrink-0">B</span>
                                <input type="text" name="opsi_b" placeholder="Teks opsi B"
                                    class="w-full px-4 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-white text-sm focus:outline-none focus:border-blue-500 transition"
                                    required>
                            </div>
                            <div class="flex gap-3 items-center">
                                <span
                                    class="w-9 h-9 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold shrink-0">C</span>
                                <input type="text" name="opsi_c" placeholder="Teks opsi C"
                                    class="w-full px-4 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-white text-sm focus:outline-none focus:border-blue-500 transition"
                                    required>
                            </div>
                            <div class="flex gap-3 items-center">
                                <span
                                    class="w-9 h-9 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold shrink-0">D</span>
                                <input type="text" name="opsi_d" placeholder="Teks opsi D"
                                    class="w-full px-4 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-white text-sm focus:outline-none focus:border-blue-500 transition"
                                    required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Kunci Jawaban <span
                                    class="text-red-400">*</span></label>
                            <select name="kunci_jawaban"
                                class="w-full px-4 py-2.5 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-emerald-500 transition appearance-none"
                                required>
                                <option value="">-- Pilih Jawaban Benar --</option>
                                <option value="A">Opsi A</option>
                                <option value="B">Opsi B</option>
                                <option value="C">Opsi C</option>
                                <option value="D">Opsi D</option>
                            </select>
                        </div>
                    </form>
                </div>

                <div class="p-6 border-t border-gray-800 flex justify-end gap-3 bg-[#181b22] rounded-b-2xl shrink-0">
                    <button id="cancelModalBtn" type="button"
                        class="px-5 py-2.5 text-sm font-medium text-gray-400 hover:text-white bg-transparent hover:bg-[#252b36] border border-gray-700 rounded-lg transition">Batal</button>
                    <button form="tambahModulForm" type="submit"
                        class="bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-400 hover:to-indigo-400 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-lg shadow-blue-500/20">Simpan
                        Kuis</button>
                </div>
            </div>
        </div>

        <div id="viewModulModal"
            class="modal-container fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
            <div
                class="bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-2xl shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col">
                <div class="flex justify-between items-center p-6 border-b border-gray-800">
                    <h3 class="text-xl font-bold text-white">Detail Soal Kuis</h3>
                    <button
                        class="close-modal-btn text-gray-400 hover:text-white transition bg-[#1e232d] hover:bg-gray-700 p-1.5 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <p class="text-xs text-gray-500 mb-1 uppercase tracking-wide">Modul Terkait</p>
                        <p class="text-blue-400 font-medium">Pengenalan Basis Data</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 mb-1 uppercase tracking-wide">Pertanyaan</p>
                        <p
                            class="text-white text-base leading-relaxed bg-[#1e232d] p-4 rounded-xl border border-gray-700">
                            Apa kepanjangan dari SQL dalam ilmu basis data?</p>
                    </div>
                    <div>
                        <p class="text-xs text-gray-500 mb-2 uppercase tracking-wide">Opsi Jawaban & Kunci</p>
                        <div class="space-y-2">
                            <div class="flex items-center gap-3 p-3 rounded-lg border border-gray-700 bg-[#1e232d]/50">
                                <span
                                    class="w-7 h-7 rounded bg-gray-700 text-gray-300 flex items-center justify-center font-bold text-sm shrink-0">A</span>
                                <span class="text-gray-300">Structured Query Language</span>
                            </div>
                            <div
                                class="flex items-center gap-3 p-3 rounded-lg border border-emerald-500/50 bg-emerald-500/10">
                                <span
                                    class="w-7 h-7 rounded bg-emerald-500 text-white flex items-center justify-center font-bold text-sm shrink-0">B</span>
                                <span class="text-white font-medium">Standard Query Language (Jawaban Benar)</span>
                                <svg class="w-5 h-5 text-emerald-500 ml-auto" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div class="flex items-center gap-3 p-3 rounded-lg border border-gray-700 bg-[#1e232d]/50">
                                <span
                                    class="w-7 h-7 rounded bg-gray-700 text-gray-300 flex items-center justify-center font-bold text-sm shrink-0">C</span>
                                <span class="text-gray-300">System Query Logic</span>
                            </div>
                            <div class="flex items-center gap-3 p-3 rounded-lg border border-gray-700 bg-[#1e232d]/50">
                                <span
                                    class="w-7 h-7 rounded bg-gray-700 text-gray-300 flex items-center justify-center font-bold text-sm shrink-0">D</span>
                                <span class="text-gray-300">Simple Question Language</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 border-t border-gray-800 flex justify-end bg-[#181b22] rounded-b-2xl">
                    <button type="button"
                        class="close-modal-btn px-5 py-2.5 text-sm font-medium text-gray-400 hover:text-white bg-[#252b36] border border-gray-700 rounded-lg transition">Tutup</button>
                </div>
            </div>
        </div>

        <div id="editModulModal"
            class="modal-container fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
            <div
                class="bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-2xl shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]">
                <div class="flex justify-between items-center p-6 border-b border-gray-800 shrink-0">
                    <h3 class="text-xl font-bold text-white">Edit Soal Kuis</h3>
                    <button
                        class="close-modal-btn text-gray-400 hover:text-white transition bg-[#1e232d] hover:bg-gray-700 p-1.5 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 overflow-y-auto custom-scrollbar">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Pilih Modul <span
                                    class="text-red-400">*</span></label>
                            <select name="modul_id"
                                class="w-full px-4 py-2.5 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500 transition appearance-none"
                                required>
                                <option value="1" selected>Pengenalan Basis Data</option>
                                <option value="2">Entity Relationship Diagram</option>
                                <option value="3">Model Relasional</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Pertanyaan <span
                                    class="text-red-400">*</span></label>
                            <textarea name="pertanyaan" rows="3"
                                class="w-full px-4 py-2.5 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition resize-none"
                                required>Apa kepanjangan dari SQL dalam ilmu basis data?</textarea>
                        </div>

                        <div class="space-y-3">
                            <label class="block text-sm font-medium text-gray-300">Opsi Jawaban <span
                                    class="text-red-400">*</span></label>
                            <div class="flex gap-3 items-center">
                                <span
                                    class="w-9 h-9 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold shrink-0">A</span>
                                <input type="text" name="opsi_a" value="Structured Query Language"
                                    class="w-full px-4 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-white text-sm focus:outline-none focus:border-blue-500 transition"
                                    required>
                            </div>
                            <div class="flex gap-3 items-center">
                                <span
                                    class="w-9 h-9 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold shrink-0">B</span>
                                <input type="text" name="opsi_b" value="Standard Query Language"
                                    class="w-full px-4 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-white text-sm focus:outline-none focus:border-blue-500 transition"
                                    required>
                            </div>
                            <div class="flex gap-3 items-center">
                                <span
                                    class="w-9 h-9 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold shrink-0">C</span>
                                <input type="text" name="opsi_c" value="System Query Logic"
                                    class="w-full px-4 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-white text-sm focus:outline-none focus:border-blue-500 transition"
                                    required>
                            </div>
                            <div class="flex gap-3 items-center">
                                <span
                                    class="w-9 h-9 rounded bg-blue-500/10 text-blue-400 flex items-center justify-center font-bold shrink-0">D</span>
                                <input type="text" name="opsi_d" value="Simple Question Language"
                                    class="w-full px-4 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-white text-sm focus:outline-none focus:border-blue-500 transition"
                                    required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-1.5">Kunci Jawaban <span
                                    class="text-red-400">*</span></label>
                            <select name="kunci_jawaban"
                                class="w-full px-4 py-2.5 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-emerald-500 transition appearance-none"
                                required>
                                <option value="A">Opsi A</option>
                                <option value="B" selected>Opsi B</option>
                                <option value="C">Opsi C</option>
                                <option value="D">Opsi D</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="p-6 border-t border-gray-800 flex justify-end gap-3 bg-[#181b22] rounded-b-2xl shrink-0">
                    <button type="button"
                        class="close-modal-btn px-5 py-2.5 text-sm font-medium text-gray-400 hover:text-white bg-transparent hover:bg-[#252b36] border border-gray-700 rounded-lg transition">Batal</button>
                    <button type="submit"
                        class="bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-400 hover:to-indigo-400 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-lg shadow-blue-500/20">Simpan
                        Perubahan</button>
                </div>
            </div>
        </div>

        <div id="hapusModulModal"
            class="modal-container fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
            <div
                class="bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-md shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col p-6 text-center">
                <div class="w-16 h-16 bg-red-500/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Hapus Soal Kuis?</h3>
                <p class="text-gray-400 text-sm mb-6">Apakah Anda yakin ingin menghapus soal ini? Data opsi dan kunci
                    jawaban yang terkait tidak akan bisa dikembalikan.</p>
                <div class="flex justify-center gap-3">
                    <button type="button"
                        class="close-modal-btn px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-white bg-[#1e232d] border border-gray-700 hover:bg-gray-700 rounded-lg transition w-full">Batal</button>
                    <button type="button"
                        class="bg-red-500 hover:bg-red-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-lg shadow-red-500/20 w-full">Ya,
                        Hapus</button>
                </div>
            </div>
        </div>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Fungsi untuk membuka modal
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            const modalBox = modal.querySelector('div.transform');

            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modalBox.classList.remove('scale-95');
                modalBox.classList.add('scale-100');
            }, 10);
        }

        // Fungsi untuk menutup modal
        function closeModal(modal) {
            const modalBox = modal.querySelector('div.transform');

            modal.classList.add('opacity-0');
            modalBox.classList.remove('scale-100');
            modalBox.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // 1. Tombol Tambah Modul Utama
        document.getElementById('openModalBtn').addEventListener('click', () => openModal('tambahModulModal'));

        // 2. Tombol Aksi di dalam Tabel
        document.querySelectorAll('.btn-view').forEach(btn => {
            btn.addEventListener('click', () => openModal('viewModulModal'));
        });
        document.querySelectorAll('.btn-edit').forEach(btn => {
            btn.addEventListener('click', () => openModal('editModulModal'));
        });
        document.querySelectorAll('.btn-hapus').forEach(btn => {
            btn.addEventListener('click', () => openModal('hapusModulModal'));
        });

        // 3. Logika Penutup untuk SEMUA Modal
        const allModals = document.querySelectorAll('.modal-container, #tambahModulModal');
        allModals.forEach(modal => {
            // Tutup saat tombol 'Batal' / 'Tutup' / 'X' diklik
            const closeBtns = modal.querySelectorAll(
                '.close-modal-btn, #closeModalBtn, #cancelModalBtn');
            closeBtns.forEach(btn => {
                btn.addEventListener('click', () => closeModal(modal));
            });

            // Tutup saat area gelap luar diklik
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    closeModal(modal);
                }
            });
        });
    });

    // Dropdown Filter Status
    const filterBtn = document.getElementById('filterBtn');
    const filterMenu = document.getElementById('filterMenu');
    const filterText = document.getElementById('filterText');

    filterBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        filterMenu.classList.toggle('hidden');
    });

    document.querySelectorAll('.filter-option').forEach(option => {
        option.addEventListener('click', function() {
            filterText.textContent = this.getAttribute('data-value');
            filterMenu.classList.add('hidden');
            // Di sini kamu bisa tambahkan logika filter data tabel kuis
        });
    });

    // Tutup dropdown jika klik di luar
    document.addEventListener('click', () => {
        filterMenu.classList.add('hidden');
    });
    </script>
</body>

</html>