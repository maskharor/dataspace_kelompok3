<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - DataSpace</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-[#020617] overflow-hidden">

    <div class="h-screen flex">

        <div class="hidden lg:flex w-1/2 relative overflow-hidden">

            <img
                src="{{ asset('images/register-bg.jpg') }}"
                alt="bg image"
                class="absolute inset-0 w-full h-full object-cover">

            <div class="absolute inset-0 bg-black/60"></div>

            <div class="absolute inset-0 bg-gradient-to-br from-blue-950/20 via-transparent to-black/50"></div>

            <div class="relative z-10 flex flex-col justify-end p-8 text-white">

                <h1 class="text-3xl xl:text-4xl font-bold leading-tight mb-3">
                    Mulai Perjalananmu di DataSpace
                </h1>

                <p class="text-sm xl:text-base text-gray-300 leading-relaxed max-w-lg">
                    Mari belajar bersama dan pastikan setiap konsep yang kamu pelajari benar-benar dipahami, bukan sekadar dihafalkan
                </p>

            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center bg-[#030817] px-6">

            <div class="w-full max-w-md">

                <div class="mb-7">

                    <h1 class="text-white text-3xl xl:text-4xl font-bold mb-2 leading-tight">
                        Selamat Datang di DataSpace
                    </h1>

                    <p class="text-gray-400 text-sm leading-relaxed">
                        Daftarkan akunmu untuk melanjutkan proses belajar Basis Data dengan modul dan quiz interaktif
                    </p>

                </div>

                @if($errors->any())
                <div class="mb-4 bg-red-500/20 border border-red-500 text-red-300 px-4 py-3 rounded-xl text-sm">
                    <ul class="space-y-1">
                        @foreach($errors->all() as $error)
                        <li>• {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST"
                    action="{{ route('register.proses') }}"
                    class="space-y-4">

                    @csrf

                    <div>
                        <label class="block text-white text-sm mb-2">
                            Username
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Masukkan username"
                            required
                            class="w-full h-[52px] bg-transparent border border-gray-700 rounded-xl px-5 text-sm text-white placeholder:text-gray-500 focus:outline-none focus:border-blue-500 transition">
                    </div>

                    <div>
                        <label class="block text-white text-sm mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Masukkan email"
                            required
                            class="w-full h-[52px] bg-transparent border border-gray-700 rounded-xl px-5 text-sm text-white placeholder:text-gray-500 focus:outline-none focus:border-blue-500 transition">
                    </div>

                    <div> <label class="block text-white text-sm mb-2"> Kata Sandi </label>
                        <div class="relative"> <input id="password" type="password" name="password" placeholder="Masukkan kata sandi" required minlength="8" class="w-full h-[52px] bg-transparent border border-gray-700 rounded-xl px-5 pr-12 text-sm text-white placeholder:text-gray-500 focus:outline-none focus:border-blue-500 transition"> <button type="button" onclick="togglePassword(this)" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition">
                                <svg class="eye-open hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5 c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639 C20.577 16.49 16.64 19.5 12 19.5 c-4.638 0-8.573-3.007-9.964-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>  
                                <svg class="eye-closed w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.477 10.488A3 3 0 0012 15a3 3 0 002.522-4.512M6.228 6.228 A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c1.338 0 2.62-.25 3.8-.704M6.228 6.228L3 3m3.228 3.228l3.65 3.65m0 0a3 3 0 014.243 4.243m0 0l3.65 3.65M9.88 9.88l4.24 4.24" />
                                </svg> </button> </div>
                    </div> 
                    <div> <label class="block text-white text-sm mb-2"> Konfirmasi Kata Sandi </label>
                        <div class="relative"> <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Ulangi kata sandi" required minlength="8" class="w-full h-[52px] bg-transparent border border-gray-700 rounded-xl px-5 pr-12 text-sm text-white placeholder:text-gray-500 focus:outline-none focus:border-blue-500 transition"> <button type="button" onclick="togglePassword(this)" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-white transition"> 
                                <svg class="eye-open hidden w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5 c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639 C20.577 16.49 16.64 19.5 12 19.5 c-4.638 0-8.573-3.007-9.964-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <svg class="eye-closed w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.477 10.488A3 3 0 0012 15a3 3 0 002.522-4.512M6.228 6.228 A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c1.338 0 2.62-.25 3.8-.704M6.228 6.228L3 3m3.228 3.228l3.65 3.65m0 0a3 3 0 014.243 4.243m0 0l3.65 3.65M9.88 9.88l4.24 4.24" />
                                </svg> </button> </div>
                    </div>

                    <button
                        type="submit"
                        class="w-full h-[52px] bg-[#5B9CFF] hover:bg-[#4d8ff5] text-black font-semibold rounded-xl transition">
                        Daftar
                    </button>

                    <div class="flex items-center justify-between text-sm">
                        <a href="#"
                            class="text-gray-300 hover:text-white underline">
                            Lupa Password?
                        </a>
                        <div class="text-gray-300">
                            Sudah Punya Akun?
                            <a href="{{ route('login') }}"
                                class="text-blue-400 font-medium hover:text-blue-300">
                                Masuk
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(button)
        {
            const container = button.closest('.relative');
            const input = container.querySelector('input');
            const eyeOpen = container.querySelector('.eye-open');
            const eyeClosed = container.querySelector('.eye-closed');
            if(input.type === 'password')
            {
                input.type = 'text';
                eyeOpen.classList.remove('hidden');
                eyeClosed.classList.add('hidden');
            }
            else
            {
                input.type = 'password';
                eyeOpen.classList.add('hidden');
                eyeClosed.classList.remove('hidden');
            }
        }
    </script>
</body>
</html>