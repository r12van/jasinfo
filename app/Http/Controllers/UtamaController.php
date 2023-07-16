<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class UtamaController extends Controller
{
    public function beritaTerkini()
    {
        return Berita::where('publish', 1)->orderBy('tanggal')->take(9)->get();
    }

    public function carousel()
    {
        return  Berita::where('highlight', '!=', 0)->orderBy('highlight')->get();
    }

    public function pers()
    {
        return  Berita::where('id_tipe', '=', 4)->orderBy('tanggal')->take(10)->get();
    }

    public function publikasiPers()
    {
        return  Berita::where('id_tipe', '=', 4)->orderBy('tanggal')->paginate(8);
    }

    public function kegiatan()
    {
        return  Berita::where('id_tipe', '=', 5)->orderBy('tanggal')->take(8)->get();
    }

    public function publikasiKegiatan()
    {
        return  Berita::where('id_tipe', '=', 5)->orderBy('tanggal')->paginate(8);
    }

    public function kebakaran()
    {
        return  Berita::where('id_tipe', '=', 1)->orderBy('tanggal')->take(1)->get();
    }

    public function publikasiKebakaran()
    {
        return  Berita::where('id_tipe', '=', 1)->orderBy('tanggal')->paginate(4, ['*'], 'kebakaran');
    }

    public function penyelamatan()
    {
        return  Berita::where('id_tipe', '=', 2)->orderBy('tanggal')->take(1)->get();
    }

    public function publikasiPenyelamatan()
    {
        return  Berita::where('id_tipe', '=', 2)->orderBy('tanggal')->paginate(4, ['*'], 'penyelamatan');
    }

    public function pencegahan()
    {
        return  Berita::where('id_tipe', '=', 3)->orderBy('tanggal')->take(1)->get();
    }
}
