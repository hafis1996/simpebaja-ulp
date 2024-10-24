<!-- resources/views/pokja/show.blade.php -->
@extends('layouts.skpd.tabler')
@section('content')
    <div class="container">
        <h1>Detail Pokja</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $pokja->nama }}</h5>
                <p class="card-text"><strong>NIP:</strong> {{ $pokja->nip }}</p>
                <p class="card-text"><strong>Jabatan:</strong> {{ $pokja->jabatan }}</p>
                <p class="card-text"><strong>No SK:</strong> {{ $pokja->no_sk }}</p>
                <p class="card-text"><strong>Handphone:</strong> {{ $pokja->handphone }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $pokja->email }}</p>
                <a href="{{ route('skpd.pokja') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
@endsection