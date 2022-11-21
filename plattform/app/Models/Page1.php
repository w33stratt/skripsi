<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page1 extends Model
{
    use HasFactory;
    protected $table = 'page1';
    protected $fillable = ['name','email','pendidikan','experience','wawancara','pengetahuan','testing','cv','waktu_pengerjaan','gaji','status','img_path'];
    
}
