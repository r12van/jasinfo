<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class ImageUploadController extends Controller
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
            error_log("Image Upload Controller Error : Gagal melakukan index pada gambar yang tersimpan di database at index() ".$e);
            Log::error("Image Upload Controller Error : Gagal melakukan index pada gambar yang tersimpan di database at index() ".$e);
            session()->flash("alert.danger","Kesalahan pada saat index gambar.");
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
            error_log("Image Upload Controller Error : Gagal menyimpan gambar ke database at store() ".$e);
            Log::error("Image Upload Controller Error : Gagal menyimpan gambar ke database at store() ".$e);
            session()->flash("alert.danger","Kesalahan pada saat menyimpan gambar ke database.");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{

        }
        catch(Throwable $e)
        {
            error_log("Image Upload Controller Error : Gagal mengambil gambar dengan id : ".$id." at show() ".$e);
            Log::error("Image Upload Controller Error : Gagal mengambil gambar dengan id : ".$id." at show() ".$e);
            session()->flash("alert.danger","Kesalahan pada saat mengambil gambar.");
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
            error_log("Image Upload Controller Error : Gagal melakukan update gambar dengan id : ".$id." at update() ".$e);
            Log::error("Image Upload Controller Error : Gagal melakukan update gambar dengan id : ".$id." at update() ".$e);
            session()->flash("alert.danger","Kesalahan pada saat mengupdate gambar.");
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
            error_log("Image Upload Controller Error : Gagal menghapus gambar dengan id : ".$id." at destroy() ".$e);
            Log::error("Image Upload Controller Error : Gagal menghapus gambar dengan id : ".$id." at destroy() ".$e);
            session()->flash("alert.danger","Kesalahan pada saat menghapus gambar.");
        }
    }
}
