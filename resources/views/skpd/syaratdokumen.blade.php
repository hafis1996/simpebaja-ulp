@extends('layouts.skpd.tabler')
@section('content')
    
    <div class="container">
    <h1>Daftar Syarat Dokumen</h1>
    <a href="{{ route('skpd.createsyarat') }}" class="btn btn-primary">Tambah Dokumen</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-2">
        <tr>
            <th>ID</th>
            <th>Jenis Pengadaan</th>
            <th>Nama Dokumen</th>
            <th>Keterangan</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($syaratdokumen as $syarat)
            <tr>
                <td>{{ $syarat->syarat_id }}</td>
                <td>{{ $syarat->jenis_pengadaan }}</td>
                <td>{{ $syarat->nama_dokumen }}</td>
                <td>{{ $syarat->keterangan }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('skpd.showsyarat', $syarat->syarat_id) }}">Lihat</a>
                    <a class="btn btn-primary" href="{{ route('skpd.editsyarat', $syarat->syarat_id) }}">Edit</a>
                    <form action="{{ route('skpd.destroysyarat', $syarat->syarat_id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@endsection
