<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi - DataSpace</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#070B17] text-white min-h-screen">

    @include('components.navbar')

    <main>

        {{-- Header --}}
        <section class="max-w-7xl mx-auto px-6 py-10">

            <div class="flex items-center gap-2 text-sm text-slate-500 mb-6">
                <span>Home</span>
                <span>›</span>
                <span class="text-slate-300">Materi</span>
            </div>

            <h1 class="text-5xl font-bold mb-3">
                Semua Modul Pembelajaran
            </h1>

            <p class="text-slate-400 text-lg">
                Pilih topik yang ingin kamu pelajari
            </p>

        </section>

        {{-- Search + Filter --}}
        <section class="max-w-7xl mx-auto px-6 mb-10">

            <div class="flex flex-col lg:flex-row gap-5">

                <form action="{{ route('materi.index') }}" method="GET" class="flex-1">

                    <div class="relative">

                        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-slate-500"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z" />
                        </svg>

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            placeholder="Cari modul..."
                            class="w-full bg-[#141A2B] border border-slate-700 rounded-2xl py-4 pl-12 pr-4 text-white placeholder:text-slate-500 focus:outline-none">

                    </div>

                </form>

                <div class="flex flex-wrap gap-3">

                    <a href="{{ route('materi.index') }}"
                        class="px-6 py-3 rounded-full {{ !request('kategori') ? 'bg-blue-500 text-black' : 'border border-slate-700 text-slate-300' }}">
                        Semua
                    </a>

                    <a href="{{ route('materi.index',['kategori'=>'pemula']) }}"
                        class="px-6 py-3 rounded-full {{ request('kategori')=='pemula' ? 'bg-blue-500 text-black' : 'border border-slate-700 text-slate-300' }}">
                        Pemula
                    </a>

                    <a href="{{ route('materi.index',['kategori'=>'menengah']) }}"
                        class="px-6 py-3 rounded-full {{ request('kategori')=='menengah' ? 'bg-blue-500 text-black' : 'border border-slate-700 text-slate-300' }}">
                        Menengah
                    </a>

                    <a href="{{ route('materi.index',['kategori'=>'lanjut']) }}"
                        class="px-6 py-3 rounded-full {{ request('kategori')=='lanjut' ? 'bg-blue-500 text-black' : 'border border-slate-700 text-slate-300' }}">
                        Lanjut
                    </a>

                </div>

            </div>

        </section>

        {{-- Modul Grid --}}
        <section class="max-w-7xl mx-auto px-6 pb-16">

            @if($modules->count())

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">

                @foreach($modules as $module)

                <div class="bg-[#141A2B] border border-slate-800 rounded-3xl p-6 hover:border-blue-500/30 transition">

                    {{-- Header Card --}}
                    <div class="flex justify-between items-start mb-5">

                        <div class="w-12 h-12 rounded-xl bg-slate-700 flex items-center justify-center text-xl">
                            📘
                        </div>

                        @php
                        $badgeColor = match($module->kategori){
                        'pemula' => 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20',
                        'menengah' => 'bg-amber-500/10 text-amber-400 border border-amber-500/20',
                        'lanjut' => 'bg-red-500/10 text-red-400 border border-red-500/20',
                        default => 'bg-slate-500/10 text-slate-400'
                        };
                        @endphp

                        <span class="px-3 py-1 rounded-full text-xs {{ $badgeColor }}">
                            {{ ucfirst($module->kategori) }}
                        </span>

                    </div>

                    {{-- Judul --}}
                    <h3 class="text-xl font-semibold mb-3">
                        {{ $module->judul }}
                    </h3>

                    {{-- Deskripsi --}}
                    <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
                        {{ $module->deskripsi }}
                    </p>

                    {{-- Progress Dummy --}}
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-slate-500">Progress</span>
                        <span class="text-blue-400">0%</span>
                    </div>

                    <div class="w-full h-2 bg-slate-800 rounded-full mb-5">
                        <div class="h-full w-0 rounded-full bg-gradient-to-r from-blue-500 to-purple-500"></div>
                    </div>

                    {{-- Info --}}
                    <div class="flex items-center gap-4 text-sm text-slate-500 mb-6">

                        <span>
                            📖 Materi
                        </span>

                        <span>
                            {{ ucfirst($module->kategori) }}
                        </span>

                    </div>

                    {{-- Button --}}
                    @auth

                    <a href="{{ route('materi.show',$module->id) }}"
                        class="block text-center py-3 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-400 hover:bg-blue-500/20 transition">
                        Mulai Belajar 
                    </a>

                    @else

                    <a href="{{ route('login') }}"
                        class="block text-center py-3 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-400 hover:bg-blue-500/20 transition">
                        Login untuk Belajar
                    </a>

                    @endauth

                </div>

                @endforeach

            </div>

            @else

            <div class="text-center py-20">

                <div class="text-5xl mb-4">
                    📚
                </div>

                <h3 class="text-xl font-semibold mb-2">
                    Modul tidak ditemukan
                </h3>

                <p class="text-slate-400">
                    Coba gunakan kata kunci lain atau pilih kategori berbeda.
                </p>

            </div>

            @endif

        </section>

    </main>

    @include('components.footer')

</body>

</html>