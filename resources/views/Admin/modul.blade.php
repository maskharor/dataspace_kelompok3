<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kelola Modul - Admin Panel DataSpace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-[#0f1115] text-gray-300 font-sans antialiased flex h-screen overflow-hidden">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-[#14171d] border-r border-gray-800 flex flex-col justify-between shrink-0">
        <div>
            <!-- Logo Area -->
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

            <!-- Navigasi -->
            <nav class="p-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    Dashboard
                </a>

                <!-- Menu Modul Aktif -->
                <a href="{{ route('admin.modul') }}"
                    class="flex items-center gap-3 bg-[#1e232d] border border-blue-500/30 text-blue-400 px-4 py-3 rounded-lg font-medium transition shadow-[0_0_15px_rgba(59,130,246,0.1)]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                    Modul
                    <span class="ml-auto text-blue-500">›</span>
                </a>
                <a href="{{ route('admin.kuis') }}"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4">
                        </path>
                    </svg>
                    Kuis
                </a>
                <a href="{{ route('admin.pengguna') }}"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    Pengguna
                </a>
                <a href="{{ route('admin.pengaturan') }}"
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

        <!-- Profil User -->
        <div class="p-4">
            <div class="bg-[#1e232d] rounded-xl p-3 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center text-black font-bold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="overflow-hidden">
                    <div class="overflow-hidden">
                        <p class="text-white text-sm font-semibold truncate">
                            {{ auth()->user()->name }}
                        </p>
                        <p class="text-gray-500 text-xs truncate">
                            {{ auth()->user()->email }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 flex flex-col h-screen overflow-hidden">
        <!-- Topbar -->
        <header class="h-20 border-b border-gray-800 flex items-center justify-end px-8 shrink-0">
            <a href="{{ route('home') }}"
                class="flex items-center gap-2 px-4 py-2 bg-[#1e232d] text-gray-300 rounded-lg text-sm border border-gray-700 hover:text-white transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Ke Situs
            </a>
        </header>

        <!-- Page Content Area -->
        <div class="flex-1 overflow-y-auto p-8">
            <div class="max-w-[1400px] mx-auto space-y-8">
                <!-- Header Section -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-white mb-1">Kelola Modul</h2>
                        <p class="text-gray-400 text-sm">
                            {{ $published }} dipublikasi · {{ $draft }} draft
                        </p>
                    </div>
                    <button id="openModalBtn"
                        class="bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-400 hover:to-indigo-400 text-white px-5 py-2.5 rounded-lg font-medium flex items-center gap-2 transition shadow-lg shadow-blue-500/20">
                        <span class="text-lg leading-none">+</span> Tambah Modul
                    </button>
                </div>

                <!-- Search & Filters -->
                <div class="flex flex-col sm:flex-row gap-4">

                    <form method="GET" action="{{ route('admin.modul') }}" class="relative flex-1">

                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>

                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari modul..."
                            class="w-full pl-11 pr-20 py-3 bg-[#1e232d] border border-gray-800 rounded-xl text-sm text-gray-300 focus:outline-none focus:border-blue-500 transition placeholder-gray-500">

                        <button type="submit"
                            class="absolute right-2 top-1/2 -translate-y-1/2 px-3 py-1.5 bg-blue-500 hover:bg-blue-600 text-white text-xs rounded-lg transition">
                            Cari
                        </button>

                    </form>

                </div>

                <!-- Table Section -->
                <div class="bg-[#14171d] rounded-2xl border border-gray-800 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse whitespace-nowrap">
                            <thead>
                                <tr class="text-gray-500 text-sm border-b border-gray-800">
                                    <th class="py-4 px-6 font-medium">Modul</th>
                                    <th class="py-4 px-6 font-medium">Kesulitan</th>
                                    <th class="py-4 px-6 font-medium text-center">Subtopik</th>
                                    <th class="py-4 px-6 font-medium text-center">Peserta</th>
                                    <th class="py-4 px-6 font-medium">Status</th>
                                    <th class="py-4 px-6 font-medium">Diperbarui</th>
                                    <th class="py-4 px-6 font-medium text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">

                                @forelse($moduls as $modul)
                                    <tr class="border-b border-gray-800/50 hover:bg-[#1e232d] transition group">

                                        <td class="py-4 px-6">
                                            <div class="flex items-center gap-3">

                                                <div class="text-2xl w-8 text-center">📚</div>

                                                <div>
                                                    <p class="text-white font-medium mb-1">
                                                        {{ $modul->judul }}
                                                    </p>

                                                    <p class="text-gray-500 text-xs">
                                                        {{ \Illuminate\Support\Str::limit($modul->deskripsi, 50) }}
                                                    </p>
                                                </div>

                                            </div>
                                        </td>

                                        <td class="py-4 px-6">

                                            @if ($modul->kategori === 'pemula')
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                    Pemula
                                                </span>
                                            @elseif($modul->kategori === 'menengah')
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                                                    Menengah
                                                </span>
                                            @else
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                                                    Lanjut
                                                </span>
                                            @endif

                                        </td>

                                        <td class="py-4 px-6 text-center">
                                            -
                                        </td>

                                        <td class="py-4 px-6 text-center">
                                            -
                                        </td>

                                        <td class="py-4 px-6">

                                            @if ($modul->status === 'published')
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                                    Dipublikasi
                                                </span>
                                            @elseif($modul->status === 'draft')
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-gray-800/50 text-gray-400 border border-gray-700">
                                                    Draft
                                                </span>
                                            @elseif($modul->status === 'rejected')
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                                                    Ditolak
                                                </span>
                                            @endif

                                        </td>

                                        <td class="py-4 px-6 text-gray-500">
                                            {{ $modul->updated_at->format('d M Y') }}
                                        </td>

                                        <td class="py-4 px-6">

                                            <div class="flex items-center justify-end gap-3 text-gray-500">

                                                {{-- VIEW --}}
                                                <button class="btn-view hover:text-white transition"
                                                    data-id="{{ $modul->id }}">

                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0" />

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>

                                                </button>

                                                {{-- EDIT --}}
                                                <button class="btn-edit hover:text-blue-400 transition"
                                                    data-id="{{ $modul->id }}">

                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>

                                                </button>

                                                {{-- DELETE --}}
                                                <button class="btn-hapus hover:text-red-400 transition"
                                                    data-id="{{ $modul->id }}">

                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">

                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>

                                                </button>

                                            </div>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>
                                        <td colspan="7" class="text-center py-10 text-gray-500">
                                            Belum ada modul tersedia.
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAMBAH MODUL -->

        <div id="tambahModulModal"
            class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">

            <div
                class="bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-xl shadow-2xl shadow-black/50 transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]">

                <div class="flex justify-between items-center p-6 border-b border-gray-800 shrink-0">
                    <h3 class="text-xl font-bold text-white">Tambah Modul Baru</h3>
                    <button id="closeModalBtn"
                        class="close-modal-btn text-gray-400 hover:text-white transition bg-[#1e232d] hover:bg-gray-700 p-1.5 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <div class="p-6 overflow-y-auto custom-scrollbar">
                    <form method="POST" action="{{ route('admin.modul.store') }}" enctype="multipart/form-data"
                        class="space-y-5">

                        @csrf

                        {{-- Judul Modul --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Judul Modul*
                            </label>
                            <input type="text" name="judul" required placeholder="Masukkan judul modul"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300 focus:outline-none focus:border-blue-500">
                            </input>
                        </div>

                        {{-- Kategori --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Kategori *
                            </label>

                            <select name="kategori" required
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300 focus:outline-none focus:border-blue-500">

                                <option value="pemula">Pemula</option>
                                <option value="menengah">Menengah</option>
                                <option value="lanjut">Lanjut</option>

                            </select>
                        </div>

                        {{-- Deskripsi --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Deskripsi Singkat
                            </label>

                            <textarea name="deskripsi" rows="3" placeholder="Tuliskan gambaran singkat mengenai modul..."
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300 focus:outline-none focus:border-blue-500"></textarea>
                        </div>

                        {{-- Konten Materi --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Konten Materi
                            </label>

                            <textarea name="konten_teks" rows="8" placeholder="Tuliskan isi materi pembelajaran..."
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300 focus:outline-none focus:border-blue-500"></textarea>
                        </div>

                        {{-- Upload File --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                File Materi
                            </label>

                            <input type="file" name="konten_file" accept=".pdf,.doc,.docx,.ppt,.pptx"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300">

                            <p class="text-xs text-gray-500 mt-2">
                                Format: PDF, DOC, DOCX, PPT, PPTX
                            </p>
                        </div>

                        {{-- Upload Video --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Video Pembelajaran
                            </label>

                            <input type="file" name="video_path" accept=".mp4,.webm"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300">

                            <p class="text-xs text-gray-500 mt-2">
                                Format: MP4, WEBM
                            </p>
                        </div>

                        {{-- Tombol --}}
                        <div class="flex justify-end gap-3 pt-4 border-t border-gray-800">

                            <button type="button"
                                class="close-modal-btn px-5 py-2.5 bg-[#1e232d] border border-gray-700 rounded-lg text-gray-300 hover:bg-[#252b36] transition">
                                Batal
                            </button>

                            <button type="submit"
                                class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 rounded-lg text-white font-medium transition">
                                Simpan Modul
                            </button>

                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- MODAL VIEW, EDIT, HAPUS -->

        <div id="viewModulModal"
            class="modal-container fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
            <div
                class="bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-xl shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col">
                <div class="flex justify-between items-center p-6 border-b border-gray-800">
                    <h3 class="text-xl font-bold text-white">Detail Modul</h3>
                    <button
                        class="close-modal-btn text-gray-400 hover:text-white transition bg-[#1e232d] hover:bg-gray-700 p-1.5 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 space-y-4">

                    <div>
                        <p class="text-sm text-gray-500 mb-1">
                            Judul Modul
                        </p>

                        <p id="detailJudul" class="text-white font-medium">
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">
                            Kategori
                        </p>

                        <div id="detailKategori" class="flex gap-2">
                        </div>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">
                            Deskripsi Singkat
                        </p>

                        <p id="detailDeskripsi" class="text-gray-300 text-sm leading-relaxed">
                        </p>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">
                            Konten Materi
                        </p>

                        <div id="detailKonten"
                            class="text-gray-300 text-sm whitespace-pre-wrap max-h-48 overflow-y-auto">
                        </div>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">
                            File Materi
                        </p>

                        <a id="detailFile" target="_blank" class="text-blue-400 hover:text-blue-300">
                        </a>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">
                            Video Pembelajaran
                        </p>

                        <video id="detailVideo" controls class="w-full rounded-lg hidden">
                        </video>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 mb-1">
                            Status Review
                        </p>

                        <div id="detailStatus">
                        </div>
                    </div>

                    <div>
                        <p class="text-sm text-gray-500 mb-1">
                            Catatan Dosen
                        </p>

                        <div id="detailCatatan"
                            class="text-gray-300 text-sm whitespace-pre-wrap bg-[#1e232d] border border-gray-700 rounded-lg p-3">
                            Belum ada catatan.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="editModulModal"
            class="modal-container fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
            <div
                class="bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-xl shadow-2xl transform scale-95 transition-transform duration-300 flex flex-col max-h-[90vh]">
                <div class="flex justify-between items-center p-6 border-b border-gray-800 shrink-0">
                    <h3 class="text-xl font-bold text-white">Edit Modul</h3>
                    <button
                        class="close-modal-btn text-gray-400 hover:text-white transition bg-[#1e232d] hover:bg-gray-700 p-1.5 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-6 overflow-y-auto custom-scrollbar">
                    <form id="editForm" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf
                        @method('PUT')
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Judul Modul
                            </label>
                            <input id="editJudul" name="judul" type="text" required
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Kategori
                            </label>
                            <select id="editKategori" name="kategori"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300">
                                <option value="pemula">Pemula</option>
                                <option value="menengah">Menengah</option>
                                <option value="lanjut">Lanjut</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Deskripsi
                            </label>
                            <textarea id="editDeskripsi" name="deskripsi" rows="3"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Konten Materi
                            </label>
                            <textarea id="editKonten" name="konten_teks" rows="6"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                File Materi
                            </label>
                            <input type="file" name="konten_file"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Video Pembelajaran
                            </label>
                            <input type="file" name="video_path"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-gray-300">
                        </div>
                    </form>
                </div>
                <div class="p-6 border-t border-gray-800 flex justify-end gap-3 bg-[#181b22] rounded-b-2xl shrink-0">
                    <button type="button"
                        class="close-modal-btn px-5 py-2.5 text-sm font-medium text-gray-400 hover:text-white bg-transparent hover:bg-[#252b36] border border-gray-700 rounded-lg transition">Batal</button>
                    <button type="submit" form="editForm"
                        class="bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-400 hover:to-indigo-400 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-lg shadow-blue-500/20">
                        Simpan Perubahan
                    </button>
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
                <h3 class="text-xl font-bold text-white mb-2">Hapus Modul?</h3>
                <p class="text-gray-400 text-sm mb-6">Apakah Anda yakin ingin menghapus modul ini? Semua materi
                    di
                    dalamnya akan ikut terhapus dan tidak dapat dikembalikan.</p>
                <div class="flex justify-center gap-3">
                    <button type="button"
                        class="close-modal-btn px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-white bg-[#1e232d] border border-gray-700 hover:bg-gray-700 rounded-lg transition w-full">
                        Batal
                    </button>
                    <button id="confirmDeleteBtn" type="button"
                        class="bg-red-500 hover:bg-red-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition shadow-lg shadow-red-500/20 w-full">
                        Ya, Hapus
                    </button>
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

            document.getElementById('openModalBtn').addEventListener('click', () => openModal('tambahModulModal'));

            document.querySelectorAll('.close-modal-btn').forEach(btn => {
                btn.addEventListener('click', () => {
                    const modal = btn.closest('.fixed');
                    if (modal) {
                        closeModal(modal);
                    }
                });
            });

            /* ==========================================
            DETAIL MODUL
            ========================================== */
            document.querySelectorAll('.btn-view').forEach(btn => {
                btn.addEventListener('click', async () => {

                    const id = btn.dataset.id;

                    try {
                        const response = await fetch(`/admin/modul/${id}`);
                        const modul = await response.json();

                        document.getElementById('detailJudul').textContent =
                            modul.judul;
                        document.getElementById('detailDeskripsi').textContent =
                            modul.deskripsi ?? '-';
                        document.getElementById('detailKonten').innerHTML =
                            modul.konten_teks ?? '-';
                        document.getElementById('detailCatatan').textContent =
                            modul.catatan_revisi ??
                            'Belum ada catatan dari dosen.';
                        document.getElementById('detailKategori').innerHTML =
                            `<span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                    ${modul.kategori}
                </span>`;
                        const statusElement =
                            document.getElementById('detailStatus');

                        let statusBadge = '';

                        switch (modul.status) {

                            case 'published':
                                statusBadge = `
            <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-500/10 text-green-400 border border-green-500/20">
                Dipublikasikan
            </span>`;
                                break;

                            case 'rejected':
                                statusBadge = `
            <span class="px-3 py-1 rounded-full text-xs font-medium bg-red-500/10 text-red-400 border border-red-500/20">
                Ditolak
            </span>`;
                                break;
                            default:
                                statusBadge = `
            <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                Draf
            </span>`;
                        }

                        statusElement.innerHTML = statusBadge;
                        const fileLink =
                            document.getElementById('detailFile');
                        if (modul.konten_file) {
                            fileLink.href =
                                `/storage/${modul.konten_file}`;
                            fileLink.textContent =
                                'Lihat File Materi';
                        } else {
                            fileLink.removeAttribute('href');
                            fileLink.textContent =
                                'Tidak ada file';
                        }
                        const video =
                            document.getElementById('detailVideo');
                        if (modul.video_path) {
                            video.src =
                                `/storage/${modul.video_path}`;
                            video.classList.remove('hidden');
                        } else {
                            video.src = '';
                            video.classList.add('hidden');
                        }
                        openModal('viewModulModal');
                    } catch (error) {
                        console.error(error);
                        alert('Gagal memuat detail modul');
                    }
                });
            });

            /* ==========================================
               EDIT MODUL
            ========================================== */
            document.querySelectorAll('.btn-edit').forEach(btn => {
                btn.addEventListener('click', async () => {

                    const id = btn.dataset.id;

                    try {
                        const response =
                            await fetch(`/admin/modul/${id}`);
                        const modul =
                            await response.json();
                        document.getElementById('editForm').action =
                            `/admin/modul/${id}`;
                        document.getElementById('editJudul').value =
                            modul.judul ?? '';
                        document.getElementById('editKategori').value =
                            modul.kategori ?? 'pemula';
                        document.getElementById('editDeskripsi').value =
                            modul.deskripsi ?? '';
                        document.getElementById('editKonten').value =
                            modul.konten_teks ?? '';
                        openModal('editModulModal');
                    } catch (error) {
                        console.error(error);
                        alert('Gagal memuat data modul');
                    }
                });
            });

            /* ==========================================
               DELETE MODUL
            ========================================== */
            let deleteId = null;
            document.querySelectorAll('.btn-hapus').forEach(btn => {
                btn.addEventListener('click', () => {
                    deleteId = btn.dataset.id;
                    openModal('hapusModulModal');
                });
            });

            document.getElementById('confirmDeleteBtn')
                .addEventListener('click', async () => {
                    try {
                        const response = await fetch(
                            `/admin/modul/${deleteId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]'
                                    ).content,
                                    'Accept': 'application/json'
                                }
                            }
                        );
                        if (!response.ok) {
                            throw new Error();
                        }
                        location.reload();
                    } catch (error) {
                        console.error(error);
                        alert('Gagal menghapus modul');
                    }
                });
        });
    </script>
</body>

</html>
