<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\TipeGaleri;
use App\Models\Wilayah;
use Illuminate\Support\Facades\Log;
use Throwable;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $r)
    {
        try
        {
            $galeri = Galeri::query();
            
            if($r->expectsJson())
            {
                $this->middleware('auth');

            }
            
            if($r->exists('tipe'))
            {
                return view('dashboard.galeri.list')->with('galeri', $galeri->where('id_tipe',$r->input('tipe'))->where('publish',true));
            }
            
            $list_tipe = TipeGaleri::all();
            $index_galeri = [];
            foreach($list_tipe as $tipe)
            {
                $data = $galeri->where('id_tipe',$tipe->id_tipe)->where('publish',true);

                if(is_null($data))
                    continue;

                $index_galeri[] = [
                    'tipe' => $tipe->nama_tipe,
                    'data' => $data
                ];
            }

            return view('dashboard.galeri.index')->with('galeri',$index_galeri);
                

        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal melakukan index galeri at index() " . $e);
            Log::error("Galeri Controller Error : Gagal melakukan index galeri at index() " . $e);
            return abort(503, "Tidak dapat mengakses galeri.");
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->middleware('auth');
        try{

            $wilayah = Wilayah::all();
            $tipe = TipeGaleri::all();

            return view('admin.dashboard.editor-galeri')->with([
                "list_wilayah" => $wilayah,
                "list_tipe" => $tipe
            ]);

        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal menampilkan editor galeri at create() " . $e);
            Log::error("Galeri Controller Error : Gagal menampilkan editor galeri at create() " . $e);
            return abort(503, "Tidak dapat mengakses editor galeri.");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        $this->middleware('auth');
        try
        {
            
        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal menampilkan editor galeri at create() " . $e);
            Log::error("Galeri Controller Error : Gagal menampilkan editor galeri at create() " . $e);
            return redirect()->route('galeri.editor')->withInput()->with('alert.danger','Gagal menyimpan media untuk galeri ke database!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        try
        {
            $galeri = Galeri::where('slug',$slug)->where('publish',true)->first();

            if(is_null($galeri))
                return abort(404, 'Media tidak ditemukan!');
            
            return $galeri;
        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal menampilkan media galeri at show() " . $e);
            Log::error("Galeri Controller Error : Gagal menampilkan media galeri at show() " . $e);
            return abort(503,'Kesalahan saat mencoba mengakses galeri');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
