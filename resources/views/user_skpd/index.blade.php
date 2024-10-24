@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Daftar Pengguna untuk {{ $skpd->skpd_nama }}</h1>
    <a href="{{ route('skpd.users.create', $skpd->skpd_id) }}" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($users->isEmpty())
        <p>Tidak ada pengguna untuk SKPD ini.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>HP</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->user_nip }}</td>
                    <td>{{ $user->user_usernm }}</td>
                    <td>{{ $user->user_email }}</td>
                    <td>{{ $user->user_nama }}</td>
                    <td>{{ $user->user_alamat }}</td>
                    <td>{{ $user->user_hp }}</td>
                    <td>{{ $user->user_status }}</td>
                    <td>{{ $user->user_rule }}</td>
                    <td>
                        <a href="{{ route('skpd.users.show', [$skpd->skpd_id, $user->user_id]) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('skpd.users.edit', [$skpd->skpd_id, $user->user_id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('skpd.users.destroy', [$skpd->skpd_id, $user->user_id]) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">Delete</button>
                        </form>
                        
                    </td>
                  
                </tr>
                
                @endforeach

            </tbody>
        </table>
    @endif
      <!-- Tambahkan tombol "Back" di sini -->
    <a href="{{ route('skpd.skpdlist') }}" class="btn btn-secondary mb-3">Back to SKPD List</a>
</div>
@endsection
