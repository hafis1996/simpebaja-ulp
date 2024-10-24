@extends('layouts.skpd.tabler')
@section('content')
    
  <div class="container">
    <h1>Detail Dokumen</h1>

    <div class="form-group">
        <strong>Jenis Pengadaan:</strong>
        {{ $syaratdokumen->jenis_pengadaan }}
    </div>

    <div class="form-group">
        <strong>Nama Dokumen:</strong>
        {{ $syaratdokumen->nama_dokumen }}
    </div>

    <div class="form-group">
        <strong>Keterangan:</strong>
        {{ $syaratdokumen->keterangan }}
    </div>

    <a class="btn btn-primary" href="{{ route('skpd.syaratdokumen') }}">Kembali</a>
</div>

@endsection

