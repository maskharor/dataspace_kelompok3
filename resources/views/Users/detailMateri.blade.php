@php
$sections = [
    'entitas' => 'Pengenalan Entitas',
    'atribut' => 'Atribut dan Jenisnya',
    'relasi' => 'Relasi Antar Entitas',
    'kardinalitas' => 'Kardinalitas Relasi',
    'diagram' => 'Diagram ERD Lengkap',
    'notasi' => "Notasi Chen vs Crow's Foot",
    'studi-kasus' => 'Studi Kasus ERD'
];
@endphp

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Entity Relationship Diagram</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#070B17] text-white">

@include('components.navbar')

<div class="flex min-h-screen">

    {{-- Sidebar --}}
   <div class="w-72 bg-[#141A2B] border-r border-slate-800 p-4">
        <h2 class="font-semibold text-lg mb-6">
            Entity Relationship Diagram
        </h2>

        <div class="space-y-2">

            @foreach($sections as $key => $title)
                <a href="{{ route('materi.show', ['id' => $module->id, 'section' => $key]) }}"
                    class="block px-4 py-3 rounded-xl transition
                    {{ $section == $key
                            ? 'bg-blue-500 text-white'
                            : 'text-slate-400 hover:bg-slate-800' }}">

                        {{ $title }}
                </a>
            @endforeach

        </div>
        
        {{-- Quiz CTA --}}
        <div class="mt-8 pt-6 border-t border-slate-700">

            <div class="bg-gradient-to-br from-blue-500/10 to-purple-500/10
                        border border-blue-500/30
                        rounded-2xl p-5">

                <div class="text-3xl mb-3">
                    🎯
                </div>

                <h3 class="font-semibold text-white mb-2">
                    Kerjakan Kuis
                </h3>

                <a href="{{ route('quiz', $module->id) }}"
                    class="block text-center w-full bg-blue-500 hover:bg-blue-600 transition py-3 rounded-xl font-medium">
                    Mulai Kuis
                </a>

            </div>

        </div>
    </div>

    {{-- Content --}}
    <div class="flex-1 p-10">

    @if($section == 'entitas')

   <h1 class="text-4xl font-bold mb-4">
    Pengenalan Entitas
    </h1>

    <div class="mb-8">
        <span class="bg-slate-800 px-4 py-2 rounded-full text-sm">
            ⏱ 5 Menit
        </span>
    </div>

    <p class="text-slate-300 leading-relaxed mb-6">
        Entitas merupakan objek utama yang akan disimpan datanya di dalam basis data.
        Entitas dapat berupa orang, tempat, benda, maupun konsep yang memiliki informasi
        dan dapat dibedakan dengan objek lainnya.
    </p>

    <div class="bg-[#141A2B] border border-blue-500 rounded-2xl p-6 mb-8">
        <h3 class="text-blue-400 font-semibold mb-2">
            DEFINISI
        </h3>

        <p class="text-slate-300">
            Entitas adalah objek yang memiliki data dan direpresentasikan dalam bentuk tabel pada database.
        </p>
    </div>

    <div class="bg-[#141A2B] border border-slate-800 rounded-2xl p-6 mb-8">
        <h3 class="text-purple-400 font-semibold mb-4">
            CONTOH ENTITAS
        </h3>

        <ul class="space-y-3 text-slate-300">
            <li>📘 Mahasiswa</li>
            <li>👨‍🏫 Dosen</li>
            <li>🏫 Mata Kuliah</li>
            <li>🏢 Fakultas</li>
        </ul>
    </div>

    <div class="bg-green-900/20 border border-green-500 rounded-2xl p-6">
        <h3 class="text-green-400 font-semibold mb-4">
            POIN PENTING
        </h3>

        <ul class="space-y-2 text-slate-300">
            <li>✓ Entitas menjadi dasar pembuatan ERD</li>
            <li>✓ Setiap entitas memiliki atribut</li>
            <li>✓ Entitas biasanya berubah menjadi tabel database</li>
        </ul>
    </div>

    @elseif($section == 'atribut')

    <h1 class="text-4xl font-bold mb-4">
        Atribut dan Jenisnya
    </h1>

    <div class="mb-8">
        <span class="bg-slate-800 px-4 py-2 rounded-full text-sm">
            ⏱ 6 Menit
        </span>
    </div>

    <p class="text-slate-300 leading-relaxed mb-6">
        Atribut merupakan karakteristik yang dimiliki oleh suatu entitas.
        Atribut digunakan untuk menjelaskan informasi yang berkaitan dengan entitas tersebut.
    </p>

    <div class="bg-[#141A2B] border border-blue-500 rounded-2xl p-6 mb-8">
        <h3 class="text-blue-400 font-semibold mb-2">
            DEFINISI
        </h3>

        <p class="text-slate-300">
            Atribut adalah informasi atau karakteristik yang menjelaskan suatu entitas.
        </p>
    </div>

    <div class="bg-[#141A2B] border border-slate-800 rounded-2xl p-6 mb-8">

        <h3 class="text-yellow-400 font-semibold mb-4">
            CONTOH ATRIBUT
        </h3>

        <table class="w-full">
            <thead>
                <tr class="border-b border-slate-700">
                    <th class="text-left py-2">Entitas</th>
                    <th class="text-left py-2">Atribut</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="py-3">Mahasiswa</td>
                    <td>NIM, Nama, Alamat</td>
                </tr>

                <tr>
                    <td class="py-3">Dosen</td>
                    <td>NIP, Nama</td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="bg-green-900/20 border border-green-500 rounded-2xl p-6">
        <h3 class="text-green-400 font-semibold mb-4">
            POIN PENTING
        </h3>

        <ul class="space-y-2 text-slate-300">
            <li>✓ Setiap entitas memiliki atribut</li>
            <li>✓ Primary Key digunakan sebagai identitas unik</li>
            <li>✓ Atribut akan menjadi kolom dalam tabel</li>
        </ul>
    </div>

    @elseif($section == 'relasi')
    <div class="max-w-5xl">
    <h1 class="text-4xl font-bold mb-4">
                {{ $module->judul }}
            </h1>

            <div class="mb-8">
                <span class="bg-slate-800 px-4 py-2 rounded-full text-sm">
                    ⏱ 8 Menit
                </span>
            </div>

            <p class="text-slate-300 leading-relaxed mb-6">
                Dalam sebuah basis data, entitas tidak berdiri sendiri.
                Mereka saling berhubungan satu sama lain melalui relasi.
            </p>

            <div
                class="bg-[#141A2B] border border-blue-500 rounded-2xl p-6 mb-8">

                <h3 class="text-blue-400 font-semibold mb-2">
                    DEFINISI
                </h3>

                <p class="text-slate-300">
                    Relasi merupakan hubungan antara dua atau lebih entitas.
                </p>

            </div>

            {{-- Diagram --}}
            <div
                class="bg-[#141A2B] border border-slate-800 rounded-2xl p-6 mb-8">

                <h3 class="text-purple-400 font-semibold mb-4">
                    DIAGRAM ERD
                </h3>

                <div class="h-96 flex items-center justify-center">

                    <img src="{{ asset('images/ERDDiagram.png') }}"
                        alt="ERD"
                        class="max-h-full">

                </div>

            </div>

            {{-- Contoh --}}
            <div
                class="bg-[#141A2B] border border-slate-800 rounded-2xl p-6 mb-8">

                <h3 class="text-yellow-400 font-semibold mb-4">
                    CONTOH
                </h3>

                <p class="text-slate-300">
                    Mahasiswa mengambil banyak mata kuliah,
                    dan mata kuliah diambil banyak mahasiswa.
                </p>

            </div>

            {{-- Poin Penting --}}
            <div
                class="bg-green-900/20 border border-green-500 rounded-2xl p-6 mb-8">

                <h3 class="text-green-400 font-semibold mb-4">
                    POIN PENTING
                </h3>

                <ul class="space-y-2 text-slate-300">

                    <li>✓ Relasi menghubungkan entitas</li>

                    <li>✓ Kardinalitas menentukan jumlah hubungan</li>

                    <li>✓ Digambarkan dengan simbol diamond</li>

                </ul>

            </div>
    </div>

    @elseif($section == 'kardinalitas')
    <h1 class="text-4xl font-bold mb-4">
        Kardinalitas Relasi
    </h1>

    <div class="mb-8">
        <span class="bg-slate-800 px-4 py-2 rounded-full text-sm">
            ⏱ 7 Menit
        </span>
    </div>

    <p class="text-slate-300 leading-relaxed mb-6">
        Kardinalitas menunjukkan jumlah hubungan yang dapat terjadi antara satu entitas
        dengan entitas lainnya.
    </p>

    <div class="bg-[#141A2B] border border-blue-500 rounded-2xl p-6 mb-8">
        <h3 class="text-blue-400 font-semibold mb-2">
            DEFINISI
        </h3>

        <p class="text-slate-300">
            Kardinalitas menjelaskan banyaknya keterkaitan antar entitas dalam sebuah relasi.
        </p>
    </div>

    <div class="grid md:grid-cols-3 gap-5 mb-8">

        <div class="bg-[#141A2B] p-6 rounded-2xl">
            <h3 class="font-semibold mb-3">1 : 1</h3>
            <p>Satu mahasiswa memiliki satu kartu mahasiswa.</p>
        </div>

        <div class="bg-[#141A2B] p-6 rounded-2xl">
            <h3 class="font-semibold mb-3">1 : N</h3>
            <p>Satu dosen mengajar banyak mata kuliah.</p>
        </div>

        <div class="bg-[#141A2B] p-6 rounded-2xl">
            <h3 class="font-semibold mb-3">M : N</h3>
            <p>Banyak mahasiswa mengambil banyak mata kuliah.</p>
        </div>

    </div>

    <div class="bg-green-900/20 border border-green-500 rounded-2xl p-6">
        <ul class="space-y-2 text-slate-300">
            <li>✓ Menentukan jenis hubungan</li>
            <li>✓ Sangat penting dalam desain database</li>
            <li>✓ Mempengaruhi struktur tabel relasi</li>
        </ul>
    </div>

    @elseif($section == 'diagram')
    <h1 class="text-4xl font-bold mb-4">
        Diagram ERD Lengkap
    </h1>

    <div class="mb-8">
        <span class="bg-slate-800 px-4 py-2 rounded-full text-sm">
            ⏱ 10 Menit
        </span>
    </div>

    <p class="text-slate-300 leading-relaxed mb-6">
        Diagram ERD digunakan untuk memvisualisasikan struktur database sebelum proses implementasi.
    </p>

    <div class="bg-[#141A2B] border border-slate-800 rounded-2xl p-8 mb-8">

        <div class="h-150 flex  justify-center">

            <img src="{{ asset('images/erd-Photoroom.png') }}"
                alt="ERD"
                class="max-h-full">

        </div>

    </div>

    <div class="bg-green-900/20 border border-green-500 rounded-2xl p-6">
        <ul class="space-y-2 text-slate-300">
            <li>✓ ERD dibuat sebelum database dibangun</li>
            <li>✓ Membantu memahami kebutuhan data</li>
            <li>✓ Mengurangi kesalahan desain database</li>
        </ul>
    </div>

    @elseif($section == 'notasi')
    <h1 class="text-4xl font-bold mb-4">
        Notasi Chen vs Crow's Foot
    </h1>

    <div class="mb-8">
        <span class="bg-slate-800 px-4 py-2 rounded-full text-sm">
            ⏱ 6 Menit
        </span>
    </div>

    <p class="text-slate-300 leading-relaxed mb-6">
        ERD dapat digambarkan menggunakan berbagai notasi.
        Dua notasi yang paling populer adalah Chen dan Crow's Foot.
    </p>

    <div class="grid md:grid-cols-2 gap-6 mb-8">

        <div class="bg-[#141A2B] p-6 rounded-2xl">
            <h3 class="text-blue-400 font-semibold mb-3">
                Notasi Chen
            </h3>

            <p>
                Menggunakan simbol diamond untuk menggambarkan relasi antar entitas.
            </p>
        </div>

        <div class="bg-[#141A2B] p-6 rounded-2xl">
            <h3 class="text-purple-400 font-semibold mb-3">
                Crow's Foot
            </h3>

            <p>
                Menggunakan simbol kaki gagak untuk menunjukkan kardinalitas relasi.
            </p>
        </div>

    </div>

    <div class="bg-green-900/20 border border-green-500 rounded-2xl p-6">
        <ul class="space-y-2 text-slate-300">
            <li>✓ Chen lebih mudah dipahami pemula</li>
            <li>✓ Crow's Foot lebih sering digunakan industri</li>
            <li>✓ Keduanya memiliki tujuan yang sama</li>
        </ul>
    </div>

    @elseif($section == 'studi-kasus')
    <h1 class="text-4xl font-bold mb-4">
        Studi Kasus ERD Sistem Akademik
    </h1>

    <div class="mb-8">
        <span class="bg-slate-800 px-4 py-2 rounded-full text-sm">
            ⏱ 12 Menit
        </span>
    </div>

    <p class="text-slate-300 leading-relaxed mb-6">
        Pada sistem akademik terdapat beberapa entitas utama seperti Mahasiswa,
        Dosen, Mata Kuliah, dan KRS yang saling berhubungan.
    </p>

    <div class="bg-[#141A2B] border border-yellow-500 rounded-2xl p-6 mb-8">
        <h3 class="text-yellow-400 font-semibold mb-3">
            STUDI KASUS
        </h3>

        <p>
            Seorang mahasiswa dapat mengambil banyak mata kuliah dalam satu semester.
            Sebuah mata kuliah juga dapat diambil oleh banyak mahasiswa.
        </p>
    </div>

    <div class="bg-[#141A2B] border border-slate-800 rounded-2xl p-6 mb-8">
        <div class="h-150 flex  justify-center">

            <img src="{{ asset('images/erd (1).png') }}"
                alt="ERD"
                class="max-h-full">

        </div>
    </div>

    <div class="bg-green-900/20 border border-green-500 rounded-2xl p-6">
        <ul class="space-y-2 text-slate-300">
            <li>✓ Identifikasi entitas terlebih dahulu</li>
            <li>✓ Tentukan atribut utama</li>
            <li>✓ Tentukan relasi dan kardinalitas</li>
        </ul>
    </div>

    @else

        <h1>Materi Tidak Ditemukan</h1>

    @endif
    </div>

</div>

@include('components.footer')

</body>

</html>