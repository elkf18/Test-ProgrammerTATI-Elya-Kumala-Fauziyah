@extends('layouts.main')

@section('container')
<h1>Tambah provinsi </h1>
<form action="{{ route('provinsi.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama"placeholder="ketikan nama">
      </div>    <br>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
