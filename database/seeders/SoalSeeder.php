<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soal;

class SoalSeeder extends Seeder
{
    public function run(): void
    {

        Soal::create([

            'modul_id' => 2,

            'pertanyaan' =>
            'Manakah simbol yang digunakan untuk merepresentasikan relasi dalam ERD?',


            'opsi_jawaban' => json_encode([

                'A. Persegi panjang (Rectangle)',

                'B. Oval / Ellipse',

                'C. Belah ketupat (Diamond)',

                'D. Garis lurus'

            ]),


            'kunci_jawaban' => 'C'

        ]);



        Soal::create([

            'modul_id' => 2,

            'pertanyaan' =>
            'Simbol yang digunakan untuk menggambarkan entitas pada ERD adalah?',


            'opsi_jawaban' => json_encode([

                'A. Rectangle',

                'B. Diamond',

                'C. Oval',

                'D. Line'

            ]),


            'kunci_jawaban' => 'A'

        ]);



        Soal::create([

            'modul_id' => 2,

            'pertanyaan' =>
            'Hubungan Mahasiswa mengambil Mata Kuliah memiliki kardinalitas?',


            'opsi_jawaban' => json_encode([

                'A. 1:1',

                'B. 1:N',

                'C. M:N',

                'D. 0:1'

            ]),


            'kunci_jawaban' => 'C'

        ]);
    }
}
