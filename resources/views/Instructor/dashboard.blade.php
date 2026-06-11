<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Instructor - DataSpace</title>
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
                <a href="#"
                    class="flex items-center gap-3 bg-[#1e232d] border border-blue-500/30 text-blue-400 px-4 py-3 rounded-lg font-medium transition shadow-[0_0_15px_rgba(59,130,246,0.1)]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    Dashboard
                    <span class="ml-auto text-blue-500">›</span>
                </a>
            </nav>
        </div>

        <div class="p-4">
            <div class="bg-[#1e232d] rounded-xl p-3 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center text-black font-bold">
                    J</div>
                <div class="overflow-hidden">
                    <p class="text-white text-sm font-semibold truncate">Mr. Jefry</p>
                    <p class="text-gray-500 text-xs truncate">instructor@dataspace.id</p>
                </div>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden">

        <header class="h-20 border-b border-gray-800 flex items-center justify-end px-8 shrink-0">
            <button
                class="flex items-center gap-2 px-4 py-2 bg-[#1e232d] text-gray-300 rounded-lg text-sm border border-gray-700 hover:text-white transition">
                <span>←</span> Ke Situs
            </button>
        </header>

        <div class="flex-1 overflow-y-auto p-8 custom-scrollbar">
            <div class="max-w-5xl mx-auto space-y-8">

                <div>
                    <h2 class="text-3xl font-bold text-white mb-2">Selamat datang kembali, Mr. Jefry!</h2>
                    <p class="text-gray-400 text-sm">Berikut adalah daftar modul yang perlu Anda tinjau dan validasi.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 flex items-center gap-5">
                        <div
                            class="w-14 h-14 rounded-2xl bg-blue-500/10 text-blue-500 flex items-center justify-center">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm font-medium mb-0.5">Total Modul</p>
                            <h3 class="text-3xl font-bold text-white">2</h3>
                        </div>
                    </div>
                    <div class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 flex items-center gap-5">
                        <div
                            class="w-14 h-14 rounded-2xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm font-medium mb-0.5">Dipublikasi</p>
                            <h3 class="text-3xl font-bold text-white">1</h3>
                        </div>
                    </div>
                    <div class="bg-[#14171d] border border-gray-800 rounded-2xl p-6 flex items-center gap-5">
                        <div
                            class="w-14 h-14 rounded-2xl bg-yellow-500/10 text-yellow-400 flex items-center justify-center">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm font-medium mb-0.5">Menunggu Tinjauan (Draf)</p>
                            <h3 class="text-3xl font-bold text-white">1</h3>
                        </div>
                    </div>
                </div>

                <div class="bg-[#14171d] border border-gray-800 rounded-2xl mb-10 pb-10">
                    <div class="px-8 py-6 border-b border-gray-800">
                        <h3 class="text-lg font-bold text-white">Daftar Modul</h3>
                    </div>

                    <div class="divide-y divide-gray-800">

                        <div
                            class="p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 hover:bg-[#1a1e28] transition">
                            <div class="flex items-start gap-5">
                                <div
                                    class="w-12 h-12 rounded-xl bg-[#1e232d] border border-gray-700 flex items-center justify-center text-gray-400 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-medium text-white mb-1">Pengantar React</h4>
                                    <p class="text-gray-400 text-sm mb-3">Pelajari dasar-dasar React, komponen, dan
                                        state.</p>
                                    <div class="flex items-center gap-4 text-sm">
                                        <span class="text-gray-500">Diunggah: 5/6/2026</span>
                                        <a href="#"
                                            class="flex items-center gap-1.5 text-blue-400 hover:text-blue-300 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                </path>
                                            </svg>
                                            Lihat Detail & Pratinjau
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="relative inline-block text-left dropdown-container">
                                <button type="button"
                                    class="dropdown-button flex items-center justify-between w-36 px-4 py-2 rounded-full text-sm font-medium border transition whitespace-nowrap shrink-0 bg-emerald-500/10 text-emerald-500 border-emerald-500/20 hover:bg-emerald-500/20">
                                    <span class="dropdown-text">Dipublikasi</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div
                                    class="dropdown-menu hidden absolute right-0 mt-2 w-36 origin-top-right rounded-xl bg-[#1e232d] border border-gray-700 shadow-xl overflow-hidden z-20">
                                    <ul class="py-1 text-sm text-gray-300">
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-emerald-400 transition"
                                                data-value="Dipublikasi">Dipublikasi</button></li>
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-yellow-400 transition"
                                                data-value="Draft">Draft</button></li>
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-red-400 transition"
                                                data-value="Ditolak">Ditolak</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 hover:bg-[#1a1e28] transition">
                            <div class="flex items-start gap-5">
                                <div
                                    class="w-12 h-12 rounded-xl bg-[#1e232d] border border-gray-700 flex items-center justify-center text-gray-400 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-medium text-white mb-1">Tailwind CSS Lanjutan</h4>
                                    <p class="text-gray-400 text-sm mb-3">Kuasai framework CSS utility-first untuk
                                        pengembangan UI yang cepat.</p>
                                    <div class="flex items-center gap-4 text-sm">
                                        <span class="text-gray-500">Diunggah: 7/6/2026</span>
                                        <a href="#"
                                            class="flex items-center gap-1.5 text-blue-400 hover:text-blue-300 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                </path>
                                            </svg>
                                            Lihat Detail & Pratinjau
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="relative inline-block text-left dropdown-container">
                                <button type="button"
                                    class="dropdown-button flex items-center justify-between w-36 px-4 py-2 rounded-full text-sm font-medium border transition whitespace-nowrap shrink-0 bg-yellow-500/10 text-yellow-500 border-yellow-500/20 hover:bg-yellow-500/20">
                                    <span class="dropdown-text">Draft</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div
                                    class="dropdown-menu hidden absolute right-0 mt-2 w-36 origin-top-right rounded-xl bg-[#1e232d] border border-gray-700 shadow-xl overflow-hidden z-20">
                                    <ul class="py-1 text-sm text-gray-300">
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-emerald-400 transition"
                                                data-value="Dipublikasi">Dipublikasi</button></li>
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-yellow-400 transition"
                                                data-value="Draft">Draft</button></li>
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-red-400 transition"
                                                data-value="Ditolak">Ditolak</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div
                            class="p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 hover:bg-[#1a1e28] transition">
                            <div class="flex items-start gap-5">
                                <div
                                    class="w-12 h-12 rounded-xl bg-[#1e232d] border border-gray-700 flex items-center justify-center text-gray-400 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-medium text-white mb-1">Tailwind CSS Dasar</h4>
                                    <p class="text-gray-400 text-sm mb-3">Kuasai framework CSS utility-first untuk
                                        pengembangan UI yang cepat.</p>
                                    <div class="flex items-center gap-4 text-sm">
                                        <span class="text-gray-500">Diunggah: 7/6/2026</span>
                                        <a href="#"
                                            class="flex items-center gap-1.5 text-blue-400 hover:text-blue-300 transition">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                </path>
                                            </svg>
                                            Lihat Detail & Pratinjau
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="relative inline-block text-left dropdown-container">
                                <button type="button"
                                    class="dropdown-button flex items-center justify-between w-36 px-4 py-2 rounded-full text-sm font-medium border transition whitespace-nowrap shrink-0 bg-red-500/10 text-red-500 border-red-500/20 hover:bg-red-500/20">
                                    <span class="dropdown-text">Ditolak</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div
                                    class="dropdown-menu hidden absolute right-0 mt-2 w-36 origin-top-right rounded-xl bg-[#1e232d] border border-gray-700 shadow-xl overflow-hidden z-20">
                                    <ul class="py-1 text-sm text-gray-300">
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-emerald-400 transition"
                                                data-value="Dipublikasi">Dipublikasi</button></li>
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-yellow-400 transition"
                                                data-value="Draft">Draft</button></li>
                                        <li><button type="button"
                                                class="dropdown-item w-full text-left px-4 py-2 hover:bg-[#2a303c] hover:text-red-400 transition"
                                                data-value="Ditolak">Ditolak</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Mapping class warna untuk Tailwind CSS
        const colorClasses = {
            'Dipublikasi': 'bg-emerald-500/10 text-emerald-500 border-emerald-500/20 hover:bg-emerald-500/20',
            'Draft': 'bg-yellow-500/10 text-yellow-500 border-yellow-500/20 hover:bg-yellow-500/20',
            'Ditolak': 'bg-red-500/10 text-red-500 border-red-500/20 hover:bg-red-500/20'
        };

        const baseBtnClasses =
            'dropdown-button flex items-center justify-between w-36 px-4 py-2 rounded-full text-sm font-medium border transition whitespace-nowrap shrink-0';

        const dropdownContainers = document.querySelectorAll('.dropdown-container');

        dropdownContainers.forEach(container => {
            const button = container.querySelector('.dropdown-button');
            const menu = container.querySelector('.dropdown-menu');
            const textSpan = button.querySelector('.dropdown-text');
            const items = container.querySelectorAll('.dropdown-item');

            // Saat Tombol Diklik (Buka/Tutup Menu)
            button.addEventListener('click', (e) => {
                e.stopPropagation();

                // Tutup dropdown lain yang sedang terbuka
                document.querySelectorAll('.dropdown-menu').forEach(m => {
                    if (m !== menu) m.classList.add('hidden');
                });

                // Toggle menu ini
                menu.classList.toggle('hidden');
            });

            // Saat Item Menu Dipilih
            items.forEach(item => {
                item.addEventListener('click', (e) => {
                    e.stopPropagation();

                    const selectedValue = item.getAttribute('data-value');

                    // 1. Ganti Text di Tombol
                    textSpan.textContent = selectedValue;

                    // 2. Ganti Warna Background & Text sesuai status
                    button.className =
                        `${baseBtnClasses} ${colorClasses[selectedValue]}`;

                    // 3. Sembunyikan Menu
                    menu.classList.add('hidden');
                });
            });
        });

        // Tutup dropdown kalau area di luar diklik
        document.addEventListener('click', () => {
            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.add('hidden');
            });
        });
    });
    </script>
</body>

</html>