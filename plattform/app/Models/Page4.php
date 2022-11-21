<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page4 extends Model
{
    use HasFactory;
    protected $table = 'page4';
    protected $fillable = ['title','desc'];
}
