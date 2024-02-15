@extends('layouts.main')



@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predikat Kinerja</title>
</head>
<body>
    <h1>Predikat Kinerja:</h1>
    <p>Hasil Kerja: {{ $hasil_kerja }}</p>
    <p>Perilaku: {{ $perilaku }}</p>
    <p>Predikat Kinerja: {{ $predikat_kinerja }}</p>
</body>
</html>
@endsection

