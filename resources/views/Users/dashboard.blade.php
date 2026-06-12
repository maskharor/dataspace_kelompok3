<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User - DataSpace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0d1117;
        }

        /* Warna spesifik menyesuaikan UI */
        .bg-card {
            background-color: #161b22;
        }

        .border-line {
            border-color: #30363d;
        }
    </style>
</head>

<body class="text-gray-300 font-sans antialiased min-h-screen flex flex-col">

    <!-- TOP NAVBAR -->
    @include('components.navbar')

    <!-- MAIN CONTENT -->
    <main class="flex-1 w-full max-w-6xl mx-auto py-10 px-6">

        <!-- Greeting -->
        <div class="mb-10">
            <h2 class="text-4xl font-bold text-white mb-2 flex items-center gap-2">
                Halo, {{ Auth::user()->name }}! <span class="text-4xl">👋</span>
            </h2>

            <p class="text-gray-400">Lanjutkan belajarmu hari ini</p>
        </div>

        <!-- 4 Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
            <!-- Stat 1 -->
            <div class="bg-card border border-line rounded-2xl p-6 hover:border-gray-500 transition">
                <div class="w-12 h-12 bg-blue-500/10 text-blue-500 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                </div>
                <div class="flex items-end gap-2 mb-1">
                    <h3 class="text-3xl font-bold text-white leading-none">
                        {{ $modulSelesai }}
                    </h3>

                    <span class="text-gray-500 text-sm mb-0.5">
                        dari {{ $totalModul }}
                    </span>
                </div>
                <p class="text-gray-400 text-sm">Modul Selesai</p>
            </div>

            <!-- Stat 2 -->
            <div class="bg-card border border-line rounded-2xl p-6 hover:border-gray-500 transition">
                <div
                    class="w-12 h-12 bg-purple-500/10 text-purple-400 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-white mb-1 leading-none">{{ $totalQuiz }}</h3>
                <p class="text-gray-400 text-sm">Total Quiz Dikerjakan</p>
            </div>

            <!-- Stat 3 -->
            <div class="bg-card border border-line rounded-2xl p-6 hover:border-gray-500 transition">
                <div
                    class="w-12 h-12 bg-emerald-500/10 text-emerald-400 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-white mb-1 leading-none">{{ $rataSkor }}%</h3>
                <p class="text-gray-400 text-sm">Rata-rata Skor</p>
            </div>

            <!-- Stat 4 -->
            <div class="bg-card border border-line rounded-2xl p-6 hover:border-gray-500 transition">
                <div
                    class="w-12 h-12 bg-orange-500/10 text-orange-400 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-white mb-1 leading-none">
                    {{ $lulus }}
                </h3>

                <p class="text-gray-400 text-sm">
                    Quiz Lulus
                </p>
            </div>
        </div>

        <!-- Continue Learning Banner -->
        <div class="bg-card border border-line rounded-2xl p-8 mb-12 relative overflow-hidden group">
            <!-- Glow effect background -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-transparent opacity-50"></div>

            <div class="relative flex flex-col md:flex-row md:items-center justify-between gap-6">

                @if($terakhir)

                <div class="flex-1">

                    <p class="text-blue-400 text-xs font-bold tracking-wider uppercase mb-2">
                        Quiz Terakhir
                    </p>

                    <h3 class="text-2xl font-bold text-white mb-4">
                        {{ $terakhir->modul->judul }}
                    </h3>

                    <p class="text-sm text-gray-400">
                        Dikerjakan pada
                        {{ $terakhir->created_at->format('d M Y') }}
                    </p>

                </div>

                <a href="{{ route('materi.show', $terakhir->modul_id) }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-3 rounded-lg flex items-center justify-center gap-2 transition whitespace-nowrap">

                    Lihat Materi

                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3">
                        </path>
                    </svg>

                </a>

                @else

                <div class="flex-1">

                    <p class="text-blue-400 text-xs font-bold tracking-wider uppercase mb-2">
                        Selamat Datang
                    </p>

                    <h3 class="text-2xl font-bold text-white mb-4">
                        Belum ada aktivitas belajar
                    </h3>

                    <p class="text-sm text-gray-400">
                        Mulailah mengerjakan kuis pertamamu.
                    </p>

                </div>

                <a href="{{ route('materi.index') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-3 rounded-lg">

                    Jelajahi Materi

                </a>

                @endif

            </div>
        </div>

        <!-- Two Columns: Progres Modul & Riwayat Kuis -->
        <div class="grid grid-cols-1 xl:grid-cols-12 gap-8">

            <!-- LEFT COLUMN: Progres Modul -->
            <div class="xl:col-span-7 space-y-4">
                <h3 class="text-xl font-bold text-white mb-4">Progres Modul</h3>
                <div class="bg-card border border-line rounded-2xl overflow-hidden">
                    <table class="w-full text-left text-sm">
                        <thead class="text-gray-500 uppercase text-xs border-b border-line bg-[#161b22]/50">
                            <tr>
                                <th class="px-6 py-4 font-medium">Modul</th>
                                <th class="px-6 py-4 font-medium">Progress</th>
                                <th class="px-6 py-4 font-medium text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            @foreach($moduls as $modul)

                            @php
                            $selesai = in_array($modul->id, $modulSelesaiIds);
                            @endphp

                            <tr class="hover:bg-gray-800/30 transition">

                                <td class="px-6 py-4">
                                    <span class="text-gray-200">
                                        {{ $modul->judul }}
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    {{ $selesai ? '100%' : '0%' }}
                                </td>

                                <td class="px-6 py-4 text-center">

                                    @if($selesai)
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                        Selesai
                                    </span>
                                    @else
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gray-800 text-gray-400 border border-gray-700">
                                        Belum Dimulai
                                    </span>
                                    @endif

                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- RIGHT COLUMN: Riwayat Kuis -->
            <div class="xl:col-span-5 space-y-4">
                <h3 class="text-xl font-bold text-white mb-4">Riwayat Kuis</h3>
                <div class="bg-card border border-line rounded-2xl overflow-hidden">
                    <table class="w-full text-left text-sm">
                        <thead class="text-gray-500 uppercase text-xs border-b border-line bg-[#161b22]/50">
                            <tr>
                                <th class="px-6 py-4 font-medium">Kuis</th>
                                <th class="px-6 py-4 font-medium">Skor</th>
                                <th class="px-6 py-4 font-medium">Tanggal</th>
                                <th class="px-6 py-4 font-medium text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">

                            @forelse($riwayat->take(5) as $item)

                            <tr class="hover:bg-gray-800/30 transition">

                                <td class="px-6 py-5 text-gray-200">
                                    Kuis: {{ $item->modul->judul }}
                                </td>

                                <td class="px-6 py-5 text-gray-300">
                                    {{ round($item->skor_akhir) }}
                                </td>

                                <td class="px-6 py-5 text-gray-400 text-xs">
                                    {{ $item->created_at->format('d M Y') }}
                                </td>

                                <td class="px-6 py-5 text-center">

                                    @if($item->skor_akhir >= 70)
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                        Lulus
                                    </span>
                                    @else
                                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                                        Tidak Lulus
                                    </span>
                                    @endif

                                </td>

                            </tr>

                            @empty

                            <tr>
                                <td colspan="4" class="px-6 py-6 text-center text-gray-400">
                                    Belum ada riwayat kuis.
                                </td>
                            </tr>

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-[#10141a] border-t border-line mt-auto">
        <div class="max-w-6xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <!-- Brand Info -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-6 h-6 bg-blue-500 rounded flex items-center justify-center text-white">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-white font-bold text-lg">DataSpace</h2>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">Platform interaktif untuk belajar<br>basis data</p>
                </div>

                <!-- Links 1 -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Pembelajaran</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-blue-400 transition">Materi</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Quiz</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Beranda</a></li>
                    </ul>
                </div>

                <!-- Links 2 -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Tentang</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-blue-400 transition">Tim</a></li>
                        <li><a href="#" class="hover:text-blue-400 transition">Kebijakan Privasi</a></li>
                    </ul>
                </div>

                <!-- Links 3 -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li>Filkom Universitas Brawijaya</li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center pt-8 border-t border-line text-sm text-gray-500">
                &copy; 2026 DataSpace — Filkom UB
            </div>
        </div>
    </footer>

</body>

</html>