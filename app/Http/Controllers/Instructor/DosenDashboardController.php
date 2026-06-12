<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Modul;
use Illuminate\Http\Request;

class DosenDashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $query = Modul::query();

        if ($search) {
            $query->where(
                'judul',
                'like',
                '%' . $search . '%'
            );
        }

        return view(
            'Instructor.dashboard',
            [
                'totalModul' =>
                Modul::count(),

                'draftModul' =>
                Modul::where('status', 'draft')->count(),

                'publishedModul' =>
                Modul::where('status', 'published')->count(),

                'rejectedModul' =>
                Modul::where('status', 'rejected')->count(),

                'moduls' =>
                $query->latest()->get(),
            ]
        );
    }
}
