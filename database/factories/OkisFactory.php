<?php
namespace Database\Factories;

use App\Models\Okis;
use Illuminate\Database\Eloquent\Factories\Factory;

class OkisFactory extends Factory
{
    protected $model = Okis::class;

    public function definition()
    {
        return [
            'nama_oki' => $this->faker->word,
            'slug' => $this->faker->word,
            'akronim_oki' => $this->faker->word,
            'struktur_divisi' => 'Sample Structure.jpg',
            'sejarah' => 'OKI dibentuk pada tanggal 20 Januari 2023. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum minima voluptate beatae quod at, voluptatum possimus eligendi assumenda laudantium molestias?',
            'pengertian' => 'OKI adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum minima voluptate beatae quod at, voluptatum possimus eligendi assumenda laudantium molestias?',
            'benefit' => json_encode(['Banyak yang akan didapatkan, Contohnya antara lain; punya jiwa kepemimpinan, belajar cara berkolaborasi']),
            'info_terkini' => 'OPEN RECRUITMENT ON JULY 2023',
            'kategori_oki' => fake()->numberBetween(1,3)
        ];
    }
}
