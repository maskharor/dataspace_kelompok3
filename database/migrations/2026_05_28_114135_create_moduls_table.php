<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('moduls', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi')->nullable();
            $table->longText('konten_teks')->nullable();
            $table->string('konten_file')->nullable(); 
            $table->enum('kategori', ['pemula', 'menengah', 'lanjut'])->default('pemula');
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('moduls', function (Blueprint $table) {
            $table->dropForeign(['created_by']);
            $table->dropForeign(['reviewed_by']);

            $table->dropColumn([
                'video_path',
                'status',
                'created_by',
                'reviewed_by',
                'catatan_revisi',
                'reviewed_at'
            ]);
        });
    }
};
