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
            $table->date('waktu_pelaksanaan');
            $table->string('tempat_pelaksanaan');
            $table->string('peserta_lomba');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prestasi_okis_table');
    }
}
