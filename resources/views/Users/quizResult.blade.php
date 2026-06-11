<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Hasil Kuis</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#070B17] text-white min-h-screen flex flex-col">

    @include('components.navbar')

    <main class="flex-1 flex items-center justify-center px-6 py-12">

        <div class="w-full max-w-3xl">

            <div class="bg-[#141A2B] border border-slate-700 rounded-3xl p-8 md:p-12 shadow-xl">

                {{-- Icon --}}
                <div class="flex justify-center mb-6">
                    <div class="w-24 h-24 rounded-full bg-blue-500/10 flex items-center justify-center text-5xl">
                        🎉
                    </div>
                </div>

                {{-- Judul --}}
                <div class="text-center mb-8">
                    <h1 class="text-4xl font-bold mb-3">
                        Quiz Selesai!
                    </h1>

                    <p class="text-slate-400">
                        Terima kasih telah menyelesaikan kuis ini.
                    </p>
                </div>

                {{-- Nilai --}}
                <div class="bg-[#0E1423] border border-slate-700 rounded-2xl p-8 text-center mb-8">

                    <p class="text-slate-400 uppercase tracking-wider text-sm mb-3">
                        Nilai Akhir Kamu
                    </p>

                    <h2 class="text-6xl md:text-7xl font-bold text-blue-400">
                        {{ number_format($nilai, 0) }}%
                    </h2>

                </div>

                {{-- Status --}}
                <div class="flex justify-center mb-10">

                    @if($nilai >= 80)

                    <div class="px-5 py-2 rounded-full bg-green-500/10 border border-green-500 text-green-400 font-medium">
                        ✅ Sangat Baik!
                    </div>

                    @elseif($nilai >= 60)

                    <div class="px-5 py-2 rounded-full bg-yellow-500/10 border border-yellow-500 text-yellow-400 font-medium">
                        👍 Cukup Baik!
                    </div>

                    @else

                    <div class="px-5 py-2 rounded-full bg-red-500/10 border border-red-500 text-red-400 font-medium">
                        📚 Perlu Belajar Lagi
                    </div>

                    @endif

                </div>

                {{-- Ringkasan --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">

                    <div class="bg-[#0E1423] border border-slate-700 rounded-2xl p-5 text-center">
                        <p class="text-slate-400 text-sm mb-2">
                            Status
                        </p>

                        <p class="font-semibold text-white">
                            Selesai
                        </p>
                    </div>

                    <div class="bg-[#0E1423] border border-slate-700 rounded-2xl p-5 text-center">
                        <p class="text-slate-400 text-sm mb-2">
                            Skor
                        </p>

                        <p class="font-semibold text-blue-400">
                            {{ number_format($nilai, 0) }}/100
                        </p>
                    </div>

                </div>

                {{-- Tombol --}}
                <div class="flex flex-col sm:flex-row gap-4 justify-center">

                    <a href="{{ route('dashboard') }}"
                        class="bg-blue-500 hover:bg-blue-600 transition duration-200 px-8 py-4 rounded-xl font-medium text-center">

                        Kembali ke Dashboard

                    </a>

                    <a href="{{ route('quiz', $modulId) }}"
                        class="border border-slate-600 hover:bg-slate-800 hover:border-slate-500 transition duration-200 px-8 py-4 rounded-xl font-medium text-center">

                        Ulangi Kuis

                    </a>

                </div>

            </div>

        </div>

    </main>

    @include('components.footer')

</body>

</html>