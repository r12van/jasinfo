<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class PostBeritaController extends Controller
{
    public function kebakaran()
    {
        return  Berita::where('id_tipe', '=', 1)->orderBy('tanggal')->paginate(4);
    }

    public function penyelamatan()
    {
        return  Berita::where('id_tipe', '=', 2)->orderBy('tanggal')->paginate(4);
    }
}
