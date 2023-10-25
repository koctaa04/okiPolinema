<?php
namespace Database\Factories;

use App\Models\KegiatanOkis;
use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanOkisFactory extends Factory
{
    protected $model = KegiatanOkis::class;

    public function definition()
    {
        return [
            'id_oki' => rand(1, 10), // Replace with appropriate logic to assign valid id_oki values
            'nama_kegiatan' => $this->faker->word,
            'deskripsi_kegiatan' => $this->faker->paragraph,
            'peserta' => $this->faker->randomElement(['Internal', 'Eksternal']),
            'periode' => $this->faker->randomElement(['tahunan', 'mingguan', 'harian']),
            'waktu_pelaksanaan' => $this->faker->date(),
            'tempat_pelaksanaan' => $this->faker->word,
        ];
    }
}
