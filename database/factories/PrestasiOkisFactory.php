<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PrestasiOkis>
 */
class PrestasiOkisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $juara = $this->faker->numberBetween(1, 3);
        $juaraLabel = $juara . ($juara == 1 ? 'st' : ($juara == 2 ? 'nd' : 'rd')) . ' Winner';
        return [
            'id_oki' => $this->faker->numberBetween(1, 3),
            'nama_prestasi' => $this->faker->sentence,
            'deskripsi_lomba' => $this->faker->paragraph,
            'juara' => $juaraLabel,
            'tempat_waktu_pelaksanaan' => $this->faker->date,
            'peserta_lomba' => json_encode([
                'Participant 1',
                'Participant 2',
                'Participant 3',
            ]),
        ];
    }
}
