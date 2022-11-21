<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria2 extends Model
{
    use HasFactory;
    protected $table = 'kriteria2';
    protected $fillable = ['name','email','pendidikan','experience','wawancara','pengetahuan','testing','cv','waktu_pengerjaan','gaji','status','img_path'];
    
}
