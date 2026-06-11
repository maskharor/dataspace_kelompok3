<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kuis Entity Relationship Diagram</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>


<body class="bg-[#070B17] text-white min-h-screen">


    @include('components.navbar')


    <main class="max-w-5xl mx-auto px-6 py-10">


        {{-- Header --}}
        <div class="flex justify-between items-center mb-5">


            <div>

                <h1 class="text-3xl font-bold">
                    Kuis: {{ $soal->modul->judul }}
                </h1>


                <p class="text-slate-400 text-sm">
                    Soal {{ $nomor }} dari {{ $total }}
                </p>

            </div>


            <div class="bg-[#141A2B] border border-slate-700 px-5 py-3 rounded-xl">

                ⏱ 09:53

            </div>


        </div>



        {{-- Progress --}}
        @php
        $progress = ($nomor / $total) * 100;
        @endphp

        <div
            class="bg-gradient-to-r from-blue-500 to-purple-500 h-2 rounded-full"
            @style([ 'width: ' .$progress.'%'
            ])>
        </div>



        {{-- Soal --}}
        @if(!$sudahMenjawab)
            <form action="{{ route('quiz.answer') }}" method="POST">
        @elseif($nomor == $total)
            <form action="{{ route('quiz.finish') }}" method="POST">
        @else
            <form action="{{ route('quiz.next') }}" method="POST">
        @endif
                @csrf
                <input type="hidden"
                        name="modul_id"
                        value="{{ $soal->modul_id }}">
                {{-- Pertanyaan --}}
                <div class="bg-[#141A2B] border border-slate-700 rounded-2xl p-6 mb-6">

                    <span class="bg-blue-500/20 text-blue-400 px-4 py-2 rounded-full text-sm">
                        Soal {{ $nomor }}
                    </span>


                    <h2 class="text-xl text-white mt-6">
                        {{ $soal->pertanyaan }}
                    </h2>

                </div>



                {{-- Pilihan --}}
                <div class="space-y-4">


                    @foreach(json_decode($soal->opsi_jawaban) as $index => $opsi)

                    @php
                    $huruf = chr(65+$index);

                    $isSelected = $jawabanUser == $huruf;
                    $isCorrect = $soal->kunci_jawaban == $huruf;
                    @endphp

                    <label class="block {{ !$sudahMenjawab ? 'cursor-pointer' : '' }}">


                        <input type="radio" name="jawaban" value="{{ $huruf }}" class="hidden peer" {{ $sudahMenjawab ? 'disabled' : '' }} {{ $isSelected ? 'checked' : '' }}>
                        <div class="
                            border rounded-xl p-5

                            @if($sudahMenjawab)

                                @if($isCorrect)
                                    bg-green-500/10 border-green-500 text-green-400

                                @elseif($isSelected)
                                    bg-red-500/10 border-red-500 text-red-400

                                @else
                                    bg-[#141A2B] border-slate-700 text-gray-300

                                @endif

                            @else

                                bg-[#141A2B]
                                border-slate-700
                                text-gray-300
                                peer-checked:border-blue-500
                                peer-checked:bg-blue-500/10

                            @endif ">
                            
                            <div class="flex justify-between items-center">

                        <div class="flex gap-4 items-center">

                            <span
                                class="w-8 h-8 rounded-full flex items-center justify-center
                                @if($sudahMenjawab)

                                    @if($isCorrect)
                                        bg-green-500/20 text-green-400

                                    @elseif($isSelected)
                                        bg-red-500/20 text-red-400

                                    @else
                                        bg-slate-700 text-slate-300

                                    @endif

                                @else

                                    bg-slate-700 text-slate-300

                                @endif
                            ">
                            {{ $huruf }}
                                </span>

                        <span>
                            {{ $opsi }}
                        </span>

                        </div>

                        @if($sudahMenjawab)

                            @if($isCorrect)

                                <span class="text-green-400 text-xl">
                                    ✓
                                </span>

                            @elseif($isSelected)

                                <span class="text-red-400 text-xl">
                                    ✕
                                </span>

                            @endif

                        @endif

                    </div>
                </div>


                </label>


                    @endforeach


                </div>

                {{-- Feedback --}}
                @if($sudahMenjawab)

                    @if($jawabanBenar)

                        <div class="mt-6 bg-green-500/10 border border-green-500 rounded-xl p-5">

                            <h3 class="text-green-400 font-semibold mb-3">
                                ✓ Benar!
                            </h3>

                            <p class="text-slate-300 text-sm">
                                Jawaban yang benar adalah
                                <strong>{{ $soal->kunci_jawaban }}</strong>.
                            </p>

                        </div>

                    @else

                        <div class="mt-6 bg-red-500/10 border border-red-500 rounded-xl p-5">

                            <h3 class="text-red-400 font-semibold mb-3">
                                ✕ Kurang tepat. Jawaban yang benar adalah {{ $soal->kunci_jawaban }}.
                            </h3>

                            <p class="text-slate-300 text-sm">
                                Silakan pelajari kembali materi terkait agar lebih memahami konsep ini.
                            </p>

                        </div>

                    @endif

                @endif


                {{-- tombol --}}

                <button
                    type="submit"
                    class="mt-8 w-full bg-blue-500 hover:bg-blue-600 text-white py-4 rounded-xl">

                    @if(!$sudahMenjawab)

                        Konfirmasi Jawaban

                    @else

                        @if($nomor == $total)
                            Submit Jawaban
                        @else
                            Lanjut ke Soal Berikutnya →
                        @endif

                    @endif

                </button>


            </form>



    </main>




    @include('components.footer')


</body>

</html>