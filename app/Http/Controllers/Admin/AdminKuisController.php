<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Modul;
use App\Models\RiwayatKuis;
use Illuminate\Http\Request;
use App\Models\Soal;
use Illuminate\Support\Facades\Validator;

class AdminKuisController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $query = Modul::with([
            'soals',
            'riwayatKuis'
        ]);

        if ($search) {
            $query->where(
                'judul',
                'like',
                '%' . $search . '%'
            );
        }

        $moduls = $query->latest()->get();

        $totalKuis =
            Modul::has('soals')->count();

        $kuisAktif =
            Modul::where('status', 'published')
            ->has('soals')
            ->count();

        $totalPercobaan =
            RiwayatKuis::count();

        $rataRataSkor =
            round(
                RiwayatKuis::avg('skor_akhir') ?? 0
            );

        return view(
            'Admin.kuis',
            compact(
                'moduls',
                'totalKuis',
                'kuisAktif',
                'totalPercobaan',
                'rataRataSkor'
            )
        );
    }
    public function store(Request $request)
    {
        $request->validate([
            'modul_id' => 'required|exists:moduls,id',
            'pertanyaan' => 'required',

            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',

            'kunci_jawaban' => 'required|in:A,B,C,D',
        ]);

        Soal::create([
            'modul_id' => $request->modul_id,

            'pertanyaan' => $request->pertanyaan,

            'opsi_jawaban' => [
                'A' => $request->opsi_a,
                'B' => $request->opsi_b,
                'C' => $request->opsi_c,
                'D' => $request->opsi_d,
            ],

            'kunci_jawaban' => $request->kunci_jawaban,
        ]);

        return back()->with(
            'success',
            'Soal berhasil ditambahkan.'
        );
    }
    public function show(Modul $modul)
    {
        $modul->load('soals');

        return response()->json($modul);
    }
    public function update(
        Request $request,
        Soal $soal
    ) {
        $request->validate([
            'pertanyaan' => 'required',

            'opsi_a' => 'required',
            'opsi_b' => 'required',
            'opsi_c' => 'required',
            'opsi_d' => 'required',

            'kunci_jawaban' => 'required|in:A,B,C,D',
        ]);

        $soal->update([
            'pertanyaan' => $request->pertanyaan,

            'opsi_jawaban' => [
                'A' => $request->opsi_a,
                'B' => $request->opsi_b,
                'C' => $request->opsi_c,
                'D' => $request->opsi_d,
            ],

            'kunci_jawaban' => $request->kunci_jawaban,
        ]);

        return back()->with(
            'success',
            'Soal berhasil diperbarui.'
        );
    }
    public function destroy(Soal $soal)
    {
        $soal->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
