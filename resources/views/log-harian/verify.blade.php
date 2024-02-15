@extends('layouts.main')



@section('container')

    <h1>Verifikasi Log Harian</h1>
    <p>Nama Pegawai: {{ $logHarian->pegawai->nama }}</p>
    <p>Log Harian: {{ $logHarian->log_text }}</p>
    <form action="{{ route('log-harian.approve', $logHarian->id) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-success">Setujui</button>
    </form>
    <form action="{{ route('log-harian.reject', $logHarian->id) }} " method="POST">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-danger">Tolak</button>
    </form>
@endsection
