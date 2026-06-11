<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{

    protected $fillable = [

        'modul_id',
        'pertanyaan',
        'opsi_jawaban',
        'kunci_jawaban'

    ];


    protected $casts = [

        'opsi_jawaban' => 'array'

    ];


    public function modul()
    {

        return $this->belongsTo(Modul::class);
    }
}
