<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Http\Controllers\Crud\SimpleImageUpload;
use App\Models\Berita;
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
        $keyword = "test";
        $test = Berita::where('publish',true)
                            ->where(function($q) use($keyword){
                                $q->where('judul','like','%'.$keyword.'%')
                                    ->orWhere('summary','like','%'.$keyword.'%')
                                    ->orWhere('slug','like','%'.$keyword.'%')
                                    ->orWhere('isi','like','%'.$keyword.'%');
                            })->get();
        
        printf($test);

        $this->assertTrue(true);
    }
}
