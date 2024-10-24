@extends('layouts.skpd.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Sumber Dana
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
            <div class="col-12">
                <a href="#" class="btn btn-primary" id="btnTambahDana">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 5l0 14" />
                        <path d="M5 12l14 0" />
                    </svg>
                    Tambah Dana
                </a>
            </div>
            <div class="table-responsive mt-2">
                <table class="table table-vcenter card-table">
                <thead>
                    <tr>
                        <th>NOMOR</th>
                        <th>SUMBER DANA</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datasumberdana as $p)
                    <tr>
                        <td>{{ $loop->iteration + $datasumberdana->firstItem()-1 }}</td>
                        <td>{{ $p->dana_nama }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="edit btn btn-primary btn-sm" dana_id="{{ $p->dana_id }}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                    <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                    <path d="M16 5l3 3" />
                                </svg>
                                Edit
                                </a>
                            <form action="/sumberdanaskpd/{{ $p->dana_id }}/delete" method="POST" style="margin-left: 5px">
                                @csrf
                                <a class="btn btn-danger btn-sm delete-confirm">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M4 7l16 0" /><path d="M10 11l0 6" />
                                        <path d="M14 11l0 6" />
                                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                    </svg>
                                    Hapus
                                </a>
                            </form>
                        </div> 
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
        {{ $datasumberdana->links('vendor.pagination.bootstrap-5') }}
    </div>
    
    </div>
  </div>

  {{-- Modal Input Sumber Dana --}}
<div class="modal modal-blur fade" id="modal-inputdana" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Sumber Dana</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/sumberdana/store" method="POST" id="frmInputDana">
            @csrf            
            {{-- Nama Admin --}}
            <div class="row">
                <div class="col-12">
                    <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                        <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-moneybag"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9.5 3h5a1.5 1.5 0 0 1 1.5 1.5a3.5 3.5 0 0 1 -3.5 3.5h-1a3.5 3.5 0 0 1 -3.5 -3.5a1.5 1.5 0 0 1 1.5 -1.5z" /><path d="M4 17v-1a8 8 0 1 1 16 0v1a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /></svg>
                      </span>
                    <input type="text" value="" id="dana_nama" name="dana_nama" class="form-control" placeholder="Sumber Dana SKPD">
                </div>
                </div>
            </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary w-100" data-bs-dismiss="modal">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M14 4l0 4l-6 0l0 -4" />
            </svg>
            Simpan
        </button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>

   {{-- Modal Edit Sumber Dana SKPD --}}
   <div class="modal modal-blur fade" id="modal-editsumberdanaskpd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Sumber Dana SKPD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="loadeditFormSumberDanaSkpd">
        </div>
      </div>
    </div>
  </div>
@endsection

@push('myscript')
<script>
    $(function(){
         // Tambah Admin
         $("#btnTambahDana").click(function(){
                $("#modal-inputdana").modal("show");
            });

            // script untuk edit
            $(".edit").click(function(){
                    var dana_id = $(this).attr('dana_id');
                    $.ajax({
                        type:'POST',
                        url:'/sumberdanaskpd/edit',
                        cache:false,
                        data: {
                            _token:"{{ csrf_token() }}",
                            dana_id : dana_id
                        },
                        success:function(respond){
                            $("#loadeditFormSumberDanaSkpd").html(respond);
                        }
                    });
                $("#modal-editsumberdanaskpd").modal("show");
            });

            // Script untuk update 
            $("#frmSumberDanaSkpd").submit(function(){
                var dana_id = $("#dana_id").val();
                var dana_nama = $("#dana_nama").val();
                var dana_id = $("frmSumberDanaSkpd").find("#dana_id").val();
                if (dana_id=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Dana Id Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#dana_id").focus();
                    });
                return false;
                }else if(dana_nama=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Dana Nama Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#dana_nama").focus();
                    });
                }
            });

            // Script untuk validasi data
             // Membuat Validasi
             $("#frmInputDana").submit(function(){
                var dana_nama = $("#dana_nama").val();
                if (dana_nama=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Sumber Dana Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#dana_nama").focus();
                    });
                    return false;
                }
            });
             // Hapus Data
             $(".delete-confirm").click(function(e){
                var form = $(this).closest('form');
                e.preventDefault();
                Swal.fire({
                title: "Apakah Anda Yakin Ingin Menghapus Data Ini ?",
                text: "Jika Iya Maka Data Akan Terhapus Permanen Oleh Sistem",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Saya Yakin!"
                }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                    title: "Dihapus!",
                    text: "Data Berhasil Dihapus.",
                    icon: "success"
                    });
                }
                });
            });
    });
</script>
    
@endpush