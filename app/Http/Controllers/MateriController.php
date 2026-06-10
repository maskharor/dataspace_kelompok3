<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modul;

class MateriController extends Controller
{
      public function index(Request $request)
    {
        $query = Modul::where('status', 'published');

        if (
            $request->filled('kategori') &&
            $request->kategori != 'semua'
        ) {
            $query->where('kategori', $request->kategori);
        }

        if ($request->filled('search')) {
            $query->where(
                'judul',
                'like',
                '%' . $request->search . '%'
            );
        }

        $modules = $query
            ->orderBy('created_at', 'desc')
            ->get();

        return view(
            'users.materi',
            compact('modules')
        );
    }
    
    // public function show($id)
    // {
    //     $module = Modul::where('status', 'published')
    //         ->findOrFail($id);

    //     return view(
    //         'users.detailMateri',
    //         compact('module')
    //     );
    // }

    public function show($id, Request $request)
    {
        $module = Modul::findOrFail($id);

        $section = $request->get('section', 'entitas');

        return view(
            'users.detailMateri',
            compact(
                'module',
                'section'
            )
        );
    }
}
