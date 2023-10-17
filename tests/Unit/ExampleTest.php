<?php

namespace Tests\Unit;

use App\Models\Berita;
use Tests\TestCase;
use Illuminate\Support\Str;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        // $slug = "2023-03-07" . "_" . Str::slug(implode(' ', array_slice(explode(' ', "tes judul dengan sesuatu yang istimewah dan wah wah wah"), 0, 5))) . "_" . substr("123456789101112131415", -7);
        // print_r($slug);

        $berita = Berita::all();

        foreach ($berita as $b) {
            $slug = $b->tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $b->judul), 0, 5))) . "_" . substr($b->id_berita, -7);
            if (Berita::where("slug", $slug)->exists()) {
                $i = 0;
                $status = false;
                while (!$status) {
                    error_log("status_pengulangan buat slug : " . $i);
                    $tes_slug = $b->tanggal . "_" . Str::slug(implode(' ', array_slice(explode(' ', $b->judul), 0, 5))) . "_" . substr($b->id_berita, -7) . "_" . $i;
                    if (!Berita::where("slug", $tes_slug)->exists()) {
                        $slug = $tes_slug;
                        $status = true;
                    } else
                        $i++;
                }
            }
            $b = Berita::find($b->id_berita);
            $b->slug = $slug;
            $b->save();
        }


        $this->assertTrue(true);
    }
}
