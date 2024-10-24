@extends('layouts.skpd.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Permohonan Lelang ULP (Disposisi)
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Detail Paket Pekerjaan</h3>
                        <p><strong>SKPD ID:</strong> {{ $dataPengadaan->skpd_id }}</p>
                        <p><strong>Kode Rekening:</strong> {{ $dataPengadaan->data_kode_rekening }}</p>
                        <p><strong>Paket Pekerjaan:</strong> {{ $dataPengadaan->data_paket_pekerjaan }}</p>
                        <p><strong>Pagu Anggaran:</strong> {{ formatRupiah($dataPengadaan->pagu_anggaran) }}</p>
                        <p><strong>HPS:</strong> {{ formatRupiah($dataPengadaan->data_hps) }}</p>
                        <p><strong>Sumber Dana:</strong> {{ $dataPengadaan->dana_nama }}</p>
                        <p><strong>Jenis Kontrak:</strong> {{ $dataPengadaan->kontrak_nama }}</p>
                        <p><strong>Waktu Pelaksanaan:</strong> {{ $dataPengadaan->data_jwaktu_pelaksanaan }}</p>
                        <p><strong>No. Surat:</strong> {{ $dataPengadaan->no_surat }}</p>
                        <p><strong>Tanggal Surat:</strong> {{ $dataPengadaan->tgl_surat }}</p>
                        <p><strong>Tahun:</strong> {{ $dataPengadaan->data_tahun }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
