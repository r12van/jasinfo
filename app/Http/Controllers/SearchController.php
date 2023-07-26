<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class SearchController extends Controller
{
    public function search(Request $r)
    {
            if($r->exists('q'))
            {
                $keyword = $r->input('q');
                
                // cari berita/artikel
                try{
                    $berita = Berita::where('judul','like','%'.$keyword.'%')
                            ->orWhere('summary','like','%'.$keyword.'%')
                            ->orWhere('slug','like','%'.$keyword.'%')
                            ->orWhere('isi','like','%'.$keyword.'%');
                }
                catch(Throwable $e)
                {
                    $berita = null;
                }

                // cari galeri
                try{
                    $galeri = Galeri::where('judul','like','%'.$keyword.'%')
                            ->orWhere('summary','like','%'.$keyword.'%')
                            ->orWhere('slug','like','%'.$keyword.'%');
                }
                catch(Throwable $e)
                {
                    $galeri = null;
                }
                
                return view('dashboard.search')->with([
                    "berita" => $berita,
                    "galeri" => $galeri
                ]);
            }
    }
}
