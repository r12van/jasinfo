<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Lowongan;
use App\Models\Tag;

class UtamaController extends Controller
{
    public function beritaTerkini()
    {
        return Berita::where('publish', 1)->orderBy('tanggal', 'DESC')->take(9)->get();
    }

    public function carousel()
    {
        return  Berita::where('highlight', '!=', 0)->orderBy('highlight')->get();
    }

    public function pers()
    {
        return  Berita::where('id_tipe', '=', 4)->orderBy('tanggal', 'desc')->take(10)->get();
    }

    public function publikasiPers()
    {
        return  Berita::where('id_tipe', '=', 4)->orderBy('tanggal', 'desc')->paginate(8);
    }

    public function kegiatan()
    {
        return  Berita::where('id_tipe', '=', 5)->orderBy('tanggal', 'desc')->take(8)->get();
    }

    public function publikasiKegiatan()
    {
        return  Berita::where('id_tipe', '=', 5)->orderBy('tanggal', 'desc')->paginate(8);
    }

    public function kebakaran()
    {
        return  Berita::where('id_tipe', '=', 1)->orderBy('tanggal', 'desc')->take(1)->get();
    }

    public function publikasiKebakaran()
    {
        return  Berita::where('id_tipe', '=', 1)->orderBy('tanggal', 'desc')->paginate(4, ['*'], 'kebakaran');
    }

    public function penyelamatan()
    {
        return  Berita::where('id_tipe', '=', 2)->orderBy('tanggal', 'desc')->take(1)->get();
    }

    public function publikasiPenyelamatan()
    {
        return  Berita::where('id_tipe', '=', 2)->orderBy('tanggal', 'desc')->paginate(4, ['*'], 'penyelamatan');
    }

    public function pencegahan()
    {
        return  Berita::where('id_tipe', '=', 3)->orderBy('tanggal', 'desc')->take(1)->get();
    }

    public function loker()
    {
        $tags = Tag::get();
        $lokers =
        Lowongan::select('tabel_lowongan.id','tabel_lowongan.judul','tabel_lowongan.tanggal','tabel_lowongan.isi','tabel_lowongan.dokumen','tabel_lowongan.slug as link','tag.id','tag.slug','tag.tag_loker','tabel_lowongan.id_tag')
                    ->join('tag', 'tag.id', '=', 'tabel_lowongan.id_tag')
                    ->get();
        // return $lokers;
        return view('loker.lowongan', compact('tags','lokers'));
    }

    public function lokerView($slug) {
        $slug = $slug;
        $lokers = Lowongan::where('slug',$slug)->get();
        return view('loker.view', compact('lokers'));
    }
}
