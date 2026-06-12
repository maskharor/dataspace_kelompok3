<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenModulController extends Controller
{
    public function show(Modul $modul)
    {
        return response()->json($modul);
    }

    public function review(
        Request $request,
        Modul $modul
    ) {
        $request->validate([
            'status' =>
                'required|in:draft,published,rejected',

            'catatan_revisi' =>
                'nullable|string'
        ]);

        $modul->update([
            'status' =>
                $request->status,

            'catatan_revisi' =>
                $request->catatan_revisi,

            'reviewed_by' =>
                Auth::id(),

            // 'reviewed_at' =>
            //     now(),
        ]);

        return back()->with(
            'success',
            'Review modul berhasil disimpan.'
        );
    }
}
