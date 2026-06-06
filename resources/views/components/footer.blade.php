<footer class="border-t border-slate-800/80 bg-[#0b1120] mt-12 pt-16 pb-8">

    <div class="container mx-auto px-6 lg:px-12 grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">

        <div class="col-span-1">
            <div class="flex items-center space-x-2 text-white font-bold text-lg mb-4">

                <div class="w-5 h-5 bg-blue-500 rounded flex items-center justify-center">
                    <svg class="w-3 h-3 text-white"
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

            <p class="text-sm text-slate-500">
                Platform interaktif untuk belajar basis data.
            </p>
        </div>

        <div>
            <h5 class="text-white font-medium mb-4">
                Pembelajaran
            </h5>

            <ul class="text-sm text-slate-500 space-y-3">
                <li>
                    <a href="{{ route('materi.index') }}"
                        class="hover:text-slate-300">
                        Materi
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="hover:text-slate-300">
                        Quiz
                    </a>
                </li>

                <li>
                    <a href="{{ url('/') }}"
                        class="hover:text-slate-300">
                        Beranda
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h5 class="text-white font-medium mb-4">
                Tentang
            </h5>

            <ul class="text-sm text-slate-500 space-y-3">
                <li>
                    <a href="#"
                        class="hover:text-slate-300">
                        Tim Pengembang
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="hover:text-slate-300">
                        Kebijakan Privasi
                    </a>
                </li>
            </ul>
        </div>

        <div>
            <h5 class="text-white font-medium mb-4">
                Kontak
            </h5>

            <p class="text-sm text-slate-500">
                Fakultas Ilmu Komputer
                <br>
                Universitas Brawijaya
            </p>
        </div>

    </div>

    <div class="container mx-auto px-6 lg:px-12 text-center text-xs text-slate-600">
        © {{ date('Y') }} DataSpace — Filkom UB
    </div>

</footer>