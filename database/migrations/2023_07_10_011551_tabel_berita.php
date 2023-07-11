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
        Schema::create('tabel_berita', function (Blueprint $table) {
            $table->ulid("id_berita");
            $table->string('judul');
            $table->string('slug');
            $table->string('penulis')->default("admin");
            $table->string('summary')->nullable();
            $table->string('banner')->nullable();
            $table->longText('isi');
            $table->foreignId('id_wilayah')->references('id_wilayah')->on('tabel_wilayah');
            $table->foreignId('id_tipe')->references('id_tipe')->on('tabel_tipe_berita');
            $table->string('tanggal');
            $table->boolean('publish')->default(false);
            $table->tinyInteger('highlight')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_berita');
    }
};
