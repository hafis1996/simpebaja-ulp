 </div>
            </div>
    </div>
  </div>
  {{-- Modal Input --}}
<div class="modal modal-blur fade" id="modal-inputpermohonan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">FORM PERMOHONAN LELANG</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/permohonanlelang/buat" method="POST" id="frmPermohonan">
          @csrf
          {{-- Nomor Surat --}} 
          <div class="row">
              <div class="col-12">
                <span><b>No. Surat Permohonan</b></span>
                  <div class="input-icon mb-3">
                  <span class="input-icon-addon">
                      <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
                    </span>
                  <input type="text" value="" id="no_surat" name="no_surat" class="form-control" placeholder="Nomor Surat Permohonan Lelang">
              </div>
              </div>
          </div>
          {{-- Tanggal Surat --}}
          <div class="row">
            <div class="col-12">
              <span><b>Tgl Surat</b></span>
                <div class="input-icon mb-3">
                <span class="input-icon-addon">
                    <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M8 15h2v2h-2z" /></svg>
                  </span>
                <input type="date" value="" id="tgl_surat" name="tgl_surat" class="form-control" placeholder="Tanggal Surat">
            </div>
            </div>
        </div>
         {{-- Jenis Pekerjaan --}}
         <div class="row mb-3">
          <div class="col-12">
            <span><b>Jenis Pekerjaan</b></span>
                <div class="form-group">
                  <select name="jenis_id" id="jenis_id" class="form-select">
                      <option value="">Pilih Jenis Pekerjaan</option>
                      @foreach($jenispengadaan as $d)
                        <option value="{{ $d->jenis_id }}">{{ $d->nama_pengadaan }}</option>
                      @endforeach 
                  </select>
              </div>
          </div>
      </div>
       {{-- Jenis Kontrak --}}
       <div class="row mb-3">
        <div class="col-12">
          <span><b>Jenis Kontrak</b></span>
              <div class="form-group">
                <select class="form-control" name="jenis_kontrak" id="jenis_kontrak">
                  <option selected>---Pilih Jenis Kontrak---</option>
                </select>
            </div>
        </div>
    </div>
    {{-- Sumber Dana --}}
    <div class="row mb-3">
      <div class="col-12">
        <span><b>Sumber Dana</b></span>
            <div class="form-group">
              <select name="data_sumber_dana" id="data_sumber_dana" class="form-select">
                <option value="">Pilih Sumber Dana</option>
                  @foreach($sumberdana as $d)
                    <option value="{{ $d->dana_id }}">{{ $d->dana_nama }}</option>
                  @endforeach 
            </select>
          </div>
      </div>
  </div>
  {{-- Tahun Anggaran --}}
  <div class="row mb-3">
    <div class="col-12">
      <span><b>Tahun Anggaran</b></span>
          <div class="form-group">
            <select name="data_tahun" id="data_tahun" class="form-select">
                <option value="">Pilih Tahun</option>
                <?php
									for($i=date('Y');$i<=(date('Y')+10);$i++){
										echo '<option value="'.$i.'">'.$i.'</option>';
									}
									?>
            </select>
        </div>
    </div>
</div>
 {{-- Nama Kegiatan --}}
 <div class="row">
  <div class="col-12">
    <span><b>Nama Kegiatan / Paket Lelang</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="text" value="" id="data_paket_pekerjaan" name="data_paket_pekerjaan" class="form-control" placeholder="Silahkan Entri Nama Kegiatan">
  </div>
  </div>
</div>
{{-- Sub Kegiatan --}}
<div class="row">
  <div class="col-12">
    <span><b>Sub Kegiatan</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="text" value="" id="sub_kegiatan" name="sub_kegiatan" class="form-control" placeholder="Sub Kegiatan">
  </div>
  </div>
</div>
{{-- Tahun Anggaran - Belum Masuk Database Relasi Dengan Table Monitoring--}}
<div class="row">
  <div class="col-12">
    <span><b>Tahun Anggaran</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="text" value="" id="tahun_anggaran" name="tahun_anggaran" class="form-control" placeholder="Tahun Anggaran">
  </div>
  </div>
