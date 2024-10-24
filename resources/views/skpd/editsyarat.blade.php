{{-- @extends('layouts.skpd.tabler')
@section('content')
    
    <div class="container">
    <h1>Edit Dokumen</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('skpd.updatesyarat', $syaratdokumen->syarat_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="jenis_pengadaan">Jenis Pengadaan:</label>
            <select name="jenis_pengadaan" class="form-control" required>
                <option value="">Pilih Jenis Pengadaan</option>
                <option value="pengadaan barang" {{ $syaratdokumen->jenis_pengadaan == 'pengadaan barang' ? 'selected' : '' }}>Pengadaan Barang</option>
                <option value="jasa konsultasi" {{ $syaratdokumen->jenis_pengadaan == 'jasa konsultasi' ? 'selected' : '' }}>Jasa Konsultasi</option>
                <option value="pekerjaan konstruksi" {{ $syaratdokumen->jenis_pengadaan == 'pekerjaan konstruksi' ? 'selected' : '' }}>Pekerjaan Konstruksi</option>
                <option value="jasa lainnnya" {{ $syaratdokumen->jenis_pengadaan == 'jasa lainnnya' ? 'selected' : '' }}>Jasa Lainnnya</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_dokumen">Nama Dokumen:</label>
            <input type="text" name="nama_dokumen" class="form-control" value="{{ $syaratdokumen->nama_dokumen }}" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" class="form-control">{{ $syaratdokumen->keterangan }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection --}}


@extends('layouts.skpd.tabler')
@section('content')
<div class="container">
    <h1>Edit Syarat Dokumen</h1>
    <form action="{{ route('skpd.updatesyarat', $syaratdokumen->syarat_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="jenis_pengadaan">Jenis Pengadaan:</label>
            <select name="jenis_pengadaan" class="form-control" required>
                <option value="pengadaan_barang" {{ $syaratdokumen->jenis_pengadaan == 'pengadaan_barang' ? 'selected' : '' }}>Pengadaan Barang</option>
                <option value="jasa_konsultasi" {{ $syaratdokumen->jenis_pengadaan == 'jasa_konsultasi' ? 'selected' : '' }}>Jasa Konsultasi</option>
                <option value="pekerjaan_konstruksi" {{ $syaratdokumen->jenis_pengadaan == 'pekerjaan_konstruksi' ? 'selected' : '' }}>Pekerjaan Konstruksi</option>
                <option value="jasa_lainnya" {{ $syaratdokumen->jenis_pengadaan == 'jasa_lainnya' ? 'selected' : '' }}>Jasa Lainnya</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nama_dokumen">Nama Dokumen:</label>
            <input type="text" class="form-control" name="nama_dokumen" value="{{ $syaratdokumen->nama_dokumen }}" required>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea class="form-control" name="keterangan">{{ $syaratdokumen->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

