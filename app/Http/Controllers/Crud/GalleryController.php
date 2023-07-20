<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\TipeGaleri;
use App\Models\Wilayah;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
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
            $time = now();
            return abort(503, "Tidak dapat mengakses galeri." . " (".$time.")");
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
            $time = now();
            return abort(503, "Tidak dapat mengakses editor galeri." . " (".$time.")");
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
            
            $judul = $r->input('judul');
            $tipe = $r->input('tipe');
            $tanggal = $r->input('tanggal');
            $wilayah = $r->input('wilayah');

            // untuk media yang diupload
            $index = $r->input('index');
            $media = $r->input('media');
            $sumber = $r->input('sumber');

            // return dd($r->input());

            // return redirect()->back()->withInput()->with(
            //     [
            //         "alert.success" => "Test gagal",
            //         "reference_folder" => Auth::user()->id
            //     ]);

            $userid = Auth::user()->id;


            $data_galeri = [];
            foreach($index as $i=>$d)
            {
                $data_galeri[$i] = [
                    "urut" => $i,
                    "tipe" => $media[$i],
                    "file" => $d,
                    "sumber" => $sumber[$i]
                ];
            }

            // pindahkan gambar ke folder public
            $uploadController = new SimpleImageUpload;
            foreach($data_galeri as $i => $data)
            {
                if($data["tipe"] == "image")
                {
                    // galeri/dokumentasi/jakarta-pusat/2023-01-20/judul/image/1.jpg
                    $file_path = $uploadController->dirGaleri( Str::slug(TipeGaleri::find($tipe)->nama_tipe), Str::slug(Wilayah::find($wilayah)->nama_wilayah), $tanggal ) . "/" .  Str::slug($judul) . "/". $data["tipe"] ;
                    $file_name =  $i . "." . pathinfo($data["file"], PATHINFO_EXTENSION);

                    // if(!File::exists($file_path))
                    // error_log(public_path(str_replace("/","\\",$file_path)));
                        File::makeDirectory(public_path(str_replace("/","\\",$file_path)), 0777, true,true);

                    File::move(
                        public_path(str_replace("/","\\",$uploadController->dirTempGaleri($userid) . "/" . $data["file"])),
                        public_path(str_replace("/","\\",$file_path . "/" . $file_name))
                        );

                    
                    
                    $data_galeri[$i]["file"] = $file_path . "/" . $file_name;
                }
            }   

            // return dd($data_galeri);

            // simpan ke db
            $galeri = new Galeri();
            $galeri->judul =  $judul;
            $galeri->slug = Str::slug($judul);
            $galeri->id_tipe =  $tipe;
            $galeri->tanggal =  $tanggal;
            $galeri->id_wilayah =  $wilayah;
            $galeri->data =  json_encode($data_galeri);
                // "pengupload" => (Auth::user()->name) ? Auth::user()->name : "Admin",
            

            $galeri->save();

            // hapus directory upload sementara
            try{

                File::delete(public_path(str_replace("/","\\",$uploadController->dirTempGaleri($userid))));
            }
            catch(Throwable $e)
            {
                error_log("Galeri Controller Error : kesalahan saat menghpus folder galeri sementara at store() " . $e);
                Log::error("Galeri Controller Error : kesalahan saat menghpus folder galeri sementara at store() " . $e);
            }

            return redirect()->back()->with('alert.success'.'Berhasil menyimpan galeri!');
        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal menyimpan galeri at store() " . $e);
            Log::error("Galeri Controller Error : Gagal menyimpan galeri at store() " . $e);
            $time = now();
            return redirect()->back()->withInput()->with('alert.danger','Gagal menyimpan media untuk galeri ke database!' . " (".$time.")");
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
