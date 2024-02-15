<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Provinsi;

class ProvinsiSeeder extends Seeder
{
    public function run()
    {
        $response = Http::get('https://wilayah.id/api/provinsi');
        $data = $response->json();

        foreach ($data as $provinsi) {
            Provinsi::create(['nama' => $provinsi['nama']]);
        }
    }
}
