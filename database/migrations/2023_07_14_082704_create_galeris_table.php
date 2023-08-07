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
        Schema::create('tabel_galeri', function (Blueprint $table) {
            $table->ulid('id_galeri')->unique();
            $table->string('judul');
            $table->string('slug')->nullable();
            $table->longText('artikel')->nullable();
            $table->text('summary')->nullable();
            $table->string('tanggal');
            $table->string('pengupload')->default("Admin");
            $table->boolean('publish')->default(false);
            $table->foreignId('id_tipe')->references("id_tipe")->on("tabel_tipe_galeri");
            $table->foreignId('id_wilayah')->references('id_wilayah')->on('tabel_wilayah');
            $table->longText('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_galeri');
    }
};
