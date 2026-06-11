<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\RiwayatKuis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuizController extends Controller
{
    public function index($modulId)
    {

        if (session('modul_id') != $modulId) {

            session()->forget([
                'score',
                'nomor_soal',
                'soal_id',
                'jawaban_user',
                'jawaban_benar',
                'sudah_menjawab'
            ]);

            session([
                'modul_id' => $modulId,
                'nomor_soal' => 1,
                'score' => 0,
            ]);
        }

        $soals = Soal::with('modul')
            ->where('modul_id', $modulId)
            ->get();

        if ($soals->isEmpty()) {
            return redirect()->back()
                ->with('error', 'Belum ada soal untuk modul ini.');
        }

        $nomor = session('nomor_soal', 1);

        $soal = $soals[$nomor - 1];

        session([
            'soal_id' => $soal->id
        ]);

        return view('Users.quiz', [
            'soal' => $soal,
            'nomor' => $nomor,
            'total' => $soals->count(),

            'sudahMenjawab' => session('sudah_menjawab', false),
            'jawabanUser' => session('jawaban_user'),
            'jawabanBenar' => session('jawaban_benar'),
        ]);
    }



    public function next()
    {

        session()->increment('nomor_soal');


        session()->forget([
            'jawaban_user',
            'jawaban_benar',
            'sudah_menjawab'
        ]);


        return redirect()->route('quiz', [
            'modul' => session('modul_id')
        ]);
    }

    public function answer(Request $request)
    {
        $request->validate([
            'jawaban' => 'required'
        ]);

        $soal = Soal::find(session('soal_id'));

        if (!$soal) {
            return redirect()->route('quiz', session('modul_id'));
        }

        $benar = $request->jawaban == $soal->kunci_jawaban;

        if ($benar) {
            session()->increment('score');
        }

        session([
            'jawaban_user' => $request->jawaban,
            'jawaban_benar' => $benar,
            'sudah_menjawab' => true
        ]);

        return redirect()->route('quiz', session('modul_id'));
    }

    public function finish(Request $request)
    {
        $user = Auth::user();

        $modulId = $request->modul_id;

        $benar = session('score', 0);

        $total = Soal::where('modul_id', $modulId)->count();

        if ($total == 0) {
            return redirect()
                ->route('dashboard')
                ->with('error', 'Soal untuk modul tidak ditemukan.');
        }

        $nilai = ($benar / $total) * 100;

        RiwayatKuis::create([
            'user_id' => $user->id,
            'modul_id' => $modulId,
            'skor_akhir' => $nilai,
            'status_progres' => 'Completed',
        ]);

        session()->forget([
            'score',
            'nomor_soal',
            'soal_id',
            'jawaban_user',
            'jawaban_benar',
            'sudah_menjawab',
            'modul_id'
        ]);

        return view('Users.quizResult', [
            'nilai' => $nilai,
            'modulId' => $modulId,
        ]);
    }
}
