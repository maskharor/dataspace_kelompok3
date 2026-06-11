<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Modul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminModulController extends Controller
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

        $moduls = $query
            ->latest()
            ->get();

        $published = Modul::where(
            'status',
            'published'
        )->count();

        $draft = Modul::where(
            'status',
            'draft'
        )->count();

        return view(
            'Admin.modul',
            compact(
                'moduls',
                'published',
                'draft'
            )
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'nullable',
            'konten_teks' => 'nullable',

            'konten_file' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx|max:20480',

            'video_path' => 'nullable|file|mimes:mp4,webm|max:51200',

            'kategori' => 'required|in:pemula,menengah,lanjut',
        ]);

        $filePath = null;
        $videoPath = null;

        if ($request->hasFile('konten_file')) {
            $filePath = $request
                ->file('konten_file')
                ->store('modul_files', 'public');
        }

        if ($request->hasFile('video_path')) {
            $videoPath = $request
                ->file('video_path')
                ->store('modul_videos', 'public');
        }

        Modul::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten_teks' => $request->konten_teks,

            'konten_file' => $filePath,
            'video_path' => $videoPath,

            'kategori' => $request->kategori,

            'status' => 'draft',

            'created_by' => Auth::id(),
        ]);

        return redirect()
            ->route('admin.modul')
            ->with('success', 'Modul berhasil ditambahkan.');
    }

    public function show(Modul $modul)
    {
        return response()->json($modul);
    }

    public function update(Request $request, Modul $modul)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'kategori' => 'required|in:pemula,menengah,lanjut',
            'deskripsi' => 'nullable',
            'konten_teks' => 'nullable',

            'konten_file' =>
            'nullable|file|mimes:pdf,doc,docx,ppt,pptx|max:20480',

            'video_path' =>
            'nullable|file|mimes:mp4,webm|max:51200',
        ]);

        $filePath = $modul->konten_file;
        $videoPath = $modul->video_path;

        if ($request->hasFile('konten_file')) {

            if ($filePath) {
                Storage::disk('public')->delete($filePath);
            }

            $filePath = $request
                ->file('konten_file')
                ->store('modul_files', 'public');
        }

        if ($request->hasFile('video_path')) {

            if ($videoPath) {
                Storage::disk('public')->delete($videoPath);
            }

            $videoPath = $request
                ->file('video_path')
                ->store('modul_videos', 'public');
        }

        $modul->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'konten_teks' => $request->konten_teks,
            'konten_file' => $filePath,
            'video_path' => $videoPath,
        ]);

        return redirect()
            ->route('admin.modul')
            ->with('success', 'Modul berhasil diperbarui');
    }
    public function destroy(Modul $modul)
    {
        if ($modul->konten_file) {
            Storage::disk('public')
                ->delete($modul->konten_file);
        }

        if ($modul->video_path) {
            Storage::disk('public')
                ->delete($modul->video_path);
        }

        $modul->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
