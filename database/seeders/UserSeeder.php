<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Dani',
            'email' => 'mhs1@example.com',
            'password' => Hash::make('mhs11111'),
            'role' => 'mahasiswa',
        ]);

        User::create([
            'name' => 'Admin Space',
            'email' => 'adminspace@example.com',
            'password' => Hash::make('admin111'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Dosen Gaib',
            'email' => 'dosen1@example.com',
            'password' => Hash::make('dosen111'),
            'role' => 'dosen',
        ]);
    }
}