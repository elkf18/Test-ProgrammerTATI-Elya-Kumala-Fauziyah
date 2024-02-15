@extends('layouts.main')

@section('container')
<h1>Daftar Provinsi</h1>
{{-- <a href="{{ route('provinsi.create') }}" class="btn btn-primary">Tambah</a> --}}
    <ul id="provinsi-list"></ul>
    {{-- <td>
        <a href="{{ route('log-harian.edit', $logHarian->id) }}" class="btn btn-warning">Verifikasi</a>
    </td> --}}

    <script>
        async function getProvinsi() {
            const response = await fetch('/api/provinsi');
            const data = await response.json();
            const provinsiList = document.getElementById('provinsi-list');

            data.forEach(provinsi => {
                const listItem = document.createElement('li');
                listItem.textContent = provinsi.nama;
                provinsiList.appendChild(listItem);
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            getProvinsi();
        });
    </script>
@endsection

