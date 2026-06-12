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
<button
        id="profileButton"
        class="flex items-center gap-3 hover:bg-slate-800 px-3 py-2 rounded-xl transition">

        <div class="w-9 h-9 rounded-full bg-blue-500 flex items-center justify-center text-white font-semibold">
            {{ strtoupper(substr(Auth::user()->name,0,1)) }}
        </div>

        <span class="text-white text-sm">
            {{ Auth::user()->name }}
        </span>

        <svg class="w-4 h-4 text-slate-400"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7" />
        </svg>

    </button>

    <div
        id="profileDropdown"
        class="hidden absolute right-0 mt-2 w-56 bg-[#141A2B] border border-slate-700 rounded-2xl shadow-xl overflow-hidden z-50">

        <!-- <div class="px-4 py-3 border-b border-slate-700">
            <p class="text-white text-sm font-medium">
                {{ Auth::user()->name }}
            </p>

            <p class="text-slate-400 text-xs">
                {{ Auth::user()->email }}
            </p>
        </div> -->

        @auth
            @if(Auth::user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}"class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-800 transition">
                     Dashboard
                </a>
            @elseif(Auth::user()->role === 'dosen')
                <a href="{{ route('dosen.dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-800 transition">
                    Dashboard
                </a>
            @else
                <a href="{{ route('dashboard') }}"class="flex items-center gap-3 px-4 py-3 text-slate-300 hover:bg-slate-800 transition">
                    Dashboard
                </a>
            @endif
        @endauth

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button
                type="submit"
                class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-slate-800 transition">

                <svg class="w-5 h-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h5a2 2 0 012 2v1" />
                </svg>

                Logout
            </button>
        </form>

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

<script>
    const profileButton = document.getElementById('profileButton');
    const profileDropdown = document.getElementById('profileDropdown');

    if (profileButton) {

        profileButton.addEventListener('click', function(e) {
            e.stopPropagation();
            profileDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', function() {
            profileDropdown.classList.add('hidden');
        });

        profileDropdown.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
</script>
