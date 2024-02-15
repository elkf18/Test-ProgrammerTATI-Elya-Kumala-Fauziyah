<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Log Harian</title>
</head>
<body>
    <h1>Tambah Log Harian</h1>
    <form action="{{ route('log-harian.store') }}" method="POST">
        @csrf
        <label for="pegawai_id">Pegawai:</label>
        <select name="pegawai_id" id="pegawai_id">
            @foreach($pegawais as $pegawai)
                <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
            @endforeach
        </select>
        <br>
        <label for="log_text">Log Harian:</label>
        <textarea name="log_text" id="log_text"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
