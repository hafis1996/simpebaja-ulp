@extends('layouts.skpd.tabler')

@section('content')
  @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
<div class="container">
    <h1>Edit Anggota</h1>

    <!-- Display success message if available -->
  

    {{-- <form action="{{ route('skpd.updateAnggota', [$pokja->id_pokja, $anggota->id_anggota]) }}" method="POST"> --}}
        <form action="{{ route('skpd.updateAnggota', $anggota->id_anggota) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" value="{{ $anggota->nip }}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggota->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password (kosongkan jika tidak diubah)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $anggota->jabatan }}" required>
        </div>
        <div class="mb-3">
            <label for="no_sk" class="form-label">No SK</label>
            <input type="text" class="form-control" id="no_sk" name="no_sk" value="{{ $anggota->no_sk }}" required>
        </div>
        <div class="mb-3">
            <label for="handphone" class="form-label">Handphone</label>
            <input type="text" class="form-control" id="handphone" name="handphone" value="{{ $anggota->handphone }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $anggota->email }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="0" {{ $anggota->status == 0 ? 'selected' : '' }}>Inactive</option>
                <option value="1" {{ $anggota->status == 1 ? 'selected' : '' }}>Active</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="rule" class="form-label">Rule</label>
            <select class="form-control" id="rule" name="rule" required>
                <option value="0" {{ $anggota->rule == 0 ? 'selected' : '' }}>Rule 0</option>
                <option value="1" {{ $anggota->rule == 1 ? 'selected' : '' }}>Rule 1</option>
                <option value="2" {{ $anggota->rule == 2 ? 'selected' : '' }}>Rule 2</option>
                <option value="3" {{ $anggota->rule == 3 ? 'selected' : '' }}>Rule 3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
