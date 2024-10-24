<!-- resources/views/evaluasi/form.blade.php -->
@extends('layouts.skpd.tabler')
@section('content')

<form id="evaluasiForm" action="{{ route('evaluasi.store') }}" method="POST">
    @csrf
    <div class="modal-body">
        <div class="mb-3">
            <label for="skpd_nama" class="form-label">SKPD Nama</label>
            <input type="text" class="form-control" id="skpd_nama" name="skpd_nama" value="{{ $skpd_nama }}" readonly>
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Isi Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
        </div>
        <input type="hidden" name="skpd_id" value="{{ auth()->user()->skpd_id }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim Evaluasi</button>
    </div>
</form>

@endsection