<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Provinsi</title>
</head>
<body>
    <h1>Daftar Provinsi</h1>

    @if(!empty($provinsis))
        <ul>
            @foreach($provinsis as $provinsi)
                <li><a href="{{ route('provinsi.show', $provinsi['id']) }}">{{ $provinsi['nama'] }}</a></li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada data provinsi.</p>
    @endif
    
    <a href="{{ route('provinsi.create') }}">Tambah Provinsi</a>
</body>
</html>
