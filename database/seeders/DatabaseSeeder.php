<?php

namespace Database\Seeders;

use App\Models\TipeBerita;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Wilayah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // create data user dummy
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User([
            "name" => 'test',
            "password" => Hash::make('123456'),
            'email' => 'test@example.com'
        ]);

        $user->save();

        $list_wilayah = [
            ["id_wilayah" => 1, "nama_wilayah" => "Jakarta Pusat"],
            ["id_wilayah" => 2, "nama_wilayah" => "Jakarta Utara"],
            ["id_wilayah" => 3, "nama_wilayah" => "Jakarta Barat"],
            ["id_wilayah" => 4, "nama_wilayah" => "Jakarta Selatan"],
            ["id_wilayah" => 5, "nama_wilayah" => "Jakarta Barat"],
            ["id_wilayah" => 6, "nama_wilayah" => "Kepulauan Seribu"],
        ];

        foreach ($list_wilayah as $wilayah) {
            $w = new Wilayah($wilayah);
            $w->save();
        }

        $list_tipe = [
            ["id_tipe" => 1, "nama_tipe" => "Kebakaran"],
            ["id_tipe" => 2, "nama_tipe" => "Penyelamatan"],
            ["id_tipe" => 3, "nama_tipe" => "Sosialisasi"],
            ["id_tipe" => 4, "nama_tipe" => "Pers"],
            ["id_tipe" => 5, "nama_tipe" => "Kegiatan"],
            ["id_tipe" => 6, "nama_tipe" => "Pengumuman"],
        ];

        foreach ($list_tipe as $tipe) {
            $w = new TipeBerita($tipe);
            $w->save();
        }
    }
}
