@extends('layouts.main')



@section('container')
<h1>Tambah Log Harian</h1>
    <form action="{{ route('log-harian.store') }}" method="POST">
        @csrf
        <form>
            <div class="mb-3">
              <label for="pegawai_id" class="form-label">Pegawai:</label>
              <select name="pegawai_id" id="pegawai_id" class="form-select form-select-sm" aria-label="Small select example">
                @foreach($pegawais as $pegawai)
                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                @endforeach
            </select>
            <br>
              
            </div>
            <div class="mb-3">
                <label for="log_text" class="form-label">Log Harian:</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="ketikan log harian" name="log_text" id="log_text" style="height: 200px "></textarea>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </form>
@endsection
