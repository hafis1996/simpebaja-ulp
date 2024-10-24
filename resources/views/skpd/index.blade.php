
@extends('layouts.skpd.tabler')
@section('header')
{{-- CSS DatePicker --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
{{-- Memanggil CSS secara online --}}
<style>
    .datepicker-modal{
        max-height: 430px !important;
        color: 
    }
    .datepicker-date-display{
        background-color: #0f3a7e !important;
    }
</style>
@endsection
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Dashboard SIMPEBAJA
          </div>
          <h2 class="page-title">
            Ogan Komering Ulu
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
    <div class="row row-cards">
        <div class="row mt-4">
            <div class="col-12">
                <h2>Data Permohonan Lelang Kegiatan Pengadaan Barang dan Jasa</h2>
                <div class="col-12">
                <div class="row mt-2">
                    <div class="col-2">
                        <div class="form-group">
                            <input type="date" id="#" name="#" class="form-control datepicker" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <a href="#" class="btn btn-primary" id="btnTambahtks">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg>
                                Tampilkan
                            </a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="table-responsive mt-2">
                    <table class="table table-vcenter card-table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>TAHUN</th>
                            <th>PEKERJAAN</th>
                            <th>LOKASI</th>
                            <th>PAGU</th>
                            <th>HPS</th>
                            <th>PROSES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skpd as $s)
                        <tr>
                            <td>{{ $s->user_id }}</td>
                            <td>2020</td>
                            <td>KONTRAKTOR</td>
                            <td>INDONESIA</td>
                            <td>1000</td>
                            <td>2</td>
                            <td>PROSES LELANG</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection