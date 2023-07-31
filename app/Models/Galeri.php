<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasUlids;

    protected 
        $table = "tabel_galeri",
        $primaryKey = "id_galeri";

    protected $fillable = [
        "judul",
        "slug",
        "data",
        "artikel",
        "id_tipe",
        "tanggal",
        "publish",
    ];


    public function tipe()
    {
        return $this->belongsTo(TipeGaleri::class, "id_tipe","id_tipe");
    }  
}
