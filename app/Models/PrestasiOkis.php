<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiOkis extends Model
{
    use HasFactory;

    protected $table = 'prestasi_okis_table';

    protected $fillable = [
        'id_oki',
        'nama_prestasi',
        'deskripsi_lomba',
        'juara',
        'tempat_waktu_pelaksanaan',
        'peserta_lomba',
    ];

    // Add any relationships or other methods if needed
}
