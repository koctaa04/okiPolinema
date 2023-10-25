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
            'sejarah' => 'BEM dibentuk pada tanggal 20 Januari 2023. lorem ipsum',
            'pengertian' => 'DPM adalah Lorem ipsum...',
            'benefit' => json_encode(['Banyak yang akan didapatkan, Contohnya antara lain; punya jiwa kepemimpinan, belajar cara berkolaborasi']),
            'info_terkini' => 'OPEN RECRUITMENT ON JULY 2023',
            'kategori_oki' => '1'
        ];
    }
}
