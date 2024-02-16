@extends('layouts.main')



@section('container')
<h1>Log Harian</h1>
<a href="{{ route('log-harian.create') }}" class="btn btn-primary">Tambah Log Harian</a>
<table class="table ">
    <tr class="text-center">
        <th>Nama Pegawai</th>
        <th>Log Harian</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    @foreach($logHarians as $logHarian)
        <tr>
            <td>{{ $logHarian->pegawai->nama }}</td>
            <td>{{ $logHarian->log_text }}</td>
            <td>{{ $logHarian->status }}</td>
            <td>
                <a href="{{ route('log-harian.verify', encrypt($logHarian->id)) }}" class="btn btn-warning">Verifikasi</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection
