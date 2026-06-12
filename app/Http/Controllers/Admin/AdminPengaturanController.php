<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminPengaturanController extends Controller
{
    public function index()
    {
        return view(
            'Admin.pengaturan',
            [
                'user' => Auth::user()
            ]
        );
    }

    public function updateProfile(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama maksimal 255 karakter.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan oleh pengguna lain.',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return back()->with(
            'success',
            'Profil berhasil diperbarui.'
        );
    }
    public function updatePassword(Request $request)
    {
        $user = User::findOrFail(Auth::id());

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ], [
            'current_password.required' =>
            'Password saat ini wajib diisi.',

            'password.required' =>
            'Password baru wajib diisi.',

            'password.min' =>
            'Password minimal 8 karakter.',

            'password.confirmed' =>
            'Konfirmasi password tidak cocok.',
        ]);

        if (
            !Hash::check(
                $request->current_password,
                $user->password
            )
        ) {
            return back()->withErrors([
                'current_password' =>
                'Password saat ini salah.'
            ]);
        }

        $user->update([
            'password' =>
            Hash::make($request->password)
        ]);

        return back()->with(
            'success',
            'Password berhasil diperbarui.'
        );
    }
}
