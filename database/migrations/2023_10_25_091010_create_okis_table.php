<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('okis_table', function (Blueprint $table) {
            $table->id();
            $table->string('nama_oki');
            $table->string('akronim_oki');
            $table->string('struktur_divisi');
            $table->string('sejarah');
            $table->string('pengertian');
            $table->string('kegiatan');
            $table->json('benefit');
            $table->string('info_terkini');
            $table->string('kategori_oki');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('okis_table');
    }
};
