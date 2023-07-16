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
        Schema::create('tabel_tipe_berita', function (Blueprint $table) {
            $table->id('id_statistik')->autoIncrement();
            $table->string('kebakaran');
            $table->string('penyelamatan');
            $table->string('sosialisasi');
            $table->string('bulan');
            $table->string('tahun');
            $table->timestamp('created_at')->nullable();
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_statistik');
    }
};