</div>
{{-- Pagu & HPS --}}
<div class="row">
  <div class="col-6">
    <span><b>Pagu</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="text" value="" id="pagu_anggaran" name="pagu_anggaran" class="form-control rupiah" placeholder="Pagu Anggaran">
  </div>
  </div>
  <div class="col-6">
    <span><b>HPS</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="text" value="" id="data_hps" name="data_hps" class="form-control rupiah" placeholder="HPS Anggaran">
  </div>
  </div>
</div>
{{-- Kode Rekening Kegiatan --}}
<div class="row">
  <div class="col-12">
    <span><b>Kode Rekening Kegiatan</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="text" value="" id="data_kode_rekening" name="data_kode_rekening" class="form-control" placeholder="Kode Rekening Kegiatan">
  </div>
  </div>
</div>
{{-- Lokasi Pekerjaan --}}
<div class="row">
  <div class="col-12">
    <span><b>Lokasi Pekerjaan</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="text" value="" id="data_lokasi" name="data_lokasi" class="form-control" placeholder="Lokasi Pekerjaan">
  </div>
  </div>
</div>
{{-- Range Anggaran --}}
<div class="row">
  <span><b>Range Tanggal</b></span>
  <div class="col-6">
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="date" value="" id="data_rpelaksanaan_a" name="data_rpelaksanaan_a" class="form-control" placeholder="Awal">
  </div>
</div>
<div class="col-6">
    <div class="input-icon mb-3">
    <span class="input-icon-addon">
        <!-- Download SVG icon from http://tabler-icons.io/i/user -->
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
      </span>
    <input type="date" value="" id="data_rpelaksanaan_b" name="data_rpelaksanaan_b" class="form-control" placeholder="Akhir">
  </div>
</div>
<div class="col-6">
    <span><b>Jangka Waktu</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input type="text" value="" id="data_jwaktu_pelaksanaan" name="data_jwaktu_pelaksanaan" class="form-control" placeholder="Jangan Waktu">
    </div>
  </div>
  <div class="col-6">
    <span><b>Jenis Tahun</b></span>
      <div class="input-icon mb-3">
      <span class="input-icon-addon">
          <!-- Download SVG icon from http://tabler-icons.io/i/user -->
          <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg>
        </span>
      <input readonly type="text" value="" id="jns_tahun" name="jns_tahun" class="form-control" placeholder="Jenis Tahun">
  </div>
  </div>
</div>
{{-- Input tipe hidden untuk PPK --}}
  {{-- <div class="col-12">
    
  </div> --}}
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
{{-- Modal Edit Permohonan lelang --}}
<div class="modal modal-blur fade" id="modal-editpermohonan" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Permohonan Lelang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="loadeditFormPermohonan">
      </div>
    </div>
  </div>
