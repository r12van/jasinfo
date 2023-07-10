<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{

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
    public function destroy(string $id)
    {
        try{

        }
        catch(Throwable $e)
        {
            error_log("Berita Controller Error : Gagal menghapus berita dengan id : ".$id." at destroy() ".$e);
            Log::error("Berita Controller Error : Gagal menghapus berita dengan id : ".$id." at destroy() ".$e);
            session()->flash("alert.danger","Kesalahan pada menghapus berita.");
        }
    }
}
