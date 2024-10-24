@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Edit Pokja</h1>
    <form action="{{ route('skpd.updatePokja', $pokja->id_pokja) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ $pokja->nip }}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pokja->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $pokja->jabatan }}" required>
        </div>
        <div class="mb-3">
            <label for="no_sk" class="form-label">No SK</label>
            <input type="text" class="form-control" id="no_sk" name="no_sk" value="{{ $pokja->no_sk }}" required>
        </div>
        <div class="mb-3">
            <label for="handphone" class="form-label">Handphone</label>
            <input type="text" class="form-control" id="handphone" name="handphone" value="{{ $pokja->handphone }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $pokja->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
