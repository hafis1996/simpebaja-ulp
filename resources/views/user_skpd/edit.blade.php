@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Edit Pengguna untuk {{ $skpd->skpd_nama }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('skpd.users.update', [$skpd->skpd_id, $user->user_id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="user_nip">NIP</label>
            <input type="text" name="user_nip" class="form-control" value="{{ old('user_nip', $user->user_nip) }}" required>
        </div>

        <div class="form-group">
            <label for="user_usernm">Username</label>
            <input type="text" name="user_usernm" class="form-control" value="{{ old('user_usernm', $user->user_usernm) }}" required>
        </div>

        <div class="form-group">
            <label for="user_email">Email</label>
            <input type="email" name="user_email" class="form-control" value="{{ old('user_email', $user->user_email) }}" required>
        </div>

        <div class="form-group">
            <label for="user_nama">Nama</label>
            <input type="text" name="user_nama" class="form-control" value="{{ old('user_nama', $user->user_nama) }}" required>
        </div>

        <div class="form-group">
            <label for="user_alamat">Alamat</label>
            <textarea name="user_alamat" class="form-control" required>{{ old('user_alamat', $user->user_alamat) }}</textarea>
        </div>

        <div class="form-group">
            <label for="user_hp">HP</label>
            <input type="text" name="user_hp" class="form-control" value="{{ old('user_hp', $user->user_hp) }}" required>
        </div>

        <div class="form-group">
            <label for="password">Password (Biarkan kosong jika tidak ingin mengubah)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

       <div class="form-group">
    <label for="user_status">Status</label>
    <select name="user_status" class="form-control" required>
        <option value="0" {{ old('user_status', $user->user_status) == '0' ? 'selected' : '' }}>Inactive</option>
        <option value="1" {{ old('user_status', $user->user_status) == '1' ? 'selected' : '' }}>Active</option>
    </select>
</div>

<div class="form-group">
    <label for="user_rule">Role</label>
    <select name="user_rule" class="form-control" required>
        {{-- <option value="0" {{ old('user_rule', $user->user_rule) == '0' ? 'selected' : '' }}>Role 0</option> --}}
        <option value="1" {{ old('user_rule', $user->user_rule) == '1' ? 'selected' : '' }}>Admin </option>
        {{-- <option value="2" {{ old('user_rule', $user->user_rule) == '2' ? 'selected' : '' }}>Role 2</option>
        <option value="3" {{ old('user_rule', $user->user_rule) == '3' ? 'selected' : '' }}>Role 3</option> --}}
    </select>
</div>


        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('skpd.users.index', $skpd->skpd_id) }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
