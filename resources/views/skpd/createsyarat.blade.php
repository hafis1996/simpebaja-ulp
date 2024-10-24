@extends('layouts.skpd.tabler')
@section('content')
    
   <div class="container">
    <h1>Tambah Dokumen</h1>

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

    <form action="{{ route('skpd.storesyarat') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="jenis_pengadaan">Jenis Pengadaan:</label>
            <select name="jenis_pengadaan" class="form-control" required>
                <option value="">Pilih Jenis Pengadaan</option>
                <option value="pengadaan_barang">Pengadaan_Barang</option>
                <option value="jasa_konsultasi">Jasa_Konsultasi</option>
                <option value="pekerjaan_konstruksi">Pekerjaan_Konstruksi</option>
                <option value="jasa_lainnya">jasa_lainnya</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_dokumen">Nama Dokumen:</label>
            <input type="text" name="nama_dokumen" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
