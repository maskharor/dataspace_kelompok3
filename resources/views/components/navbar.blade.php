@php
    $currentClass = 'text-blue-400';
    $defaultClass = 'text-slate-400 hover:text-slate-300';
@endphp

<nav class="container mx-auto px-6 lg:px-12 py-6 flex justify-between items-center">

    <div class="flex items-center space-x-3 text-white font-bold text-xl">
        <div class="w-7 h-7 bg-blue-500 rounded flex items-center justify-center">
            <svg class="w-4 h-4 text-white"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4">
                </path>
            </svg>
        </div>

        <span>DataSpace</span>
    </div>

    <div class="hidden md:flex space-x-8 text-sm font-medium">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? $currentClass : $defaultClass }}">
            Beranda
        </a>
        <a href="{{ route('materi.index') }}" class="{{ request()->routeIs('materi.*') ? $currentClass : $defaultClass }}">
            Materi
        </a>
       
        <a href="#" class="{{ request()->routeIs('quiz.*') ? $currentClass : $defaultClass }}">
            Quiz
        </a>

    </div>

    @auth
        <div class="flex items-center gap-3">

            <span class="text-white font-medium">
                {{ Auth::user()->name }}
            </span>

            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-semibold">
                {{ strtoupper(substr(Auth::user()->name,0,1)) }}
            </div>

        </div>
    @else

        <div class="hidden md:flex space-x-4 text-sm font-medium">

            <a href="{{ route('login') }}"
                class="px-5 py-2 border border-slate-700 rounded-lg hover:bg-slate-800 transition text-white">
                Masuk
            </a>

            <a href="{{ route('register') }}"
                class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Daftar
            </a>

        </div>

    @endauth

</nav>