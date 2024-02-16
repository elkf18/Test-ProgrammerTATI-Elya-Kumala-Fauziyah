<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Provinsi</title>
</head>
<body>
    <h1>Detail Provinsi</h1>
    
    @if(!empty($provinsi))
        <p>ID Provinsi: {{ $provinsi['id'] }}</p>
        <p>Nama Provinsi: {{ $provinsi['nama'] }}</p>
    @else
        <p>Data provinsi tidak ditemukan.</p>
    @endif
    
    <a href="{{ route('provinsi.index') }}">Kembali ke Daftar Provinsi</a>
</body>
</html>
