@extends('layouts.skpd.tabler')
@section('content')
<div class="container">
    <h1>Detail User ULP</h1>
    <table class="table">
        <tr>
            <th>NIP:</th>
            <td>{{ $userUlp->ulp_nip }}</td>
        </tr>
        <tr>
            <th>Nama:</th>
            <td>{{ $userUlp->ulp_nama }}</td>
        </tr>
        <tr>
            <th>Alamat:</th>
            <td>{{ $userUlp->ulp_alamat }}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{ $userUlp->ulp_email }}</td>
        </tr>
        <tr>
            <th>No HP:</th>
            <td>{{ $userUlp->ulp_hp }}</td>
        </tr>
        <tr>
            <th>Username:</th>
            <td>{{ $userUlp->ulp_username }}</td>
        </tr>
        <tr>
            <th>Level:</th>
            <td>{{ $userUlp->level }}</td>
        </tr>
    </table>
    <a href="{{ route('edit', $userUlp->ulp_id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('destroy', $userUlp->ulp_id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
