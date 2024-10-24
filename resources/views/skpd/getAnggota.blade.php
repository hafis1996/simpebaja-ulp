@extends('layouts.skpd.tabler')
@section('content')
<div class="container">
    <h1>Anggota List for {{ $pokja->nama }}</h1>
    <a href="{{ route('skpd.createAnggota', $pokja->id_pokja) }}" class="btn btn-primary">Add New Anggota</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No SK</th>
                <th>Handphone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokja->anggota as $a)
                <tr>
                    <td>{{ $a->nip }}</td>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->jabatan }}</td>
                    <td>{{ $a->no_sk }}</td>
                    <td>{{ $a->handphone }}</td>
                    <td>{{ $a->email }}</td>
                    <td>
                        <a href="{{ route('skpd.editAnggota', $a->id_anggota) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('skpd.destroyAnggota', $a->id_anggota) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('skpd.pokja') }}" class="btn btn-secondary">Back to Pokja List</a>
</div>
@endsection
