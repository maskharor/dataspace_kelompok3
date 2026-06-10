<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $hasStatusColumn = Schema::hasColumn('moduls', 'status');

        /*
        |--------------------------------------------------------------------------
        | Statistik Modul
        |--------------------------------------------------------------------------
        */

        $modulStats = DB::table('moduls')
            ->selectRaw('COUNT(*) as total_modul')
            ->when(
                $hasStatusColumn,
                fn ($query) => $query->selectRaw("
                    SUM(CASE WHEN status = 'draft' THEN 1 ELSE 0 END) as draft_modul,
                    SUM(CASE WHEN status = 'published' THEN 1 ELSE 0 END) as published_modul
                ")
            )
            ->first();

        /*
        |--------------------------------------------------------------------------
        | Peserta per Modul
        |--------------------------------------------------------------------------
        */

        $pesertaByModul = DB::table('riwayat_kuis')
            ->select('modul_id', DB::raw('COUNT(DISTINCT user_id) as total'))
            ->groupBy('modul_id')
            ->pluck('total', 'modul_id');

        /*
        |--------------------------------------------------------------------------
        | Daftar Modul
        |--------------------------------------------------------------------------
        */

        $modulColumns = [
            'id',
            'judul',
            'deskripsi',
            'kategori',
            'updated_at'
        ];

        if ($hasStatusColumn) {
            $modulColumns[] = 'status';
        }

        $moduls = DB::table('moduls')
            ->select($modulColumns)
            ->orderBy('id')
            ->get()
            ->map(function ($modul) use ($hasStatusColumn, $pesertaByModul) {

                $modul->status = $hasStatusColumn
                    ? $modul->status
                    : 'published';

                $modul->peserta_count = (int) ($pesertaByModul[$modul->id] ?? 0);

                return $modul;
            });

        /*
        |--------------------------------------------------------------------------
        | Statistik User
        |--------------------------------------------------------------------------
        */

        $totalPengguna = DB::table('users')->count();

        $penggunaMingguIni = DB::table('users')
            ->where('created_at', '>=', now()->subWeek())
            ->count();

        /*
        |--------------------------------------------------------------------------
        | Statistik Quiz
        |--------------------------------------------------------------------------
        */

        $totalKuis = DB::table('soals')->count();

        $avgSkor = (int) round(
            DB::table('riwayat_kuis')
                ->avg('skor_akhir') ?? 0
        );

        return view('Admin.dashboard', [
            'moduls' => $moduls,
            'stats' => [
                'total_modul' => $modulStats->total_modul,

                'draft_modul' => $hasStatusColumn
                    ? (int) $modulStats->draft_modul
                    : 0,

                'modul_aktif' => $hasStatusColumn
                    ? (int) $modulStats->published_modul
                    : (int) $modulStats->total_modul,

                'pengguna' => $totalPengguna,

                'pengguna_minggu_ini' => $penggunaMingguIni,

                'kuis' => $totalKuis,

                'avg_skor' => $avgSkor,
            ],
        ]);
    }
}
