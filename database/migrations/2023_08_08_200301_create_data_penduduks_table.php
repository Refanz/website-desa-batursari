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
        Schema::create('tb_data_penduduk', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_penduduk');
            $table->integer('jumlah_perempuan');
            $table->integer('jumlah_laki_laki');
            $table->year('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_data_penduduk');
    }
};
