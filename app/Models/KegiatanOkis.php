<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanOkis extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_okis_table';

    protected $fillable = [
        'id_oki',
        'kategori',
        'nama_kegiatan',
        'deskripsi_kegiatan',
        'peserta',
        'tempat_waktu_pelaksanaan',
    ];

    // Add any relationships or other methods if needed
}
