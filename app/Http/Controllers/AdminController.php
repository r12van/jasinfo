<?php

namespace App\Http\Controllers;

use App\Models\TipeBerita;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminBerita()
    {
        return view('admin.dashboard.berita');
    }

    public function adminBuatBerita()
    {
        $wilayah = Wilayah::all();
        $tipe = TipeBerita::all();

        return view('admin.dashboard.editor-berita')->with([
            "list_wilayah" => $wilayah,
            "list_tipe" => $tipe
        ]);
    }
}
