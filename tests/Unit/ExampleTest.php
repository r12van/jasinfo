<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $isi = '<p>Jakarta - Presiden Joko Widodo (Jokowi) mengatakan pertemuannya dengan Surya Paloh merupakan hal yang wajar. Jokowi menyebut memang sering bertemu dengan Ketua Umum Partai NasDem itu.</p>
"Pertemuan dengan Pak Surya Paloh. Ya pertemuan biasa. Kita kan sering ketemu, sering ketemu, ya berbicara wajar, masa mau tahu semuanya," kata Jokowi dalam tayangan video di akun YouTube Sekretariat Presiden, Kamis (20/7/2023).</p>

<p>Baca artikel detiknews, "Bocoran Jokowi soal Isi Pertemuan dengan Surya Paloh: Politik, 2024" selengkapnya https://news.detik.com/pemilu/d-6832778/bocoran-jokowi-soal-isi-pertemuan-dengan-surya-paloh-politik-2024.</p>

<p>Download Apps Detikcom Sekarang https://apps.detik.com/detik/';
        $summary = implode(' ', array_slice(explode(' ',strip_tags($isi)),0, 30));
        print_r($summary);
        $this->assertTrue(true);
    }
}
