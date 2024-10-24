@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Detail Pengguna untuk {{ $skpd->skpd_nama }}</h1>

    <div class="card">
        <div class="card-header">
            {{ $user->user_nama }}
        </div>
        <div class="card-body">
            <p><strong>NIP:</strong> {{ $user->user_nip }}</p>
            <p><strong>Username:</strong> {{ $user->user_usernm }}</p>
            <p><strong>Email:</strong> {{ $user->user_email }}</p>
            <p><strong>Alamat:</strong> {{ $user->user_alamat }}</p>
            <p><strong>HP:</strong> {{ $user->user_hp }}</p>
            <p><strong>Status:</strong> {{ $user->user_status }}</p>
            <p><strong>Role:</strong> {{ $user->user_rule }}</p>
        </div>
    </div>

    <a href="{{ route('skpd.users.index', $skpd->skpd_id) }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
