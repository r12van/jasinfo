<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\TipeBerita;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Throwable;
use Yajra\DataTables\Facades\DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $r)
    {
        try{
            
            $query = Berita::query();

            $query = $query
                            ->join('tabel_wilayah','tabel_berita.id_wilayah','=','tabel_wilayah.id_wilayah')
                            ->join('tabel_tipe_berita', 'tabel_berita.id_tipe','=','tabel_tipe_berita.id_tipe');
                
            if($r->ajax())
            {
                

                if($r->exists("tabel"))
                {
                    $mode = $r->input("tabel");

                    if($mode == "all")
                        $query = $query->all();
                    elseif($mode == "published")
                        $query = $query->where("publish",true);
                    elseif($mode == "highlighted")
                        $query = $query->where("highlight",true);
                    
                    return DataTables::eloquent($query)
                        ->addIndexColumn()
                        ->editColumn("publish", function($berita){
                                if($berita->publish)
                                    return "Publish";
                                else
                                    return "Belum Publish";
                            }
                        )
                        ->editColumn("banner", function ($berita){
                            if($berita->banner)
                                return view("kolom.banner")->with("banner",$berita->banner);
                            return "";
                        })
                        ->editColumn("tindakan",function($berita){
                            return view("kolom.tindakan-tabel-berita")->with("id",$berita->id_berita)->with("slug",$berita->slug);
                        })
                        ->toJson();
                }
            }

                // untuk preview
                if($r->exists('preview'))
                {
                    $berita = $query->where("id_berita",$r->input('preview'))->first();

                    return view("admin.dashboard.preview")->with([
                        "judul" => $berita->judul,
                        "summary" => $berita->summary,
                        "wilayah" => $berita->wilayah,
                        "tipe" => $berita->tipe,
                        "tanggal" => $berita->tanggal,
                        "banner" => $berita->banner,
                        "isi" => $berita->isi
                    ]);
                }

        }
        catch(Throwable $e)
        {
            error_log("Berita Controller Error : Gagal melakukan index berita at index() ".$e);
            Log::error("Berita Controller Error : Gagal melakukan index berita at index() ".$e);
            session()->flash("alert.danger","Kesalahan pada saat melakukan index berita.");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
        try{
                // fetch data
                $judul = $r->input("judul");
                $summary = $r->input("summary");
                $isi = $r->input("isi");
                $wilayah = $r->input("wilayah");
                $tipe = $r->input("tipe");
                $tanggal = $r->input("tanggal");
                $banner = $r->banner;
                $ext = (is_null($banner)) ? "jpg" : $banner->getClientOriginalExtension();
                // throw new Exception("Test");

                // untuk preview
                if($r->exists('preview'))
                {
                    $folder_preview = "image-berita/preview/";
                    if(!is_null($banner))
                    {
                        error_log("preview dapat gambar");
                        $banner->move($folder_preview, "preview.".$ext);
                        $gambar = $folder_preview."preview.".$ext;
                    }
                    else
                        $gambar = $folder_preview."no-img.jpg";

                    return view("admin.dashboard.preview")->with([
                        "judul" => $judul,
                        "summary" => $summary,
                        "wilayah" => $wilayah,
                        "tipe" => $tipe,
                        "tanggal" => $tanggal,
                        "banner" => $gambar,
                        "isi" => $isi
                    ]);
                }

                // buat slug
                $slug = $tanggal ."_".Str::slug($judul);
                if(Berita::where("slug",$slug)->exists())
                    for($i = 0; $i != "stop"; $i++)
                    {
                        $tes_slug = $tanggal ."_".Str::slug($judul)."_".$i;
                        if(!Berita::where("slug",$tes_slug)->exists())
                        {
                            $slug = $tes_slug;
                            $i = "stop";
                        }
                    }

                    
                // save ke db
                $ulid = Berita::create([
                    "judul" => $judul,
                    "slug" => $slug,
                    "penulis" => "Admin",
                    "isi" => $isi,
                    "summary" => $summary,
                    "id_wilayah" => $wilayah,
                    "id_tipe" => $tipe,
                    "tanggal" => $tanggal,
                ])->id_berita;

                

                // untuk banner
                if(!is_null($banner))
                {
                    $tipe_berita = TipeBerita::find($tipe)->nama_tipe;
                    $folder_banner = "image-berita/banner/".$tipe_berita."/".$tanggal."/";
                    $nama_banner = substr($ulid,0,3);
                    if($banner->isValid())
                    {
                        $banner->move($folder_banner, $nama_banner.".".$ext);
                        $gambar = $folder_banner.$nama_banner.".".$ext;
                    }

                    $b = Berita::find($ulid);
                    $b->banner = $gambar;
                    $b->save();
                }
                

                return redirect()->back()->with("alert.success","Berita berhasil disimpan!");
                

            // return dd($r);

        }
        catch(Throwable $e)
        {
            error_log("Berita Controller Error : Gagal menyimpan berita ke database at store() ".$e);
            Log::error("Berita Controller Error : Gagal menyimpan berita ke database at store() ".$e);
            return redirect()->back()->withInput()->with("alert.danger","Kesalahan pada saat menyimpan berita ke database.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        try{

            $berita = Berita::where('slug',$slug)->first();

            if(is_null($berita))
                throw new Exception("Artikel tidak ditemukan!");
            
            return view('dashboard.berita.isi')->with([
                "judul" => $berita->judul,
                "summary" => $berita->summary,
                "wilayah" => $berita->wilayah,
                "penulis" => $berita->penulis,
                "tipe" => $berita->tipe,
                "tanggal" => $berita->tanggal,
                "banner" => $berita->banner,
                "isi" => $berita->isi
            ]);

        }
        catch(Throwable $e)
        {
            error_log("Berita Controller Error : Gagal mengambil berita dengan slug : ".$slug." at show() ".$e);
            Log::error("Berita Controller Error : Gagal mengambil berita dengan slug : ".$slug." at show() ".$e);
            session()->flash("alert.danger","Kesalahan pada mengambil berita.");
            
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
        try{

        }
        catch(Throwable $e)
        {
            error_log("Berita Controller Error : Gagal menyimpan update pada berita at update() ".$e);
            Log::error("Berita Controller Error : Gagal menyimpan update pada berita at update() ".$e);
            return redirect()->back()->withInput()->with("alert.danger","Kesalahan pada saat menyimpan update pada berita.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $r, string $id)
    {
        try{

            $berita = Berita::find($id);
            $berita->delete();

            if(!is_null($r->page))
            {
                $paginator = Berita::paginate(columns: ['id_berita']);
                $redirect = ($r->page <= $paginator->lastPage()) ? $r->page : $paginator->lastPage();
                return redirect()->route($r->route(),['page'=>$redirect]);
            }
            
            return redirect()->back();

        }
        catch(Throwable $e)
        {
            error_log("Berita Controller Error : Gagal menghapus berita dengan id : ".$id." at destroy() ".$e);
            Log::error("Berita Controller Error : Gagal menghapus berita dengan id : ".$id." at destroy() ".$e);
            session()->flash("alert.danger","Kesalahan pada menghapus berita.");
        }
    }
}
