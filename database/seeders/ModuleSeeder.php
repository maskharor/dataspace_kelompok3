<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeder dummy
        DB::table('moduls')->insert([
            [
                'judul' => 'Pengenalan Basis Data',
                'deskripsi' => 'Memahami konsep dasar basis data dan DBMS.',
                'konten_teks' => '<h2>Pengenalan Basis Data</h2><p>Basis data adalah kumpulan data yang terorganisir...</p>',
                'konten_file' => 'materi/pengenalan-basis-data.pdf',
                'kategori' => 'pemula',
                'video_path' => 'videos/pengenalan-basis-data.mp4',
                'status' => 'published',
                'created_by' => null,
                'reviewed_by' => null,
                'reviewed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Entity Relationship Diagram (ERD)',
                'deskripsi' => 'Belajar membuat ERD untuk perancangan database.',
                'konten_teks' => '<h2>ERD</h2><p>Entity Relationship Diagram digunakan untuk memodelkan hubungan antar entitas...</p>',
                'konten_file' => 'materi/erd.pdf',
                'kategori' => 'pemula',
                'video_path' => 'videos/erd.mp4',
                'status' => 'published',
                'created_by' => null,
                'reviewed_by' => null,
                'reviewed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Normalisasi Database',
                'deskripsi' => 'Memahami 1NF, 2NF, dan 3NF.',
                'konten_teks' => '<h2>Normalisasi</h2><p>Normalisasi bertujuan mengurangi redundansi data...</p>',
                'konten_file' => 'materi/normalisasi.pdf',
                'kategori' => 'menengah',
                'video_path' => 'videos/normalisasi.mp4',
                'status' => 'published',
                'created_by' => null,
                'reviewed_by' => null,
                'reviewed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'SQL Dasar',
                'deskripsi' => 'Belajar SELECT, INSERT, UPDATE dan DELETE.',
                'konten_teks' => '<h2>SQL Dasar</h2><p>SQL digunakan untuk mengelola data dalam database...</p>',
                'konten_file' => 'materi/sql-dasar.pdf',
                'kategori' => 'menengah',
                'video_path' => 'videos/sql-dasar.mp4',
                'status' => 'published',
                'created_by' => null,
                'reviewed_by' => null,
                'reviewed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'judul' => 'Optimasi Query SQL',
                'deskripsi' => 'Teknik optimasi query dan indexing.',
                'konten_teks' => '<h2>Optimasi Query</h2><p>Index digunakan untuk mempercepat pencarian data...</p>',
                'konten_file' => 'materi/optimasi-query.pdf',
                'kategori' => 'lanjut',
                'video_path' => 'videos/optimasi-query.mp4',
                'status' => 'published',
                'created_by' => null,
                'reviewed_by' => null,
                'reviewed_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
