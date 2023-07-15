<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeGaleri extends Model
{
    protected 
        $table = "tabel_tipe_galeri",
        $primaryKey = "id_tipe";

    public $timestamps = false;

    protected $fillable = [
        "id_tipe",
        "nama_tipe"
    ];

    public function galeri()
    {
        return $this->hasMany(Galeri::class,"id_tipe","id_tipe");
    }
}
