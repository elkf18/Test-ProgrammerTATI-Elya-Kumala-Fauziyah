<?php

// app/Helpers/helpers.php

if (!function_exists('predikat_kinerja')) {
    function predikat_kinerja($hasil_kerja, $perilaku)
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
