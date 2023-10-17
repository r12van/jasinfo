<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Berita;
use App\Models\Menu;

use Illuminate\Support\Facades\Log;
use Throwable;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    //
    public function index()
    {
        return view('admin.layouts.app');
    }

    public function carousel()
    {
        return Berita::where('highlight', '!=', 0)->orderBy('highlight')->get();
    }
    public function kebakaran()
    {
        return  Berita::where('id_tipe', '=', 1)->orderBy('tanggal', 'desc')->take(1)->get();
    }
    public function penyelamatan()
    {
        return  Berita::where('id_tipe', '=', 2)->orderBy('tanggal', 'desc')->take(1)->get();
    }
    public function pencegahan()
    {
        return  Berita::where('id_tipe', '=', 3)->orderBy('tanggal', 'desc')->take(1)->get();
    }
    public function latestnews()
    {
        return  Berita::where('publish', 1)->orderBy('tanggal', 'desc')->take(9)->get();
    }
    public function statistics() {
        $statistics['countKebakaran'] = Berita::where('id_tipe', '=', 1)->count();
        $statistics['countPenyelamatan'] = Berita::where('id_tipe', '=', 2)->count();
        $statistics['countPencegahan'] = Berita::where('id_tipe', '=', 3)->count();
        return $statistics;
    }
    public function pers()
    {
        return  Berita::where('id_tipe', '=', 4)->orderBy('tanggal', 'desc')->take(10)->get();
    }
    public function portofolio()
    {
        return  Berita::where('id_tipe', '=', 5)->orderBy('tanggal', 'desc')->take(8)->get();
    }


}
