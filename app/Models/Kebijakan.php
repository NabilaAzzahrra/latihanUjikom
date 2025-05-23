<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebijakan extends Model
{
    use HasFactory;
    protected $fillable = [
        'max_wkt_pjm',
        'max_jml_koleksi',
        'denda',
    ];

    protected $table = 'kebijakan';
}
