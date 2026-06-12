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
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                <div class="overflow-hidden">
                    <p class="text-white text-sm font-semibold truncate">{{ Auth::user()->name }}</p>
                    <p class="text-gray-500 text-xs truncate">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden">
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

        <div class="flex-1 overflow-y-auto p-8 custom-scrollbar">
            <div class="max-w-5xl mx-auto space-y-8">

                <div>
                    <h2 class="text-3xl font-bold text-white mb-2">Selamat datang kembali, {{ Auth::user()->name }}!!
                    </h2>
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
                            <h3 class="text-3xl font-bold text-white">
                                {{ $totalModul }}
                            </h3>
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
                            <h3 class="text-3xl font-bold text-white">
                                {{ $publishedModul }}
                            </h3>
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
                            <p class="text-gray-400 text-sm font-medium mb-0.5">Menunggu Tinjauan)</p>
                            <h3 class="text-3xl font-bold text-white">
                                {{ $draftModul }}
                            </h3>
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
                            <p class="text-gray-400 text-sm font-medium mb-0.5">Ditolak)</p>
                            <h3 class="text-3xl font-bold text-white">
                                {{ $rejectedModul }}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="bg-[#14171d] border border-gray-800 rounded-2xl mb-10 pb-10">
                    <div class="px-8 py-6 border-b border-gray-800">
                        <h3 class="text-lg font-bold text-white">Daftar Modul</h3>
                    </div>
                    <div class="divide-y divide-gray-800">
                        @forelse($moduls as $modul)
                            @php
                                $statusConfig = match ($modul->status) {
                                    'published' => [
                                        'label' => 'Dipublikasikan',
                                        'button' =>
                                            'bg-emerald-500/10 text-emerald-500 border-emerald-500/20 hover:bg-emerald-500/20',
                                    ],
                                    'rejected' => [
                                        'label' => 'Ditolak',
                                        'button' => 'bg-red-500/10 text-red-500 border-red-500/20 hover:bg-red-500/20',
                                    ],
                                    default => [
                                        'label' => 'Draf',
                                        'button' =>
                                            'bg-yellow-500/10 text-yellow-500 border-yellow-500/20 hover:bg-yellow-500/20',
                                    ],
                                };
                            @endphp
                            <div
                                class="p-8 flex flex-col md:flex-row md:items-center justify-between gap-6 hover:bg-[#1a1e28] transition">
                                <div class="flex items-start gap-5">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-[#1e232d] border border-gray-700 flex items-center justify-center text-gray-400 shrink-0">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-medium text-white mb-1">
                                            {{ $modul->judul }}
                                        </h4>
                                        <p class="text-gray-400 text-sm mb-3">
                                            {{ $modul->deskripsi ?? 'Tidak ada deskripsi.' }}
                                        </p>
                                        <div class="flex items-center gap-4 text-sm">
                                            <span class="text-gray-500">
                                                Diunggah:
                                                {{ $modul->created_at->format('d/m/Y') }}
                                            </span>
                                            <button type="button"
                                                class="btn-review flex items-center gap-1.5 text-blue-400 hover:text-blue-300 transition"
                                                data-id="{{ $modul->id }}">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                    </path>
                                                </svg>
                                                Review Modul
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span
                                        class="flex items-center justify-center w-36 px-4 py-2 rounded-full text-sm font-medium border whitespace-nowrap {{ $statusConfig['button'] }}">
                                        {{ $statusConfig['label'] }}
                                    </span>
                                </div>
                            </div>
                        @empty
                            <div class="p-8 text-center text-gray-500">
                                Belum ada modul tersedia.
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div id="reviewModal"
            class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4">

            <div class="bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-4xl max-h-[90vh] overflow-hidden">

                <div class="p-6 border-b border-gray-800 flex items-center justify-between">

                    <h3 class="text-xl font-semibold text-white">
                        Review Modul
                    </h3>

                    <button id="closeReviewModal" class="text-gray-400 hover:text-white text-2xl">
                        ×
                    </button>

                </div>

                <form id="reviewForm" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="p-6 overflow-y-auto max-h-[70vh] space-y-6">

                        <div>
                            <label class="text-gray-400 text-sm">
                                Judul Modul
                            </label>

                            <input id="reviewJudul" type="text" readonly
                                class="w-full mt-2 bg-[#1e232d] border border-gray-700 rounded-lg px-4 py-3 text-white">
                        </div>

                        <div>
                            <label class="text-gray-400 text-sm">
                                Deskripsi
                            </label>

                            <textarea id="reviewDeskripsi" readonly rows="3"
                                class="w-full mt-2 bg-[#1e232d] border border-gray-700 rounded-lg px-4 py-3 text-white"></textarea>
                        </div>

                        <div>
                            <label class="text-gray-400 text-sm">
                                Konten Materi
                            </label>

                            <textarea id="reviewKonten" readonly rows="8"
                                class="w-full mt-2 bg-[#1e232d] border border-gray-700 rounded-lg px-4 py-3 text-white"></textarea>
                        </div>

                        <div>
                            <label class="text-gray-400 text-sm">
                                Status Review
                            </label>

                            <select name="status" id="reviewStatus"
                                class="w-full mt-2 bg-[#1e232d] border border-gray-700 rounded-lg px-4 py-3 text-white">

                                <option value="draft">
                                    Draf
                                </option>

                                <option value="published">
                                    Dipublikasikan
                                </option>

                                <option value="rejected">
                                    Ditolak
                                </option>

                            </select>
                        </div>

                        <div>
                            <label class="text-gray-400 text-sm">
                                Catatan Revisi
                            </label>

                            <textarea name="catatan_revisi" id="reviewCatatan" rows="5" placeholder="Masukkan catatan revisi..."
                                class="w-full mt-2 bg-[#1e232d] border border-gray-700 rounded-lg px-4 py-3 text-white"></textarea>
                        </div>

                    </div>

                    <div class="p-6 border-t border-gray-800 flex justify-end gap-3">

                        <button type="button" id="cancelReviewBtn"
                            class="px-5 py-2 bg-[#1e232d] border border-gray-700 rounded-lg text-gray-300 hover:text-white">

                            Batal

                        </button>

                        <button type="submit" class="px-5 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">

                            Simpan Review

                        </button>

                    </div>

                </form>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const modal =
                document.getElementById('reviewModal');

            const reviewForm =
                document.getElementById('reviewForm');

            const closeBtn =
                document.getElementById('closeReviewModal');

            const cancelBtn =
                document.getElementById('cancelReviewBtn');

            function openModal() {
                modal.classList.remove('hidden');
            }

            function closeModal() {
                modal.classList.add('hidden');
            }

            closeBtn.addEventListener(
                'click',
                closeModal
            );

            cancelBtn.addEventListener(
                'click',
                closeModal
            );

            modal.addEventListener('click', (e) => {

                if (e.target === modal) {
                    closeModal();
                }

            });

            document.querySelectorAll('.btn-review')
                .forEach(button => {

                    button.addEventListener(
                        'click',
                        async () => {

                            const modulId =
                                button.dataset.id;

                            try {

                                const response =
                                    await fetch(
                                        `/dosen/modul/${modulId}`
                                    );

                                const modul =
                                    await response.json();

                                document.getElementById(
                                        'reviewJudul'
                                    ).value =
                                    modul.judul ?? '';

                                document.getElementById(
                                        'reviewDeskripsi'
                                    ).value =
                                    modul.deskripsi ?? '';

                                document.getElementById(
                                        'reviewKonten'
                                    ).value =
                                    modul.konten_teks ?? '';

                                document.getElementById(
                                        'reviewStatus'
                                    ).value =
                                    modul.status ?? 'draft';

                                document.getElementById(
                                        'reviewCatatan'
                                    ).value =
                                    modul.catatan_revisi ?? '';

                                reviewForm.action =
                                    `/dosen/modul/${modulId}/review`;

                                openModal();

                            } catch (error) {

                                console.error(error);

                                alert(
                                    'Gagal memuat data modul.'
                                );

                            }

                        }
                    );

                });

        });
    </script>
</body>

</html>
