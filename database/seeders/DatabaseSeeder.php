<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Okis;
use App\Models\User;
use App\Models\KegiatanOkis;
use App\Models\MemberOkis;
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
            'slug' => 'dpm',
            'nama_oki' => 'Dewan Perwakilan Mahasiswa',
            'akronim_oki' => 'DPM',
            'struktur_divisi' => 'Sample Structure.jpg',
            'sejarah' => 'Sejarah DPM Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'pengertian' => 'DPM adalah Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'benefit' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'info_terkini' => 'OPEN RECRUITMENT ON JULY 2023',
            'kategori_oki' => '1',
        ]);
        DB::table('okis_table')->insert([
            'slug' => 'bem',
            'nama_oki' => 'Badan eksekutif Mahasiswa',
            'akronim_oki' => 'BEM',
            'struktur_divisi' => 'Sample Structure.jpg',
            'sejarah' => 'Sejarah BEM Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'pengertian' => 'BEM adalah Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'benefit' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'info_terkini' => 'OPEN RECRUITMENT ON SEPTEMBER 2023',
            'kategori_oki' => '1',
        ]);
        DB::table('okis_table')->insert([
            'slug' => 'hmm',
            'nama_oki' => 'Himpunan Mahasiswa Mesin',
            'akronim_oki' => 'HMM',
            'struktur_divisi' => 'Sample Structure.jpg',
            'sejarah' => 'Sejarah HMJ Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'pengertian' => 'HMJ adalah Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'benefit' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'info_terkini' => 'OPEN RECRUITMENT ON SEPTEMBER 2023',
            'kategori_oki' => '2',
        ]);
        DB::table('okis_table')->insert([
            'slug' => 'hmti ',
            'nama_oki' => 'Himpunan Mahasiswa Teknologi informasi ',
            'akronim_oki' => 'HMTI',
            'struktur_divisi' => 'Sample Structure.jpg',
            'sejarah' => 'Sejarah HMJ Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'pengertian' => 'HMJ adalah Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'benefit' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, asperiores cupiditate corrupti sunt assumenda ad? Rem, quibusdam molestiae! Quam, rem.',
            'info_terkini' => 'OPEN RECRUITMENT ON SEPTEMBER 2023',
            'kategori_oki' => '2',
        ]);
        DB::table('kategori_okis')->insert([
            'nama_kategori' => 'Lembaga Tinggi',
            'akronim_kategori' => 'Lembaga Tinggi',
        ]);
        DB::table('kategori_okis')->insert([
            'nama_kategori' => 'Himpunan Mahasiswa Jurusan',
            'akronim_kategori' => 'Himpunan Mahasiswa Jurusan',
        ]);
        DB::table('kategori_okis')->insert([
            'nama_kategori' => 'Unit Kegiatan Mahasiswa',
            'akronim_kategori' => 'Unit Kegiatan Mahasiswa',
        ]);

        MemberOkis::factory(10)->create();
        User::factory(10)->create();
        Okis::factory(5)->create();
        KegiatanOkis::factory(10)->create();
        PrestasiOkis::factory(10)->create();


    }
}
