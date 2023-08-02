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
use Yajra\DataTables\Facades\DataTables;
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
            
            if($r->ajax())
            {
                $this->middleware('auth');

                // fetch media galeri untuk modal
                if($r->exists("gallery-item"))
                {
                    $id = $r->input("gallery-item");

                    $galeri = Galeri::find($id);

                    if(!is_null($galeri))
                        return json_decode($galeri->data);
                    else
                        return response("Galeri dengan id : ".$id." tidak ditemukan di database.");
                }

                $galeri = $galeri->join('tabel_wilayah', 'tabel_galeri.id_wilayah', '=', 'tabel_wilayah.id_wilayah')
                    ->join('tabel_tipe_galeri', 'tabel_galeri.id_tipe', '=', 'tabel_tipe_galeri.id_tipe');

                // read data untuk datatable
                if($r->exists('tabel'))
                {
                    return DataTables::eloquent($galeri)
                    ->addIndexColumn()
                    ->addColumn("tindakan", function($galeri){
                        return view("kolom.tindakan-tabel-galeri")->with(["id" => $galeri->id_galeri]);
                    })
                    ->addColumn("publish", function($galeri){
                        return view("kolom.publish-tabel-galeri")->with(["publish" => $galeri->publish,"id"=>$galeri->id_galeri]);
                    })
                    ->addColumn("item", function($galeri){
                        $data = json_decode($galeri->data);
                        $jumlah_gambar = 0;
                        $jumlah_video = 0;
                        $jumlah_gambar_hilang = 0;

                        foreach($data as $d)
                        {
                            if($d->tipe == "image")
                            {   
                                $jumlah_gambar++;

                                if(!(File::exists(public_path($d->file))))
                                    $jumlah_gambar_hilang++;
                            }
                            elseif($d->tipe == "video")
                            {
                                $jumlah_video++;
                            }
                        }

                        return view("kolom.item-tabel-galeri")->with(["id"=>$galeri->id_galeri,"j_gambar" => $jumlah_gambar, "j_gambar_h" => $jumlah_gambar_hilang, "j_video" => $jumlah_video]);
                    })
                    ->toJson();
                }
            }
            
            // menampilkan list galeri berdasarkan 1 tipe galeri
            elseif($r->exists('tipe'))
            {
                return view('dashboard.galeri.list')->with('galeri', $galeri->where('id_tipe',$r->input('tipe'))->where('publish',true));
            }

            // menampilkan semua galeri
            elseif($r->exists("index")){
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
            // untuk ceklist publish
            if($r->exists("update")){
                if($r->input("update") == "table")
                {
                    $list_id = Galeri::all()->pluck('id_galeri');
                    $input_publish = $r->input("publish");

                    foreach ($list_id as $id) {
                        $berita = Galeri::find($id);
                        if(isset($input_publish[$id]))
                            $berita->publish = ($input_publish[$id] == "true")? true : false;
                        $berita->save();
                    }

                    return back()->with('alert.success', 'Perubahan berhasil disimpan!');
                }
            }
            
            $judul = $r->input('judul');
            $tipe = $r->input('tipe');
            $tanggal = $r->input('tanggal');
            $wilayah = $r->input('wilayah');
            $artikel = $r->input('artikel');
            $summary = $r->input('summary');

            // untuk media yang diupload
            $index = $r->input('index');
            $media = $r->input('media');
            $sumber = $r->input('sumber');


            // return dd($r->input());

            // return back()->withInput()->with(
            //     [
            //         "alert-success" => "Test gagal",
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

            // daftar nama file untuk disimpan ke database
            $daftar_file = [];
            $file_path = "";
            $uploadController = new SimpleImageUpload;
            foreach($data_galeri as $i => $data)
            {
                if($data["tipe"] == "image")
                {
                    // galeri/dokumentasi/jakarta-pusat/2023-01-20/judul/image/1.jpg
                    $file_path = $uploadController->dirGaleri( Str::slug(TipeGaleri::find($tipe)->nama_tipe), Str::slug(Wilayah::find($wilayah)->nama_wilayah), $tanggal ) . "/" .  Str::slug($judul) . "/". $data["tipe"] ;
                    $file_name =  $i . "." . pathinfo($data["file"], PATHINFO_EXTENSION);

                    
                    $nama_file = $data_galeri[$i]["file"];
                    $data_galeri[$i]["file"] = $file_path . "/" . $file_name;
                    $daftar_file[$nama_file] = $file_path . "/" . $file_name;
                    
                }
            }             

            if(is_null($summary))
            {
                if(!is_null($artikel))
                    $summary = implode(' ', array_slice(explode(' ', strip_tags($artikel)), 0, 30));
                else
                    $summary = "";
            }

            // simpan ke db
            $ulid = Galeri::create([
                "judul" => $judul,
                "id_tipe" => $tipe,
                "tanggal" => $tanggal,
                "id_wilayah" => $wilayah,
                "artikel" => $artikel,
                "summary" => $summary,
                "data" => json_encode($data_galeri),
                "pengupload" => (Auth::user()->name) ? Auth::user()->name : "Admin"
            ])->id_galeri;

             // buat slug
            $slug = $tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $judul), 0, 5))) . "_" . substr($ulid, -7);
            if (Galeri::where("slug", $slug)->exists()) {
                $i = 0;
                $status = false;
                while (!$status) {
                    $tes_slug = $tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $judul), 0, 5))) . "_" . substr($ulid, -7) . "_" . $i;
                    if (!Galeri::where("slug", $tes_slug)->exists()) {
                        $slug = $tes_slug;
                        $status = true;
                    } else
                        $i++;
                }
            }

            $galeri = Galeri::find($ulid);
            $galeri->slug = $slug;
            $galeri->save();

             // pindahkan gambar ke folder public
            if(!File::exists(public_path(str_replace("/","\\",$file_path))))
                        File::makeDirectory(public_path(str_replace("/","\\",$file_path)), 0777, true,true);
            foreach($daftar_file as $nama_tmp_file => $tujuan)
            {

                File::move(
                    public_path(str_replace("/","\\",$uploadController->dirTempGaleri($userid) . "/" . $nama_tmp_file)),
                    public_path(str_replace("/","\\",$tujuan))
                    );
                    
            }

            // hapus directory upload sementara
            try{

                Storage::deleteDirectory(public_path(str_replace("/","\\",$uploadController->dirTempGaleri($userid))));
            }
            catch(Throwable $e)
            {
                error_log("Galeri Controller Error : kesalahan saat menghpus folder galeri sementara at store() " . $e);
                Log::error("Galeri Controller Error : kesalahan saat menghpus folder galeri sementara at store() " . $e);
            }

            return back()->with('alert-success'.'Berhasil menyimpan galeri!');
        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal menyimpan galeri at store() " . $e);
            Log::error("Galeri Controller Error : Gagal menyimpan galeri at store() " . $e);
            $time = now();
            return back()->withInput()->with([
                'alert-danger' => 'Gagal menyimpan media untuk galeri ke database!' . " (".$time.")",
                'reference_folder' => Auth::user()->id,
                'index' => $index,
                'media' => $media,
                'sumber' => $sumber
                ]);
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
        try
        {
            $galeri = Galeri::find($id);

            if(is_null($galeri))
                return abort(404, 'Media tidak ditemukan!');
            
            $data = json_decode($galeri->data);
            $list_wilayah = Wilayah::all();
            $list_tipe = TipeGaleri::all();

            $basepath = "";
            foreach($data as $item)
            {
                if($item->tipe == "image")
                {
                    $basepath = dirname($item->file);
                    break;
                }
            }

            return view("admin.dashboard.editor-galeri")->with([
                "editMode" => true,
                "list_wilayah" => $list_wilayah,
                "list_tipe" => $list_tipe,
                "id" => $galeri->id_galeri,
                "judul" => $galeri->judul,
                "tanggal" => $galeri->tanggal,
                "id_wilayah" => $galeri->id_wilayah,
                "id_tipe" => $galeri->id_tipe,
                "data" => $data,
                "artikel"=>$galeri->artikel,
                "summary"=>$galeri->summary,
                "basepath" => $basepath
            ]);
        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal menampilkan media galeri untuk edit at edit() " . $e);
            Log::error("Galeri Controller Error : Gagal menampilkan media galeri untuk edit at edit() " . $e);
            return abort(503,'Kesalahan saat mencoba mengakses galeri untuk diedit');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        $this->middleware("auth");
        try{

            $galeri = Galeri::find($id);
            

            $judul = $r->input('judul');
            $tipe = $r->input('tipe');
            $tanggal = $r->input('tanggal');
            $wilayah = $r->input('wilayah');
            $artikel = $r->input('artikel');
            $summary = $r->input('summary');

            // untuk media yang diupload
            $index = $r->input('index');
            $media = $r->input('media');
            $sumber = $r->input('sumber');

            $userid = Auth::user()->id;

            // path tempat media disimpan sebelumnya
            $path_lama = $r->input("basepath");

            // kick jika galeri tidak ditemukan
            if(is_null($galeri))
                return back()->withInput()->with([
                    "alert-danger" => "Kesalahan saat update : galeri dengan id ".$id." tidak ditemukan!",
                    'reference_folder' => Auth::user()->id,
                    'index' => $index,
                    'media' => $media,
                    'sumber' => $sumber
                ]);


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

            // daftar nama file untuk disimpan ke database
            $daftar_file = [];
            $file_path = "";
            $uploadController = new SimpleImageUpload;
            foreach($data_galeri as $i => $data)
            {
                if($data["tipe"] == "image")
                {
                    // galeri/dokumentasi/jakarta-pusat/2023-01-20/judul/image/1.jpg
                    $file_path = $uploadController->dirGaleri( Str::slug(TipeGaleri::find($tipe)->nama_tipe), Str::slug(Wilayah::find($wilayah)->nama_wilayah), $tanggal ) . "/" .  Str::slug($judul) . "/". $data["tipe"] ;
                    $file_name =  $i . "." . pathinfo($data["file"], PATHINFO_EXTENSION);

                    
                    $nama_file = $data_galeri[$i]["file"];
                    $data_galeri[$i]["file"] = $file_path . "/" . $file_name;
                    $daftar_file[$nama_file] = $file_path . "/" . $file_name;
                    
                }
            }
            $path_baru = $file_path;

            // buat summary jika tidak dibuat.
            if(is_null($summary))
            {
                if(!is_null($artikel))
                    $summary = implode(' ', array_slice(explode(' ', strip_tags($artikel)), 0, 30));
                else
                    $summary = "";
            }

             // buat slug
            $slug = $tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $judul), 0, 5))) . "_" . substr($id, -7);
            if (Galeri::where("slug", $slug)->exists()) {
                $i = 0;
                $status = false;
                while (!$status) {
                    error_log("status_pengulangan buat slug : " . $i);
                    $tes_slug = $tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $judul), 0, 5))) . "_" . substr($id, -7) . "_" . $i;
                    if (!Galeri::where("slug", $tes_slug)->exists()) {
                        $slug = $tes_slug;
                        $status = true;
                    } else
                        $i++;
                }
            }

            $galeri->judul =  $judul;
            $galeri->slug = $slug;
            $galeri->id_tipe =  $tipe;
            $galeri->tanggal =  $tanggal;
            $galeri->id_wilayah =  $wilayah;
            $galeri->artikel = $artikel;
            $galeri->summary = $summary;
            $galeri->data =  json_encode($data_galeri);
            $galeri->pengupload =  (Auth::user()->name) ? Auth::user()->name : "Admin";
            

            $galeri->save();

             // pindahkan gambar ke folder public
            if(!File::exists(public_path(str_replace("/","\\",$file_path))))
                        File::makeDirectory(public_path(str_replace("/","\\",$file_path)), 0777, true,true);
            foreach($daftar_file as $nama_tmp_file => $tujuan)
            {

                // jika file sudah ada dengan nama yang sama, maka hapus file lama
                if(File::exists(public_path(str_replace("/","\\",$tujuan))))
                {
                    File::delete(public_path(str_replace("/","\\",$tujuan)));
                }

                File::move(
                    public_path(str_replace("/","\\",$uploadController->dirTempGaleri($userid) . "/" . $nama_tmp_file)),
                    public_path(str_replace("/","\\",$tujuan))
                    );
                    
            }

            // hapus directory upload sementara dan directory lama jika berbeda dengan directory baru
            try{
                
                //Storage::deleteDirectory(public_path(str_replace("/","\\",$uploadController->dirTempGaleri($userid))));
                if($path_baru != $path_lama)
                    Storage::deleteDirectory(public_path(str_replace("/","\\",$path_lama)));
            }
            catch(Throwable $e)
            {
                error_log("Galeri Controller Error : kesalahan saat menghapus folder setelah selesai update at update() " . $e);
                Log::error("Galeri Controller Error : kesalahan saat menghapus folder setelah selesai update at update() " . $e);
            }

            

            return back()->withInput()->with('alert-success'.'Berhasil mengupdate galeri!')->with([
                    'reference_folder' => Auth::user()->id,
                    'index' => $index,
                    'media' => $media,
                    'sumber' => $sumber
                ]);  

        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal mengupdate galeri at update() " . $e);
            Log::error("Galeri Controller Error : Gagal mengupdate galeri at update() " . $e);
            $time = now();
            return back()->withInput()->with('alert-danger','Gagal mengupdate media untuk galeri ke database!' . " (".$time.")")
            ->with([
                    'reference_folder' => Auth::user()->id,
                    'index' => $index,
                    'media' => $media,
                    'sumber' => $sumber
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
            $galeri = Galeri::find($id);

            if(is_null($galeri))
                return back()->with("alert-danger","Galeri tidak ditemukan didatabase!");

            $galeri->delete();

            return back()->with("alert-success","Galeri berhasil dihapus!");
        }
        catch(Throwable $e)
        {
            error_log("Galeri Controller Error : Gagal menghapus galeri at destroy() " . $e);
            Log::error("Galeri Controller Error : Gagal menghapus galeri at destroy() " . $e);
            $time = now();
            return back()->with("alert-danger","Kesalahan saat mencoba menghapus galeri. (".$time.")");
        }
    }
}
