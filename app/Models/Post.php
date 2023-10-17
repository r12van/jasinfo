<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUlids;

    protected
        $table = "tabel_berita",
        $primaryKey = "id_berita";

    protected $fillable = [
        "judul",
        "slug",
        "summary",
        "isi",
        "id_wilayah",
        "id_tipe",
        "tanggal",
        "highlight"
    ];
}
