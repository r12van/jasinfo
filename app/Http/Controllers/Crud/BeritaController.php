<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\TipeBerita;
use App\Models\Wilayah;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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


        $this->middleware('auth');

        try {

            $query = Berita::query();

            if ($r->ajax()) {
                $query = $query
                    ->join('tabel_wilayah', 'tabel_berita.id_wilayah', '=', 'tabel_wilayah.id_wilayah')
                    ->join('tabel_tipe_berita', 'tabel_berita.id_tipe', '=', 'tabel_tipe_berita.id_tipe');

                if ($r->exists("tabel")) {
                    $mode = $r->input("tabel");

                    if ($mode == "all")
                        $query = $query->all();
                    elseif ($mode == "published")
                        $query = $query->where("publish", true);
                    elseif ($mode == "highlighted")
                        $query = $query->where("highlight", true);

                    return DataTables::eloquent($query)
                        ->addIndexColumn()
                        ->editColumn(
                            "publish",
                            function ($berita) {
                                return view('kolom.publish-tabel-berita')->with("publish", $berita->publish)->with("id", $berita->id_berita);
                            }
                        )
                        ->editColumn(
                            "highlight",
                            function ($berita) {
                                return view('kolom.highlight-tabel-berita')->with("highlight", $berita->highlight)->with("id", $berita->id_berita);
                            }
                        )
                        ->editColumn("banner", function ($berita) {
                            if ($berita->banner)
                                return view("kolom.banner")->with("banner", $berita->banner);
                            return "";
                        })
                        ->editColumn("tindakan", function ($berita) {
                            return view("kolom.tindakan-tabel-berita")->with("id", $berita->id_berita)->with("judul", $berita->judul);
                        })
                        ->toJson();
                }
            }

            // untuk preview
            if ($r->exists('preview')) {
                $berita = $query->where("id_berita", $r->input('preview'))->first();

                return view("admin.dashboard.preview")->with([
                    "judul" => $berita->judul,
                    "summary" => $berita->summary,
                    "wilayah" => $berita->nama_wilayah,
                    "tipe" => $berita->nama_tipe,
                    "tanggal" => $berita->tanggal,
                    "banner" => $berita->banner,
                    "isi" => $berita->isi
                ]);
            }
        } catch (Throwable $e) {
            error_log("Berita Controller Error : Gagal melakukan index berita at index() " . $e);
            Log::error("Berita Controller Error : Gagal melakukan index berita at index() " . $e);
            session()->flash("alert.danger", "Kesalahan pada saat melakukan index berita.");
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
        $this->middleware('auth');
        try {

            // untuk update melalui route store / untuk update masal
            if ($r->exists('update')) {
                if ($r->input("update") == 'table') {
                    $input_highlight = $r->input("highlight");
                    // return dd($input_highlight);

                    // pengecekan highlight ganda
                    if (!is_null($input_highlight)) {
                        $array_cek = [];
                        $list_urutan_ganda = [];

                        // foreach ($input_highlight as $id => $h) {
                        //     $db_h = Berita::find($id)->highlight;
                        //     if ($h != 0)
                        //         $array_cek[$h][] = $id;
                        //     if($db_h != 0)
                        //         $array_cek[$db_h][] = $id;
                        // }
                        foreach (Berita::all() as $b) {
                            $highlight = $b->highlight;

                            if ($highlight != 0) {
                                if (isset($input_highlight[$b->id_berita])) {
                                    if ($input_highlight[$b->id_berita] != 0)
                                        $array_cek[$input_highlight[$b->id_berita]][] = $b->id_berita;
                                } else {
                                    $array_cek[$highlight][] = $b->id_berita;
                                }
                            } else {
                                if (isset($input_highlight[$b->id_berita]))
                                    if ($input_highlight[$b->id_berita] != 0)
                                        $array_cek[$input_highlight[$b->id_berita]][] = $b->id_berita;
                            }
                        }
                        // return dd($array_cek);
                        foreach ($array_cek as $urut => $cek_urutan) {
                            if (count($cek_urutan) > 1)
                                foreach ($cek_urutan as $id) {
                                    $list_urutan_ganda[$urut][] = $id;
                                }
                        }
                        if (count($list_urutan_ganda) > 0) {
                            $text = "<br>";
                            foreach ($list_urutan_ganda as $urut => $item) {
                                $text = $text . "Berita dengan urutan " . $urut . " : <br>";
                                foreach ($item as $id)
                                    $text = $text . "- " . Berita::find($id)->judul . "<br>";
                            }
                            return redirect()->back()->with('alert.warning', 'Terdapat duplikasi pada urutan highlight. Periksa kembali dan pastikan tidak ada duplikasi urutan pada berita highlight.' . $text);
                        }
                    }


                    $list_id = Berita::all()->pluck('id_berita');
                    $input_publish = $r->input("publish");
                    foreach ($list_id as $id) {
                        $berita = Berita::find($id);
                        if (isset($input_highlight[$id]))
                            $berita->highlight = $input_highlight[$id];
                        if (isset($input_publish[$id])) {
                            $berita->publish = ($input_publish[$id] == "true") ? true : false;
                        }

                        $berita->save();
                    }

                    return redirect()->back()->with('alert.success', 'Perubahan berhasil disimpan!');
                }
            }

            // fetch data
            $judul = $r->input("judul");
            $summary = $r->input("summary");
            $isi = $r->input("isi");
            $wilayah = $r->input("wilayah");
            $tipe = $r->input("tipe");
            $tanggal = $r->input("tanggal");
            $banner = $r->banner;
            $ext = (is_null($banner)) ? "jpg" : $banner->getClientOriginalExtension();

            if (is_null($summary))
                $summary = implode(' ', array_slice(explode(' ', strip_tags($isi)), 0, 30));
            // throw new Exception("Test");

            // untuk preview
            if ($r->exists('preview')) {
                $folder_preview = "image-berita/preview/";
                if (!is_null($banner)) {
                    error_log("preview dapat gambar");
                    $banner->move($folder_preview, "preview." . $ext);
                    $gambar = $folder_preview . "preview." . $ext;
                } else
                    $gambar = $folder_preview . "no-img.jpg";

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




            // save ke db
            $ulid = Berita::create([
                "judul" => $judul,
                "slug" => "",
                "penulis" => (Auth::user()) ? Auth::user()->name : "Admin",
                "isi" => $isi,
                "summary" => $summary,
                "id_wilayah" => $wilayah,
                "id_tipe" => $tipe,
                "tanggal" => $tanggal,
            ])->id_berita;

            // buat slug
            $slug = $tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $judul), 0, 5))) . "_" . substr($ulid, -7);
            if (Berita::where("slug", $slug)->exists()) {
                $i = 0;
                $status = false;
                while (!$status) {
                    error_log("status_pengulangan buat slug : " . $i);
                    $tes_slug = $tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $judul), 0, 5))) . "_" . substr($ulid, -7) . "_" . $i;
                    if (!Berita::where("slug", $tes_slug)->exists()) {
                        $slug = $tes_slug;
                        $status = true;
                    } else
                        $i++;
                }
            }
            $b = Berita::find($ulid);
            $b->slug = $slug;
            $b->save();


            // untuk banner
            if (!is_null($banner)) {
                $tipe_berita = TipeBerita::find($tipe)->nama_tipe;
                $nama_wilayah = Wilayah::find($wilayah)->nama_wilayah;
                $folder_banner = "image-berita/banner/" . Str::slug($tipe_berita) . "/" . Str::slug($nama_wilayah) . "/" . $tanggal . "/";
                $nama_banner = substr($ulid, -7);
                if ($banner->isValid()) {
                    $banner->move($folder_banner, $nama_banner . "." . $ext);
                    $gambar = $folder_banner . $nama_banner . "." . $ext;
                }

                $b = Berita::find($ulid);
                $b->banner = $gambar;
                $b->save();
            }


            return redirect()->back()->with("alert.success", "Berita berhasil disimpan!");


            // return dd($r);

        } catch (Throwable $e) {
            error_log("Berita Controller Error : Gagal menyimpan berita ke database at store() " . $e);
            Log::error("Berita Controller Error : Gagal menyimpan berita ke database at store() " . $e);
            return $e;
            // return redirect()->back()->withInput()->with("alert.danger", "Kesalahan pada saat menyimpan berita ke database. $e->error");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        try {


            $berita = Berita::join('tabel_wilayah', 'tabel_berita.id_wilayah', '=', 'tabel_wilayah.id_wilayah')
                ->join('tabel_tipe_berita', 'tabel_berita.id_tipe', '=', 'tabel_tipe_berita.id_tipe')
                ->where('slug', $slug)->first();

            if (is_null($berita))
                return abort(404, "Artikel Tidak Ditemukan");

            if ($berita->id_tipe == '6')
                return view('dashboard.publikasi.pengumuman')->with([
                    "judul" => $berita->judul,
                    "summary" => $berita->summary,
                    "wilayah" => $berita->nama_wilayah,
                    "penulis" => $berita->penulis,
                    "tipe" => $berita->nama_tipe,
                    "tanggal" => $berita->tanggal,
                    "banner" => $berita->banner,
                    "isi" => $berita->isi
                ]);

            return view('dashboard.berita.isi')->with([
                "judul" => $berita->judul,
                "summary" => $berita->summary,
                "wilayah" => $berita->nama_wilayah,
                "penulis" => $berita->penulis,
                "tipe" => $berita->nama_tipe,
                "tanggal" => $berita->tanggal,
                "banner" => $berita->banner,
                "isi" => $berita->isi,
                "id_tipe" => $berita->id_tipe
            ]);
        } catch (Throwable $e) {
            error_log("Berita Controller Error : Gagal mengambil berita dengan slug : " . $slug . " at show() " . $e);
            Log::error("Berita Controller Error : Gagal mengambil berita dengan slug : " . $slug . " at show() " . $e);
            session()->flash("alert.danger", "Kesalahan pada mengambil berita.");
        }
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $this->middleware('auth');
        try {

            $berita = Berita::find($id);

            if (is_null($berita))
                throw new Exception("Artikel tidak ditemukan");

            $wilayah = Wilayah::all();
            $tipe = TipeBerita::all();

            return view('admin.dashboard.editor-berita')->with([
                "list_wilayah" => $wilayah,
                "list_tipe" => $tipe,
                "judul" => $berita->judul,
                "summary" => $berita->summary,
                "id_wilayah" => $berita->id_wilayah,
                "id_tipe" => $berita->id_tipe,
                "tanggal" => $berita->tanggal,
                "isi" => $berita->isi,
                "editMode" => true,
                "id" => $id
            ]);
        } catch (Throwable $e) {
            error_log("Berita Controller Error : Gagal menyimpan update pada berita at update() " . $e);
            Log::error("Berita Controller Error : Gagal menyimpan update pada berita at update() " . $e);
            return abort(404, $e);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        $this->middleware('auth');
        try {
            $berita = Berita::find($id);

            if (is_null($berita)) {
                return abort(403, "Artikel tidak ditemukan!");
            }

            // fetch data
            $judul = $r->input("judul");
            $summary = $r->input("summary");
            $isi = $r->input("isi");
            $wilayah = $r->input("wilayah");
            $tipe = $r->input("tipe");
            $tanggal = $r->input("tanggal");
            $banner = $r->banner;
            $ext = (is_null($banner)) ? "jpg" : $banner->getClientOriginalExtension();


            if (is_null($summary))
                $summary = substr(strip_tags($isi), 0, 30);

            // buat slug
            $slug_lama = $berita->slug;
            $slug = $tanggal . "_" . Str::slug($judul);
            if ($slug_lama != $slug)
                if (Berita::where("slug", $slug)->exists()) {
                    $i = 0;
                    $status = false;
                    while (!$status) {
                        error_log("status_pengulangan buat slug : " . $i);
                        $tes_slug = $tanggal . "_" . Str::slug($judul) . "_" . $i;
                        if (!Berita::where("slug", $tes_slug)->exists()) {
                            $slug = $tes_slug;
                            $status = true;
                        } else
                            $i++;
                    }
                }

            // fetch data
            $judul = $r->input("judul");
            $summary = $r->input("summary");
            $isi = $r->input("isi");
            $wilayah = $r->input("wilayah");
            $tipe = $r->input("tipe");
            $tanggal = $r->input("tanggal");
            $banner = $r->banner;
            $ext = (is_null($banner)) ? "jpg" : $banner->getClientOriginalExtension();
            $tanggal_lama = $berita->tanggal;
            $tipe_lama = $berita->id_tipe;
            $wilayah_lama = $berita->id_wilayah;


            // save ke db
            $berita->judul = $judul;
            $berita->penulis = (Auth::user()) ? Auth::user()->name : "Admin";
            $berita->isi = $isi;
            $berita->summary = $summary;
            $berita->id_wilayah = $wilayah;
            $berita->id_tipe = $tipe;
            $berita->tanggal = $tanggal;

            // buat slug
            $slug = $tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $judul), 0, 5))) . "_" . substr($id, -7);
            if (Berita::where("slug", $slug)->exists()) {
                $i = 0;
                $status = false;
                while (!$status) {
                    error_log("status_pengulangan buat slug : " . $i);
                    $tes_slug = $tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $judul), 0, 5))) . "_" . substr($id, -7) . "_" . $i;
                    if (!Berita::where("slug", $tes_slug)->exists()) {
                        $slug = $tes_slug;
                        $status = true;
                    } else
                        $i++;
                }
            }
            $b = Berita::find($id);
            $b->slug = $slug;

            // untuk banner
            if (!is_null($banner)) {
                $tipe_berita = TipeBerita::find($tipe)->nama_tipe;
                $wilayah_berita = Wilayah::find($wilayah)->nama_wilayah;
                $folder_banner = "image-berita/banner/" . Str::slug($tipe_berita) . "/" . Str::slug($wilayah_berita) . "/" . $tanggal . "/";
                $nama_banner = substr($id, -7);
                if ($banner->isValid()) {
                    $banner->move($folder_banner, $nama_banner . "." . $ext);
                    $gambar = $folder_banner . $nama_banner . "." . $ext;
                }

                // untuk banner
                if (!is_null($banner)) {
                    $tipe_berita = TipeBerita::find($tipe)->nama_tipe;
                    $folder_banner = "image-berita/banner/" . $tipe_berita . "/" . $tanggal . "/";
                    $nama_banner = substr($id, -7);
                    if ($banner->isValid()) {
                        $banner->move($folder_banner, $nama_banner . "." . $ext);
                        $gambar = $folder_banner . $nama_banner . "." . $ext;
                    } else {
                        if ($tanggal != $tanggal_lama || $tipe != $tipe_lama || $wilayah != $wilayah_lama) {
                            $lokasi_lama = $berita->banner;

                            $tipe_berita = TipeBerita::find($tipe)->nama_tipe;
                            $wilayah_berita = Wilayah::find($wilayah)->nama_wilayah;
                            $folder_banner = "image-berita/banner/" . Str::slug($tipe_berita) . "/" . Str::slug($wilayah_berita) . "/" . $tanggal . "/";

                            File::move(public_path($lokasi_lama), public_path($folder_banner . basename($lokasi_lama)));
                        }
                    }

                    $berita->banner = $gambar;
                }

                $berita->save();



                return redirect(route('adminBerita'))->with("alert.success", "Berita berhasil disimpan!");
            }
        } catch (Throwable $e) {
            error_log("Berita Controller Error : Gagal menyimpan update pada berita at update() " . $e);
            Log::error("Berita Controller Error : Gagal menyimpan update pada berita at update() " . $e);
            return redirect()->back()->withInput()->with("alert.danger", "Kesalahan pada saat menyimpan update pada berita.");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $r, string $id)
    {
        $this->middleware('auth');
        try {

            $berita = Berita::find($id);
            $berita->delete();

            if (!is_null($r->page)) {
                $paginator = Berita::paginate(columns: ['id_berita']);
                $redirect = ($r->page <= $paginator->lastPage()) ? $r->page : $paginator->lastPage();
                return redirect()->route($r->route(), ['page' => $redirect])->with("alert.success", "Berita berhasil dihapus!");
            }

            return redirect()->back()->with("alert.success", "Berita berhasil dihapus!");
        } catch (Throwable $e) {
            error_log("Berita Controller Error : Gagal menghapus berita dengan id : " . $id . " at destroy() " . $e);
            Log::error("Berita Controller Error : Gagal menghapus berita dengan id : " . $id . " at destroy() " . $e);
            session()->flash("alert.danger", "Kesalahan pada menghapus berita.");
        }
    }
}
