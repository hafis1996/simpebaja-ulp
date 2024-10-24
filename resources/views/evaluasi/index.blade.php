<!-- resources/views/evaluasi/index.blade.php -->
@extends('layouts.skpd.tabler')
@section('content')

<h1>Evaluasi Dokumen</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Dinas</th>
            <th>Pesan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($evaluasi as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->user->user_nama }}</td>
                <td>{{ $e->pesan }}</td>
                <td>
                    @if ($e->status)
                        Evaluasi Sudah Ditanggapi | {{ $e->tanggapi_at }}
                    @else
                        Belum Ditanggapi
                    @endif
                </td>
                <td>
                    @if (!$e->status)
                        <form action="{{ route('evaluasi.markAsAddressed', $e->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Tanggapi</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection