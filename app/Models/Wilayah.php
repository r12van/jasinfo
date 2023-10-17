<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected 
        $table = "tabel_wilayah",
        $primaryKey = "id_wilayah";
        
    public $timestamps = false;

    protected $fillable = [
        "id_wilayah",
        "nama_wilayah"
    ];

    public function berita()
    {
        return $this->hasMany(Berita::class,"id_wilayah","id_wilayah");
    }

}
