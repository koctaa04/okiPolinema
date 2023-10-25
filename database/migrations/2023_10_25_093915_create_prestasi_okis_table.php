<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiOkisTable extends Migration
{
    public function up()
    {
        Schema::create('prestasi_okis_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_oki');
            $table->string('nama_prestasi');
            $table->text('deskripsi_lomba');
            $table->string('juara');
            $table->date('tempat_waktu_pelaksanaan');
            $table->json('peserta_lomba');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestasi_okis_table');
    }
}
