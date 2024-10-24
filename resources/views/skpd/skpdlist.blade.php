@extends('layouts.skpd.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            FORM SKPD LIST
          </div>
          <h2 class="page-title">
            Ogan Komering Ulu
          </h2>
        </div>
      </div>
    </div>
</div>
<br>
<div class="container">
    {{-- <h1>SKPD List</h1> --}}
    <a href="{{ route('skpd.buatskpdlist') }}" class="btn btn-primary">Create New SKPD</a>
    <br><br>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Inisial</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Pimpinan</th>
                <th>NIP Pimpinan</th>
                <th>Pengajuan</th>
                <th>Verifikasi</th>
                <th>E-Lelang</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skpdlist as $skpd)
                <tr>
                    <td>{{ $skpd->skpd_id }}</td>
                    <td>{{ $skpd->skpd_kode }}</td>
                    <td>{{ $skpd->skpd_nama }}</td>
                    <td>{{ $skpd->skpd_inisial }}</td>
                    <td>{{ $skpd->skpd_alamat }}</td>
                    <td>{{ $skpd->skpd_telp }}</td>
                    <td>{{ $skpd->skpd_pimpinan }}</td>
                    <td>{{ $skpd->skpd_pimpinan_nip }}</td>
                    <td>{{ $skpd->skpd_pengajuan ? 'Yes' : 'No' }}</td>
                    <td>{{ $skpd->skpd_verifikasi ? 'Yes' : 'No' }}</td>
                    <td>{{ $skpd->skpd_e_lelang ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('skpd.showskpdlist', $skpd->skpd_id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('skpd.editskpdlist', $skpd->skpd_id) }}" class="btn btn-warning btn-sm">Edit</a>
                       
                        <form action="{{ route('skpd.destroyskpdlist', $skpd->skpd_id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus SKPD ini?')">Delete</button>
                        </form>
                        
                         <a href="{{ route('skpd.users.index', $skpd->skpd_id) }}" class="btn btn-success btn-sm">Manage Users</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
