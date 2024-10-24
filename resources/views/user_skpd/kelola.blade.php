@extends('layouts.skpd.tabler')
@section('content')
<div class="container">
    <h1>Kelola Pengguna untuk {{ $skpd->skpd_nama }}</h1>
    <a href="{{ route('user_skpd.create', $skpd->skpd_id) }}" class="btn btn-success">Tambah Pengguna Baru</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->user_nama }}</td>
                    <td>{{ $user->user_email }}</td>
                    <td>{{ $user->user_hp }}</td>
                    <td>{{ $user->user_status }}</td>
                    <td>
                        <a href="{{ route('user_skpd.edit', $user->user_id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('user_skpd.destroy', $user->user_id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
