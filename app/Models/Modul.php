<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    protected $table = 'moduls';

    protected $fillable = [
        'judul',
        'deskripsi',
        'konten_teks',
        'konten_file',
        'kategori',
        'video_path',
        'status',
        'created_by',
        'reviewed_by',
        'catatan_revisi',
        'reviewed_at'
    ];

    public function soals()
    {
        return $this->hasMany(Soal::class);
    }


    public function riwayatKuis()
    {
        return $this->hasMany(RiwayatKuis::class);
    }

    public function getStatusLabelAttribute()
    {
        return match ($this->status) {
            'draft' => 'Draf',
            'published' => 'Dipublikasikan',
            'rejected' => 'Ditolak',
            default => '-',
        };
    }
}
