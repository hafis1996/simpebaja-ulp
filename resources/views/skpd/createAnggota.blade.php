@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Tambah Anggota</h1>
    <form action="{{ route('skpd.storeAnggota', $pokja->id_pokja) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
        </div>
        <div class="mb-3">
            <label for="no_sk" class="form-label">No SK</label>
            <input type="text" class="form-control" id="no_sk" name="no_sk" required>
        </div>
        <div class="mb-3">
            <label for="handphone" class="form-label">Handphone</label>
            <input type="text" class="form-control" id="handphone" name="handphone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="0">Inactive</option>
                <option value="1">Active</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="rule" class="form-label">Rule</label>
            <select class="form-control" id="rule" name="rule" required>
                <option value="0">Rule 0</option>
                <option value="1">Rule 1</option>
                <option value="2">Rule 2</option>
                <option value="3">Rule 3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
