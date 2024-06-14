<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    protected $table = "tabel_lowongan";

    public $timestamps = false;

    protected $fillable = [
        "judul",
        "tanggal",
        "isi",
        "id_tag",
        "slug",
        "dokumen"
    ];
}
