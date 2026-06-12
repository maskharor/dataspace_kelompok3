<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Models\RiwayatKuis;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Semua modul
        $moduls = Modul::all();

        // Riwayat kuis user
        $riwayat = RiwayatKuis::with('modul')
            ->where('user_id', $userId)
            ->latest()
            ->get();

        // Modul yang sudah pernah dikerjakan
        $modulSelesaiIds = RiwayatKuis::where('user_id', $userId)
            ->pluck('modul_id')
            ->unique()
            ->toArray();

        // Statistik
        $modulSelesai = count($modulSelesaiIds);

        $totalModul = $moduls->count();

        $totalQuiz = $riwayat->count();

        $rataSkor = round(
            RiwayatKuis::where('user_id', $userId)
                ->avg('skor_akhir') ?? 0
        );
        $lulus = RiwayatKuis::where('user_id', $userId)
                ->where('skor_akhir', '>=', 70)
                ->count();

        $terakhir = $riwayat->first();

        return view('Users.dashboard', compact(
            'moduls',
            'riwayat',
            'modulSelesaiIds',
            'modulSelesai',
            'totalModul',
            'totalQuiz',
            'rataSkor',
            'lulus',
            'terakhir'
        ));
    }
}