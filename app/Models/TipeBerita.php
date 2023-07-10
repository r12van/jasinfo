<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeBerita extends Model
{
    protected 
        $table = "tabel_tipe_berita",
        $primaryKey = "id_tipe";

    public $timestamps = false;

    protected $fillable = [
        "id_tipe",
        "nama_tipe"
    ];

    public function berita()
    {
        return $this->hasMany(Berita::class,"id_tipe","id_tipe");
    }
}
