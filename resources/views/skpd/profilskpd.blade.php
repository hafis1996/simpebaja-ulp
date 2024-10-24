@extends('layouts.skpd.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Profil Pengguna
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
                        <th>NIP PENGGUNA</th>
                        <th>NAMA PENGGUNA</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>NOMOR HP</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profilskpd as $p)
                    <tr>
                        {{-- <td>{{ $p->user_nip }}</td>
                        <td>{{ $p->user_usernm }}</td>
                        <td>{{ $p->user_email }}</td>
                        <td>{{ $p->user_alamat }}</td>
                        <td>{{ $p->user_hp }}</td> --}}
                        <td>{{ $p->ulp_nip }}</td>
                        <td>{{ $p->ulp_username }}</td>
                        <td>{{ $p->ulp_email }}</td>
                        <td>{{ $p->ulp_alamat }}</td>
                        <td>{{ $p->ulp_hp }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="edit btn btn-primary btn-sm" user_id="{{ $p->ulp_id }}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
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
   {{-- Modal Edit Profil --}}
   <div class="modal modal-blur fade" id="modal-editprofilskpd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Profil SKPD</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="loadeditFormProfilSkpd">
        </div>
      </div>
    </div>
  </div>
@endsection

@push('myscript')
<script>
    // script untuk edit
    $(function(){
        $(".edit").click(function(){
                var user_id = $(this).attr('user_id');
                $.ajax({
                    type:'POST',
                    url:'/profilskpd/edit',
                    cache:false,
                    data: {
                        _token:"{{ csrf_token() }}",
                        user_id : user_id
                    },
                    success:function(respond){
                        $("#loadeditFormProfilSkpd").html(respond);
                    }
                });
                $("#modal-editprofilskpd").modal("show");
            });

            // Script untuk update dan validasi
            $("#frmProfilSkpd").submit(function(){
                var user_id = $("#user_id").val();
                var user_nip = $("#user_nip").val();
                var user_usernm = $("#user_usernm").val();
                var user_email = $("#user_email").val();
                var user_alamat = $("#user_alamat").val();
                var user_hp = $("#user_hp").val();
                var user_id = $("frmProfilSkpd").find("#user_id").val();
                if (user_id=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'User Id Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#user_id").focus();
                    });
                return false;
                }else if(user_nip=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'NIP Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#user_nip").focus();
                    });
                return false;
                }else if(user_usernm=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Nama Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#user_usernm").focus();
                    });
                return false;
                }else if(user_email=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Email Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#user_email").focus();
                    });
                return false;
                }else if(user_alamat=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Alamat Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#user_alamat").focus();
                    });
                return false;
                }else if(user_hp=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Nomor HP Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#user_hp").focus();
                    });
                return false;
                }
            });
    });
</script>
    
@endpush