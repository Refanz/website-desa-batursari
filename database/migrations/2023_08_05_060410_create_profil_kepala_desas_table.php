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
        Schema::create('tb_profil_kepala_desa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('tempat_tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('status');
            $table->string('alamat');
            $table->string('no_telp');
            $table->string('nama_pasangan');
            $table->integer('jumlah_anak');
            $table->text('pendidikan_formal');
            $table->string('jabatan');
            $table->string('no_sk');
            $table->string('img_kepala_desa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_profil_kepala_desa');
    }
};
