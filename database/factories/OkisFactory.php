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
            'akronim_oki' => $this->faker->word,
            'struktur_divisi' => 'Sample Structure.jpg',
            'sejarah' => 'Sejarah DPM Lorem ipsum...',
            'pengertian' => 'DPM adalah Lorem ipsum...',
            'kegiatan' => 'Sample Kegiatan',
            'benefit' => json_encode(['Manfaat/Keunggulan DPM adalah Lorem ipsum...']),
            'info_terkini' => 'OPEN RECRUITMENT ON JULY 2023',
            'kategori_oki' => '1'
        ];
    }
}
