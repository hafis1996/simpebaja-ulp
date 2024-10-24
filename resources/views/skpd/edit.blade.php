<!-- resources/views/skpd/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Pengadaan</h2>
    <form action="{{ route('skpd.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="data_kode_rekening">Kode Rekening:</label>
            <input type="text" class="form-control" id="data_kode_rekening" name="data_kode_rekening" value="{{ $data->data_kode_rekening }}" required>
        </div>
        
        <div class="form-group">
            <label for="data_paket_pekerjaan">Paket Pekerjaan:</label>
            <input type="text" class="form-control" id="data_paket_pekerjaan" name="data_paket_pekerjaan" value="{{ $data->data_paket_pekerjaan }}" required>
        </div>

        <div class="form-group">
            <label for="pagu_anggaran">Pagu Anggaran:</label>
            <input type="text" class="form-control" id="pagu_anggaran" name="pagu_anggaran" value="{{ $data->pagu_anggaran }}" required>
        </div>

        <div class="form-group">
            <label for="data_hps">HPS:</label>
            <input type="text" class="form-control" id="data_hps" name="data_hps" value="{{ $data->data_hps }}" required>
        </div>

        <div class="form-group">
            <label for="data_jwaktu_pelaksanaan">Waktu Pelaksanaan:</label>
            <input type="text" class="form-control" id="data_jwaktu_pelaksanaan" name="data_jwaktu_pelaksanaan" value="{{ $data->data_jwaktu_pelaksanaan }}" required>
        </div>

        <div class="form-group">
            <label for="no_surat">No. Surat:</label>
            <input type="text" class="form-control" id="no_surat" name="no_surat" value="{{ $data->no_surat }}" required>
        </div>

        <div class="form-group">
            <label for="tgl_surat">Tanggal Surat:</label>
            <input type="date" class="form-control" id="tgl_surat" name="tgl_surat" value="{{ $data->tgl_surat }}" required>
        </div>

        <div class="form-group">
            <label for="jns_tahun">Jenis Tahun:</label>
            <input type="text" class="form-control" id="jns_tahun" name="jns_tahun" value="{{ $data->jns_tahun }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
