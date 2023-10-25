<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanOkisTable extends Migration
{
    public function up()
    {
        Schema::create('kegiatan_okis_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_oki');
            $table->string('nama_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->text('peserta');
            $table->enum('periode', ['tahunan', 'mingguan', 'harian']);
            $table->string('waktu_pelaksanaan');
            $table->string('tempat_pelaksanaan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatan_okis_table');
    }
}
