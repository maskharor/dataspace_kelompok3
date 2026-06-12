<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kelola Pengguna - Admin Panel DataSpace</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
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
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.modul') }}"
                    class="flex items-center gap-3 text-gray-400 hover:text-white hover:bg-[#1e232d] px-4 py-3 rounded-lg font-medium transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                        </path>
                    </svg>
                    Modul
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
                    class="flex items-center gap-3 bg-[#1e232d] border border-blue-500/30 text-blue-400 px-4 py-3 rounded-lg font-medium transition shadow-[0_0_15px_rgba(59,130,246,0.1)]">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    Pengguna
                    <span class="ml-auto text-blue-500">›</span>
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

        <div class="p-4">
            <div class="bg-[#1e232d] rounded-xl p-3 flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-orange-400 flex items-center justify-center text-black font-bold">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div class="overflow-hidden">
                    <p class="text-white text-sm font-semibold truncate">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="text-gray-500 text-xs truncate">
                        {{ Auth::user()->email }}
                    </p>
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

        <div class="flex-1 overflow-y-auto p-8">
            <div class="max-w-[1400px] mx-auto space-y-8">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-3xl font-bold text-white mb-1">Kelola Pengguna</h2>
                        <p class="text-gray-400 text-sm">
                            Menampilkan {{ $users->count() }} dari {{ $totalUsers }} pengguna
                        </p>
                    </div>
                </div>

                <form method="GET" action="{{ route('admin.pengguna') }}" class="flex flex-col sm:flex-row gap-4">

                    <div class="relative flex-1">

                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                                </path>
                            </svg>
                        </div>

                        <input type="text" name="search" value="{{ request('search') }}"
                            placeholder="Cari nama atau email pengguna..."
                            class="w-full pl-11 pr-4 py-3 bg-[#1e232d] border border-gray-800 rounded-xl text-sm text-gray-300 focus:outline-none focus:border-blue-500 transition placeholder-gray-500">
                    </div>

                    <div class="flex gap-3">

                        <div class="relative w-48">

                            <select name="role"
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-800 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500 transition appearance-none cursor-pointer">

                                <option value="">Semua Peran</option>

                                <option value="admin" {{ request('role') == 'admin' ? 'selected' : '' }}>
                                    Admin
                                </option>

                                <option value="dosen" {{ request('role') == 'dosen' ? 'selected' : '' }}>
                                    Dosen
                                </option>

                                <option value="mahasiswa" {{ request('role') == 'mahasiswa' ? 'selected' : '' }}>
                                    Mahasiswa
                                </option>

                            </select>

                            <!-- Panah Dropdown -->

                            <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">

                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">

                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7">
                                    </path>

                                </svg>

                            </div>

                        </div>

                        <button type="submit"
                            class="px-5 py-3 bg-blue-500 hover:bg-blue-600 text-white text-sm rounded-xl transition font-medium">

                            Cari

                        </button>

                    </div>

                </form>

                <div class="bg-[#14171d] rounded-2xl border border-gray-800 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse whitespace-nowrap">
                            <thead>
                                <tr class="text-gray-500 text-sm border-b border-gray-800">
                                    <th class="py-4 px-6 font-medium">Pengguna</th>
                                    <th class="py-4 px-6 font-medium">Peran</th>
                                    <th class="py-4 px-6 font-medium">Status</th>
                                    <th class="py-4 px-6 font-medium">Bergabung Pada</th>
                                    <th class="py-4 px-6 font-medium text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                @forelse($users as $user)
                                    <tr class="border-b border-gray-800/50 hover:bg-[#1e232d] transition group">
                                        <td class="py-4 px-6">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center font-bold">
                                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <p class="text-white font-medium mb-0.5">
                                                        {{ $user->name }}
                                                    </p>
                                                    <p class="text-gray-500 text-xs">
                                                        {{ $user->email }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            @if ($user->role === 'admin')
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-purple-500/10 text-purple-400 border border-purple-500/20">
                                                    Administrator
                                                </span>
                                            @elseif($user->role === 'dosen')
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-500/10 text-yellow-400 border border-yellow-500/20">
                                                    Dosen
                                                </span>
                                            @else
                                                <span
                                                    class="px-3 py-1 rounded-full text-xs font-medium bg-blue-500/10 text-blue-400 border border-blue-500/20">
                                                    Mahasiswa
                                                </span>
                                            @endif
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center gap-2">
                                                <div class="w-2 h-2 rounded-full bg-emerald-500"></div>
                                                <span class="text-gray-300">
                                                    Aktif
                                                </span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 text-gray-500">
                                            {{ $user->created_at->format('d M Y') }}
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center justify-end gap-3 text-gray-500">
                                                <button class="btn-edit hover:text-blue-400 transition"
                                                    data-id="{{ $user->id }}">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                        </path>
                                                    </svg>
                                                </button>
                                                @if (auth()->id() !== $user->id)
                                                    <button class="btn-hapus hover:text-red-400 transition"
                                                        data-id="{{ $user->id }}">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-10 text-gray-500">
                                            Belum ada pengguna.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- EDIT USER MODAL -->
        <div id="editUserModal"
            class="modal-container fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">

            <div
                class="transform scale-95 transition-transform duration-300 bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-xl overflow-hidden">

                <div class="flex justify-between items-center p-6 border-b border-gray-800">

                    <div>
                        <h3 class="text-xl font-bold text-white">
                            Edit Pengguna
                        </h3>

                        <p class="text-sm text-gray-400 mt-1">
                            Perbarui data pengguna.
                        </p>
                    </div>

                    <button type="button" class="close-modal-btn text-gray-400 hover:text-white transition">

                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>

                        </svg>

                    </button>

                </div>

                <form id="editUserForm" method="POST">

                    @csrf
                    @method('PUT')

                    <div class="p-6 space-y-5">

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Nama Lengkap
                            </label>

                            <input id="editName" name="name" type="text" required
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Email
                            </label>

                            <input id="editEmail" name="email" type="email" required
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-300 mb-2">
                                Peran
                            </label>

                            <select id="editRole" name="role" required
                                class="w-full px-4 py-3 bg-[#1e232d] border border-gray-700 rounded-xl text-white text-sm focus:outline-none focus:border-blue-500">

                                <option value="admin">Admin</option>
                                <option value="dosen">Dosen</option>
                                <option value="mahasiswa">Mahasiswa</option>

                            </select>
                        </div>

                    </div>

                    <div class="p-6 border-t border-gray-800 flex justify-end gap-3 bg-[#181b22]">

                        <button type="button"
                            class="close-modal-btn px-5 py-2.5 text-sm font-medium text-gray-400 hover:text-white bg-transparent hover:bg-[#252b36] border border-gray-700 rounded-lg transition">

                            Batal

                        </button>

                        <button type="submit"
                            class="bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-400 hover:to-indigo-400 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition">

                            Simpan Perubahan

                        </button>

                    </div>

                </form>

            </div>
        </div>

        <!-- DELETE USER MODAL -->
        <div id="hapusUserModal"
            class="modal-container fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">

            <div
                class="transform scale-95 transition-transform duration-300 bg-[#14171d] border border-gray-800 rounded-2xl w-full max-w-md p-6 text-center">

                <div class="w-16 h-16 bg-red-500/10 rounded-full flex items-center justify-center mx-auto mb-4">

                    <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                        </path>

                    </svg>

                </div>

                <h3 class="text-xl font-bold text-white mb-2">
                    Hapus Pengguna?
                </h3>

                <p class="text-gray-400 text-sm mb-6">
                    Pengguna yang dihapus tidak dapat dikembalikan.
                </p>

                <div class="flex justify-center gap-3">

                    <button type="button"
                        class="close-modal-btn px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-white bg-[#1e232d] border border-gray-700 rounded-lg transition w-full">

                        Batal

                    </button>

                    <button id="confirmDeleteUserBtn" type="button"
                        class="bg-red-500 hover:bg-red-600 text-white px-5 py-2.5 rounded-lg text-sm font-medium transition w-full">

                        Ya, Hapus

                    </button>

                </div>

            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /* ==========================================
               OPEN MODAL
            ========================================== */

            function openModal(modalId) {

                const modal = document.getElementById(modalId);

                if (!modal) return;

                const modalBox = modal.querySelector('.transform');

                modal.classList.remove('hidden');

                setTimeout(() => {

                    modal.classList.remove('opacity-0');

                    if (modalBox) {
                        modalBox.classList.remove('scale-95');
                        modalBox.classList.add('scale-100');
                    }

                }, 10);
            }

            /* ==========================================
               CLOSE MODAL
            ========================================== */

            function closeModal(modal) {

                const modalBox = modal.querySelector('.transform');

                modal.classList.add('opacity-0');

                if (modalBox) {
                    modalBox.classList.remove('scale-100');
                    modalBox.classList.add('scale-95');
                }

                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }

            /* ==========================================
               EDIT USER
            ========================================== */

            document.querySelectorAll('.btn-edit').forEach(btn => {

                btn.addEventListener('click', async () => {

                    const id = btn.dataset.id;

                    try {

                        const response =
                            await fetch(`/admin/pengguna/${id}`);

                        const user =
                            await response.json();

                        document.getElementById('editUserForm').action =
                            `/admin/pengguna/${id}`;

                        document.getElementById('editName').value =
                            user.name ?? '';

                        document.getElementById('editEmail').value =
                            user.email ?? '';

                        document.getElementById('editRole').value =
                            user.role ?? 'mahasiswa';

                        openModal('editUserModal');

                    } catch (error) {

                        console.error(error);

                        alert('Gagal memuat data pengguna');

                    }

                });

            });

            /* ==========================================
               DELETE USER
            ========================================== */

            let deleteUserId = null;

            document.querySelectorAll('.btn-hapus').forEach(btn => {

                btn.addEventListener('click', () => {

                    deleteUserId = btn.dataset.id;

                    openModal('hapusUserModal');

                });

            });

            const deleteBtn =
                document.getElementById('confirmDeleteUserBtn');

            if (deleteBtn) {

                deleteBtn.addEventListener('click', async () => {

                    try {

                        const response = await fetch(
                            `/admin/pengguna/${deleteUserId}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]'
                                    ).content,
                                    'Accept': 'application/json'
                                }
                            }
                        );

                        const result =
                            await response.json();

                        if (!response.ok) {

                            alert(
                                result.message ??
                                'Gagal menghapus pengguna'
                            );

                            return;
                        }

                        location.reload();

                    } catch (error) {

                        console.error(error);

                        alert('Terjadi kesalahan');

                    }

                });

            }

            /* ==========================================
               CLOSE ALL MODALS
            ========================================== */

            document.querySelectorAll('.modal-container')
                .forEach(modal => {

                    modal.querySelectorAll('.close-modal-btn')
                        .forEach(btn => {

                            btn.addEventListener('click', () => {
                                closeModal(modal);
                            });

                        });

                    modal.addEventListener('click', (e) => {

                        if (e.target === modal) {
                            closeModal(modal);
                        }
                    });
                });
        });
    </script>
</body>

</html>
