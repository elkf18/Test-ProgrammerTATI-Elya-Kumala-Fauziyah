<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KinerjaController extends Controller
{
    public function showPredikatKinerja()
    {
        $hasil_kerja = 'dibawah ekspektasi';
        $perilaku = 'dibawah ekspektasi';

        $predikat_kinerja = $this->predikat_kinerja($hasil_kerja, $perilaku);

        return view('predikat_kinerja', compact('predikat_kinerja', 'hasil_kerja', 'perilaku'));
    }

    private function predikat_kinerja($hasil_kerja, $perilaku)
    {
        $matriks = [
            'dibawah ekspektasi' => [
                'dibawah ekspektasi' => 'Buruk',
                'memenuhi ekspektasi' => 'Buruk',
                'diatas ekspektasi' => 'Cukup',
            ],
            'memenuhi ekspektasi' => [
                'dibawah ekspektasi' => 'Buruk',
                'memenuhi ekspektasi' => 'Baik',
                'diatas ekspektasi' => 'Baik',
            ],
            'diatas ekspektasi' => [
                'dibawah ekspektasi' => 'Cukup',
                'memenuhi ekspektasi' => 'Baik',
                'diatas ekspektasi' => 'Sangat Baik',
            ],
        ];

        return $matriks[$hasil_kerja][$perilaku] ?? 'Tidak valid';
    }
}
