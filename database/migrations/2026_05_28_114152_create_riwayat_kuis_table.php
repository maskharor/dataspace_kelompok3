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
        Schema::create('riwayat_kuis', function (Blueprint $table) {

            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('modul_id')
                ->constrained('moduls')
                ->cascadeOnDelete();

            $table->integer('skor_akhir')
                ->default(0);

            $table->enum(
                'status_progres',
                [
                    'In Progress',
                    'Completed'
                ]
            )->default('In Progress');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kuis');
    }
};
