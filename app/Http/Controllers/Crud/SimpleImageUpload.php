<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class SimpleImageUpload extends Controller
{
    protected $base_dir = "image-berita/editor/upload/";

    public function upload(Request $r)
    {
        try{

            $file = $r->file('upload');

            if(is_null($file))
                throw new Exception("Tidak ada gambar yang diterima sistem.");

            $tanggal = now()->toDateString();
            $nama = $file->getClientOriginalName().".".$file->getClientOriginalExtension();

            $dir = $this->base_dir."/".$tanggal;

            $file->move($dir,$nama);

            return response()->json(["filename"=>$nama, "uploaded" => 1,"url" => asset($dir."/".$nama)]);

        }
        catch(Throwable $e)
        {
            error_log("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin CKEditor ".$e);
            Log::error("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin CKEditor ".$e);
            return response()->json([
                "error" => ["message" => $e]
            ]);
        }
    }
}
