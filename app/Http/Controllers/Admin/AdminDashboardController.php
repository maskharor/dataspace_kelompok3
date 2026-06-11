<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Modul;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Statistik Modul
        |--------------------------------------------------------------------------
        */

        $totalModul = Modul::count();

        $draftModul = Modul::where('status', 'draft')
            ->count();

        $publishedModul = Modul::where('status', 'published')
            ->count();

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

        $moduls = Modul::select(
                'id',
                'judul',
                'deskripsi',
                'kategori',
                'status',
                'updated_at'
            )
            ->orderBy('id')
            ->get()
            ->map(function ($modul) use ($pesertaByModul) {

                $modul->peserta_count =
                    (int) ($pesertaByModul[$modul->id] ?? 0);

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
                'total_modul' => $totalModul,

                'draft_modul' => $draftModul,

                'modul_aktif' => $publishedModul,

                'pengguna' => $totalPengguna,

                'pengguna_minggu_ini' => $penggunaMingguIni,

                'kuis' => $totalKuis,

                'avg_skor' => $avgSkor,
            ],
        ]);
    }
}
