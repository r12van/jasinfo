<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasUlids;

    protected 
        $table = "tabel_berita";

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

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class,"id_wilayah","id_wilayah");
    }

    public function tipe()
    {
        return $this->belongsTo(TipeBerita::class, "id_tipe","id_tipe");
    }  
}
