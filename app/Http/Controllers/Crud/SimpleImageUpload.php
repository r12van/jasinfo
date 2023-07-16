<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Throwable;

class SimpleImageUpload extends Controller
{
    protected $base_dir = "image-berita/editor/upload/";
    protected $filepond_temp = "tmp/";
    protected $galeri_dir = "image-galeri/galeri/";

    public function uploadCKEditor(Request $r)
    {
        $this->middleware('auth');
        try{

            $file = $r->file('upload');

            if(is_null($file))
                throw new Exception("Tidak ada gambar yang diterima sistem.");

            $tanggal = now()->toDateString();
            $nama = $file->getClientOriginalName();

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

    public function filepondProcess(Request $r)
    {
        $this->middleware('auth');
        try{
                if($r->hasFile('gambar'))
                {
                    $file = $r->file('gambar');
                    $user = Auth::user();
                    // error_log("nama file : ".$file->getClientOriginalName());
                    $file->move($this->dirTempGaleri($user),$file->getClientOriginalName());
                    return $user->id;
                }
               return 'gagal';

        }
        catch(Throwable $e)
        {
            error_log("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            Log::error("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            return 'error';
        }
    }

    public function filepondRevert(Request $r)
    {
        $this->middleware('auth');
        try{
                return dd($r);
                // return response()->noContent()

        }
        catch(Throwable $e)
        {
            error_log("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            Log::error("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            return 'error';
        }
    }

    public function filepondLoad(Request $r)
    {
        $this->middleware('auth');
        try{
                return dd($r);
                // return response()->noContent()

        }
        catch(Throwable $e)
        {
            error_log("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            Log::error("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            return 'error';
        }
    }

    public function filepondRestore(Request $r)
    {
        $this->middleware('auth');
        try{
                return dd($r);
                // return response()->noContent()

        }
        catch(Throwable $e)
        {
            error_log("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            Log::error("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            return 'error';
        }
    }

    public function filepondRemove(Request $r)
    {
        $this->middleware('auth');
        try{
                
                return response()->noContent();

        }
        catch(Throwable $e)
        {
            error_log("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            Log::error("Simple Image Upload Error : kesalahan saat upload file gambar melalui plugin FilePond at uploadGaleri() ".$e);
            return 'error';
        }
    }

    public function dirTempGaleri(User $user)
    {
        return $this->filepond_temp.$user->id;
    }

    public function dirGaleri(string|int $tipe_galeri, string $tanggal)
    {
        
    }
}
