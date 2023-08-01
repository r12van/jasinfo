<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Contracts\Database\Query\Builder;
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
                error_log($keyword);
                
                // cari berita/artikel
                try{
                            

                    $berita = Berita::
                            where('publish',true)
                            ->where(function($q) use($keyword){
                                $q->where('judul','like','%'.$keyword.'%')
                                    ->orWhere('summary','like','%'.$keyword.'%')
                                    ->orWhere('slug','like','%'.$keyword.'%')
                                    ->orWhere('isi','like','%'.$keyword.'%');
                            })->get();

                            
                }
                catch(Throwable $e)
                {
                    error_log("Search Controller Error : Kesalahan saat melakukan pencarian berita at search() ".$e);
                    Log::error("Search Controller Error : Kesalahan saat melakukan pencarian berita at search() ".$e);
                    $time = now();
                    $berita = "(".$time.") Error saat melakukan pencarian artikel berita dengan kata pencarian ";
                }

                // cari galeri
                try{
                    $galeri = Galeri::where('publish',true)
                            ->where(function($q) use($keyword)
                            {
                                $q->where('judul','like','%'.$keyword.'%')
                                    ->orWhere('summary','like','%'.$keyword.'%')
                                    ->orWhere('slug','like','%'.$keyword.'%');
                            })->get();
                            
                }
                catch(Throwable $e)
                {
                    error_log("Search Controller Error : Kesalahan saat melakukan pencarian galeri at search() ".$e);
                    Log::error("Search Controller Error : Kesalahan saat melakukan pencarian galeri at search() ".$e);
                    $time = now();
                    $galeri = "(".$time.") Error saat melakukan pencarian galeri dengan kata pencarian ";
                }
                
                return view('dashboard.search')->with([
                    "berita" => $berita,
                    "galeri" => $galeri,
                    "keyword" => $keyword
                ]);
            }
    }
}
