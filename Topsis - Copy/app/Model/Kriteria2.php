<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kriteria2 extends Model
{
    //
    protected $table = 'kriteria2';
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
