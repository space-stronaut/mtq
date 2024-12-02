<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formdaftars', function (Blueprint $table) {
            $table->id();
            $table->string('namalengkap');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->foreignId('id_tahun');
            $table->foreignId('id_desa');
            $table->foreignId('id_cabang');
            $table->foreignId('id_golongan');
            $table->string('alamat');
            $table->string('foto_profil');
            $table->string('upload_ktp');
            $table->string('upload_kk');
            $table->string('bukti_daftar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formdaftars');
    }
};
