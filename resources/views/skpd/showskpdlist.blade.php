@extends('layouts.skpd.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            FORM VIEW SKPD LIST
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
        <h1>View SKPD</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $skpd_list->skpd_id }}</td>
            </tr>
            <tr>
                <th>Kode</th>
                <td>{{ $skpd_list->skpd_kode }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $skpd_list->skpd_nama }}</td>
            </tr>
            <tr>
                <th>Inisial</th>
                <td>{{ $skpd_list->skpd_inisial }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $skpd_list->skpd_alamat }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ $skpd_list->skpd_telp }}</td>
            </tr>
            <tr>
                <th>Pimpinan</th>
                <td>{{ $skpd_list->skpd_pimpinan }}</td>
            </tr>
            <tr>
                <th>NIP Pimpinan</th>
                <td>{{ $skpd_list->skpd_pimpinan_nip }}</td>
            </tr>
            <tr>
                <th>Pengajuan</th>
                <td>{{ $skpd_list->skpd_pengajuan ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Verifikasi</th>
                <td>{{ $skpd_list->skpd_verifikasi ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>E-Lelang</th>
                <td>{{ $skpd_list->skpd_e_lelang ? 'Yes' : 'No' }}</td>
            </tr>
        </table>
    </div>
@endsection
