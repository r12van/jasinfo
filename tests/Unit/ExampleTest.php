<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Http\Controllers\Crud\SimpleImageUpload;
use App\Models\Galeri;
use App\Models\TipeGaleri;
use App\Models\Wilayah;
use Illuminate\Support\Facades\File;
use Tests\TestCase;
use Illuminate\Support\Str;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $galeri = Galeri::find("01h5twnyykkr49q66y2ecr606g");
        $data = json_decode($galeri->data);
        $data1 = $data[0];
        $path_lama = dirname($data1->file);
        print_r($path_lama);

        $tipe = TipeGaleri::find("3");
        $wilayah = Wilayah::find("4");
        $judul = "test";
        $uploadController = new SimpleImageUpload;
        $file_path = $uploadController->dirGaleri( Str::slug($tipe->nama_tipe), Str::slug($wilayah->nama_wilayah), "2023-07-21" ) . "/" .  Str::slug($judul) . "/". "image" ;
        $path_baru = $file_path;
        print_r($path_baru);
        $this->assertTrue($path_lama == $path_baru);
    }
}
