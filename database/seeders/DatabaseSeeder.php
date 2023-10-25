<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Okis;
use App\Models\KegiatanOkis;
use App\Models\PrestasiOkis;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\KegiatanOkis;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('okis_table')->insert([
            'nama_oki' => 'Dewan Perwakilan Mahasiswa',
            'akronim_oki' => 'DPM',
            'struktur_divisi' => 'Sample Structure.jpg',
            'sejarah' => 'Sejarah DPM Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'pengertian' => 'DPM adalah Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'benefit' => json_encode(['Manfaat/Keunggulan DPM adalah Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.']),
            'info_terkini' => 'OPEN RECRUITMENT ON JULY 2023',
            'kategori_oki' => '1',
        ]);

        // Okis::factory(10)->create();
        KegiatanOkis::factory(10)->create();
        PrestasiOkis::factory(10)->create();


    }
}
