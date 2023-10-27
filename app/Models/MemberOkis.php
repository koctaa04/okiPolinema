<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberOkis extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'jabatan_oki',
        'tahun_jabatan',
    ];
}
