{{-- @extends('layouts.skpd.tabler')
@section('content')
    <div class="container">
        <h1>Add New Pokja</h1>
        <form action="{{ route('skpd.storePokja') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nip">NIP:</label>
                <input type="text" class="form-control" name="nip" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" name="jabatan" required>
            </div>
            <div class="form-group">
                <label for="no_sk">No SK:</label>
                <input type="text" class="form-control" name="no_sk" required>
            </div>
            <div class="form-group">
                <label for="handphone">Handphone:</label>
                <input type="text" class="form-control" name="handphone" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>

@endsection --}}

@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Tambah Pokja Baru</h1>
    <form action="{{ route('skpd.storePokja') }}" method="POST">
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
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