</div>
@endsection

  @push('myscript')
    <script>
      $(function(){
            // Tambah permohonan lelang
            $("#btnTambahPermohonan").click(function(){
                $("#modal-inputpermohonan").modal("show");
            });
            // Script Untuk edit 
            $(".edit").click(function(){
                var data_id = $(this).attr('data_id');
                $.ajax({
                    type:'POST',
                    url:'/permohonanlelang/edit',
                    cache:false,
                    data: {
                        _token:"{{ csrf_token() }}",
                        data_id : data_id
                    },
                    success:function(respond){
                        $("#loadeditFormPermohonan").html(respond);
                    }
                });
                $("#modal-editpermohonan").modal("show");
            });

            // Script untuk update dan validasi formulir
            $("#frmPermohonan").submit(function(){
                var data_id = $("#data_id").val();
                var no_surat = $("#no_surat").val();
                var tgl_surat = $("#tgl_surat").val();
                var jenis_id = $("#jenis_id").val();
                var jenis_kontrak = $("#jenis_kontrak").val();
                var data_sumber_dana = $("#data_sumber_dana").val();
                var data_tahun = $("#data_tahun").val();
                var data_paket_pekerjaan = $("#data_paket_pekerjaan").val();
                var sub_kegiatan = $("#sub_kegiatan").val();
                var tahun_anggaran = $("#tahun_anggaran").val();
                var pagu_anggaran = $("#pagu_anggaran").val();
                var data_hps = $("#data_hps").val();
                var data_kode_rekening = $("#data_kode_rekening").val();
                var data_lokasi = $("#data_lokasi").val();
                var data_rpelaksanaan_a = $("#data_rpelaksanaan_a").val();
                var data_rpelaksanaan_b = $("#data_rpelaksanaan_b").val();
                var data_jwaktu_pelaksanaan = $("#data_jwaktu_pelaksanaan").val();
                var data_id = $("frmPermohonan").find("#data_id").val();
                if (data_id=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Data Id Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_id").focus();
                    });
                return false;
                }else if(no_surat=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'No. Surat Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#no_surat").focus();
                    });
                return false;
                }else if(jenis_id=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Jenis Pekerjaan Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#jenis_id").focus();
                    });
                return false;
                }else if(jenis_kontrak=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Jenis Kontrak Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#jenis_kontrak").focus();
                    });
                return false;
                }else if(data_sumber_dana=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Sumber Dana Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_sumber_dana").focus();
                    });
                return false;
                }else if(data_tahun=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Tahun Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_tahun").focus();
                    });
                return false;
                }else if(data_paket_pekerjaan=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Paket Pekerjaan Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_paket_pekerjaan").focus();
                    });
                return false;
                }else if(sub_kegiatan=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Sub Kegiatan Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#sub_kegiatan").focus();
                    });
                return false;
                }else if(tahun_anggaran=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Tahun Anggaran Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#tahun_anggaran").focus();
                    });
                return false;
                }else if(pagu_anggaran=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Pagu Anggaran Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#pagu_anggaran").focus();
                    });
                return false;
                }else if(data_hps=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'HPS Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_hps").focus();
                    });
                return false;
                }else if(data_kode_rekening=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Kode Rekening Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_kode_rekening").focus();
                    });
                return false;
                }else if(data_lokasi=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Lokasi Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_lokasi").focus();
                    });
                return false;
                }else if(data_rpelaksanaan_a=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Range Tanggal Awal Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_rpelaksanaan_a").focus();
                    });
                return false;
                }else if(data_rpelaksanaan_b=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Range Tanggal Akhir Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_rpelaksanaan_b").focus();
                    });
                return false;
                }else if(data_jwaktu_pelaksanaan=="") {
                    Swal.fire({
                        title: 'Warning!',
                        text: 'Jangka Waktu Harus di Isi',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        $("#data_jwaktu_pelaksanaan").focus();
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
      // AJAX Select bertingkat 
      $('#jenis_id').change(function(){
        var jenis_id = $(this).val();
        if(jenis_id){
          $.ajax({
            type:"GET",
            url:"/getjeniskontrak?jenis_id="+jenis_id,
            datatype: 'JSON',
            success:function(res){
              if(res){
                $("#jenis_kontrak").empty();
                $("#jenis_kontrak").append('<option>---Pilih Jenis Kontrak---</option>');
                $.each(res, function (nama,kode) { 
                    $("#jenis_kontrak").append('<option value="'+kode+'">'+nama+'</option>');
                 });
              }else{
                $("#jenis_kontrak").empty();
              }
            }
          });
        }else{
          $("#jenis_kontrak").empty();
        }
      });

    </script>
  @endpush
 {{-- <script>
       $(document).ready(function() {
    $('#summernote').summernote({
        height: 200
    });

    // AJAX script to load detail data into modal
    $('#detailModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        
        $.ajax({
            url: '/permohonanlelang/' + id,
            method: 'GET',
            success: function (data) {
                $('#detailModalBody').html(data);
            },
            error: function () {
                $('#detailModalBody').html('<p>Error retrieving data</p>');
            }
        });
    });

    // AJAX script to load mailbox data into modal
    $('.openMailboxModal').click(function() {
        var id = $(this).data('id');
        
        $.ajax({
            url: '/mailbox/' + id,
            type: 'GET',
            success: function(data) {
                $('#TxtTo').val(data.skpd ? data.skpd.skpd_nama : '');
                $('#TxtSubject').val(data.data_pengadaan ? data.data_pengadaan.data_paket_pekerjaan : '');
            },
            error: function() {
                alert('Failed to fetch data');
            }
        });
    });
});
</script> --}}
    
  {{-- @endpush --}}
    
{{-- coba tambah ini --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script> 
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Permohonan Lelang SKPD</h1>

        <!-- Display success and error messages -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Button to add new data -->
        <button class="btn btn-primary mb-3" onclick="window.location.href='{{ route('buatpermohonanlelang') }}'">Tambah Data</button>

        <!-- Data table -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jenis Pengadaan</th>
                    <th>Jenis Kontrak</th>
                    <th>Sumber Dana</th>
                    <th>No. Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Data Tahun</th>
                    <th>Paket Pekerjaan</th>
                    <th>Kode Rekening</th>
                    <th>HPS</th>
                    <th>Pagu Anggaran</th>
                    <th>Sub Kegiatan</th>
                    <th>Lokasi</th>
                    <th>Rencana Pelaksanaan A</th>
                    <th>Rencana Pelaksanaan B</th>
                    <th>Jangka Waktu Pelaksanaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datapengadaan as $data)
                    <tr>
                        <td>{{ $data->data_id }}</td>
                        <td>{{ $data->jenis_id }}</td>
                        <td>{{ $data->kontrak_nama }}</td>
                        <td>{{ $data->dana_nama }}</td>
                        <td>{{ $data->no_surat }}</td>
                        <td>{{ $data->tgl_surat }}</td>
                        <td>{{ $data->data_tahun }}</td>
                        <td>{{ $data->data_paket_pekerjaan }}</td>
                        <td>{{ $data->data_kode_rekening }}</td>
                        <td>{{ $data->data_hps }}</td>
                        <td>{{ $data->pagu_anggaran }}</td>
                        <td>{{ $data->sub_kegiatan }}</td>
                        <td>{{ $data->data_lokasi }}</td>
                        <td>{{ $data->data_rpelaksanaan_a }}</td>
                        <td>{{ $data->data_rpelaksanaan_b }}</td>
                        <td>{{ $data->data_jwaktu_pelaksanaan }}</td>
                        <td>
                            <button class="btn btn-info" data-toggle="modal" data-target="#detailModal" data-id="{{ $data->data_id }}" >Detail</button>
                            <button class="btn btn-primary openMailboxModal" data-id="{{ $data->data_id }}" data-toggle="modal" data-target="#mailboxModal">Buka Mail Box</button>
                            <button class="btn btn-warning" onclick="window.location.href='{{ route('editpermohonanlelang', $data->data_id) }}'">Edit</button>
                            <form action="{{ route('permohonandelete', $data->data_id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination links -->
        {{ $datapengadaan->links() }}

        <!-- Detail Modal -->
       <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Permohonan Lelang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="detailModalBody">
                <!-- Detail data will be loaded here via AJAX -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Mailbox Modal -->
<div class="modal fade" id="mailboxModal" tabindex="-1" role="dialog" aria-labelledby="mailboxModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mailboxModalLabel">Mail Box</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="mailboxModalBody">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Pesan Evaluasi Permohonan Lelang</h3>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Kepada:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="TxtTo" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Pekerjaan:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="TxtSubject" name="TxtSubject" readonly>
                        </div>
                    </div>
                    <div class="card-body">
                        <textarea id="summernote" name="summernote"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>


    <script>
       $(document).ready(function() {
    $('#summernote').summernote({
        height: 200
    });

    // AJAX script to load detail data into modal
    $('#detailModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        
        $.ajax({
            url: '/permohonanlelang/' + id,
            method: 'GET',
            success: function (data) {
                $('#detailModalBody').html(data);
            },
            error: function () {
                $('#detailModalBody').html('<p>Error retrieving data</p>');
            }
        });
    });

    // AJAX script to load mailbox data into modal
    $('.openMailboxModal').click(function() {
        var id = $(this).data('id');
        
        $.ajax({
            url: '/mailbox/' + id,
            type: 'GET',
            success: function(data) {
                $('#TxtTo').val(data.skpd ? data.skpd.skpd_nama : '');
                $('#TxtSubject').val(data.data_pengadaan ? data.data_pengadaan.data_paket_pekerjaan : '');
            },
            error: function() {
                alert('Failed to fetch data');
            }
        });
    });
});

    </script>
</body>
</html>



