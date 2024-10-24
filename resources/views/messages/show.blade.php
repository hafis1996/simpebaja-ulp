@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Detail Pesan</h1>

    <div class="card">
        <div class="card-header">
            <h3>Kepada: {{ $message->toUserSkpd->user_nama }}</h3>
            <p>Dikirim pada: {{ $message->created_at->format('d-M-Y H:i:s') }}</p>
        </div>
        <div class="card-body">
            <p><strong>Pesan:</strong></p>
            <p>{{ $message->message }}</p>

            @if($message->dataPengadaan)
                <p><strong>Data Paket Pekerjaan:</strong> {{ $message->dataPengadaan->data_paket_pekerjaan }}</p>
            @else
                <p>Data Paket Pekerjaan tidak tersedia</p>
            @endif
        </div>
    </div>

    <a href="{{ route('messages.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Pesan</a>
</div>
@endsection
