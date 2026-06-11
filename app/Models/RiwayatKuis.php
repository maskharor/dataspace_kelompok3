<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatKuis extends Model
{

    protected $table = 'riwayat_kuis';

    protected $fillable = [
        'user_id',
        'modul_id',
        'skor_akhir',
        'status_progres'

    ];

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function modul()
    {

        return $this->belongsTo(Modul::class);
    }
}
