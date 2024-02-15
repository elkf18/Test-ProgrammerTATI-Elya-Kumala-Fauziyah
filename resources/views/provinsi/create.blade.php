<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah </title>
</head>
<body>
    <h1>Tambah </h1>
    <form action="{{ route('provinsi.store') }}" method="POST">
        @csrf
        <label for="provinsi_id">Provinsi:</label>
        <select name="provinsi_id" id="provinsi_id">
            @foreach($provinisi as $prov)
                <option value="{{ $prov->id }}">{{ $prov->nama }}</option>
            @endforeach
        </select>
        <br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
