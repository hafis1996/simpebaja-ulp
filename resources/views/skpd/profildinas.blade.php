@extends('layouts.skpd.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            Profil Dinas 
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
        <div class="col-sm-12">
            <div class="col-12">
                @if (Session::get('success'))
                    <div class="alert alert-success">                    
                            {{ Session::get('success') }} 
                    </div>
                @endif
                @if (Session::get('error'))
                    <div class="alert alert-warning">
                            {{ Session::get('error') }}
                    </div>
                @endif
            </div>
            <div class="table-responsive mt-2">
                <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>KODE REKENING SKPD</th>
                        <th>NAMA SKPD</th>
                        <th>INISIAL SKPD</th>
                        <th>ALAMAT KANTOR</th>
                        <th>TELP KANTOR</th>
                        <th>KEPALA DINAS</th>
                        <th>NIP KEPALA</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skpdprofildinas as $p)
                    <tr>
                        <td>{{ $p->skpd_kode }}</td>
                        <td>{{ $p->skpd_nama }}</td>
                        <td>{{ $p->skpd_inisial }}</td>
                        <td>{{ $p->skpd_alamat }}</td>
                        <td>{{ $p->skpd_telp }}</td>
                        <td>{{ $p->skpd_pimpinan }}</td>
                        <td>{{ $p->skpd_pimpinan_nip }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="edit btn btn-primary btn-sm" skpd_id="{{ $p->skpd_id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                                Edit Profil
                                </a>
                            </div> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-editprofildinasskpd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Profil Dinas SKPD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="loadeditFormProfilDinasSkpd">
        </div>
      </div>
    </div>
  </div>
@endsection


{{-- Script AJAX --}}
@push('myscript')
<script>
     $(function(){
        // Script Untuk Edit
        $(".edit").click(function(){
                var skpd_id = $(this).attr('skpd_id');
                $.ajax({
                    type:'POST',
                    url:'/profildinasskpd/edit',
                    cache:false,
                    data: {
                        _token:"{{ csrf_token() }}",
                        skpd_id : skpd_id
                    },
                    success:function(respond){
                        $("#loadeditFormProfilDinasSkpd").html(respond);
                    }
                });
                $("#modal-editprofildinasskpd").modal("show");
            });

            // Script Untuk Update
              $("#frmProfilDinasSkpd").submit(function(){
                var skpd_id = $("#skpd_id").val();
                var skpd_kode = $("#skpd_kode").val();
                var skpd_nama = $("#skpd_nama").val();
                var skpd_inisial = $("#skpd_inisial").val();
                var skpd_alamat = $("#skpd_alamat").val();
                var skpd_telp = $("#skpd_telp").val();
                var skpd_pimpinan = $("#skpd_pimpinan").val();
                var skpd_pimpinan_nip = $("#skpd_pimpinan_nip").val();
                var skpd_id = $("frmProfilDinasSkpd").find("#skpd_id").val();
                if (skpd_id=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'SKPD ID Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#skpd_id").focus();
                    });
                return false;
                }else if(skpd_kode=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Kode Rekening Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#skpd_kode").focus();
                    });
                return false;
                }else if(skpd_nama=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Nama SKPD Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#skpd_nama").focus();
                    });
                return false;
                }else if(skpd_inisial=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Nama Inisial SKPD Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#skpd_inisial").focus();
                    });
                return false;
                }else if(skpd_alamat=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Alamat SKPD Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#skpd_alamat").focus();
                    });
                return false;
                }else if(skpd_telp=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Telpon SKPD Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#skpd_telp").focus();
                    });
                return false;
                }else if(skpd_pimpinan=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Pimpinan SKPD Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#skpd_pimpinan").focus();
                    });
                return false;
                }else if(skpd_pimpinan_nip=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'NIP Pimpinan SKPD Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#skpd_pimpinan_nip").focus();
                    });
                return false;
                }
            });
     });
</script>
@endpush