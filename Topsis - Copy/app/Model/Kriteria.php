<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    //
    protected $table = 'kriteria';
    protected $fillable = [
        'name',
        'pendidikan',
        'wawancara',
        'pengetahuan',
        'testing',
        'cv',
        'waktu_pengerjaan',
        'gaji',
        'img_path',
    ];
}
