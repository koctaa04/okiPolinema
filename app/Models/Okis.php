<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Okis extends Model
{
    use HasFactory;
    
    protected $table = 'okis_table';

    protected $fillable = [
        'slug',
        'nama_oki',
        'akronim_oki',
        'struktur_divisi',
        'sejarah',
        'pengertian',
        'kegiatan',
        'benefit',
        'info_terkini',
        'kategori_oki',
        
    ];
}
