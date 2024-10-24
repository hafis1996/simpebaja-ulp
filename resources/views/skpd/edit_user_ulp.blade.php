@extends('layouts.skpd.tabler')
@section('content')
<div class="container">
    <h1>Edit User ULP</h1>
    <form action="{{ route('update', $userUlp->ulp_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="ulp_nip">NIP:</label>
            <input type="text" name="ulp_nip" id="ulp_nip" class="form-control" value="{{ $userUlp->ulp_nip }}">
        </div>
        <div class="form-group">
            <label for="ulp_nama">Nama:</label>
            <input type="text" name="ulp_nama" id="ulp_nama" class="form-control" value="{{ $userUlp->ulp_nama }}">
        </div>
        <div class="form-group">
            <label for="ulp_alamat">Alamat:</label>
            <textarea name="ulp_alamat" id="ulp_alamat" class="form-control">{{ $userUlp->ulp_alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="ulp_email">Email:</label>
            <input type="email" name="ulp_email" id="ulp_email" class="form-control" value="{{ $userUlp->ulp_email }}">
        </div>
        <div class="form-group">
            <label for="ulp_hp">No HP:</label>
            <input type="text" name="ulp_hp" id="ulp_hp" class="form-control" value="{{ $userUlp->ulp_hp }}">
        </div>
        <div class="form-group">
            <label for="ulp_username">Username:</label>
            <input type="text" name="ulp_username" id="ulp_username" class="form-control" value="{{ $userUlp->ulp_username }}">
        </div>
        <div class="form-group">
            <label for="ulp_password">Password (leave blank to keep current):</label>
            <input type="password" name="ulp_password" id="ulp_password" class="form-control">
        </div>
        <div class="form-group">
            <label for="ulp_password_confirmation">Confirm Password:</label>
            <input type="password" name="ulp_password_confirmation" id="ulp_password_confirmation" class="form-control">
        </div>
        <div class="form-group">
            <label for="level">Level:</label>
            <select name="level" id="level" required class="form-control">
                <option value="superadmin" {{ $userUlp->level == 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                <option value="admin" {{ $userUlp->level == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update User ULP</button>
        </div>
    </form>
</div>
@endsection
