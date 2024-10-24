 {{-- permohonan lelang edit --}}
  <form action="/permohonanlelang/{{ $datapengadaan->data_id }}/update" method="POST" id="frmPermohonan" enctype="multipart/form-data">
    @csrf
{{-- No Surat --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>NOMOR SURAT</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="text" value="{{ $datapengadaan->no_surat }}" id="no_surat" name="no_surat" class="form-control" placeholder="NOMOR SURAT">
    </div>
    </div>
</div>
{{-- Tgl Surat --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>TANGGAL SURAT</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="date" value="{{ $datapengadaan->tgl_surat }}" id="tgl_surat" name="tgl_surat" class="form-control" placeholder="TANGGAL SURAT">
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
 {{-- <div class="row mb-3">
    <div class="col-12">
      <span><b>Jenis Kontrak</b></span>
          <div class="form-group">
            <select class="form-control" name="jenis_kontrak" id="jenis_kontrak">
              <option selected>---Pilih Jenis Kontrak---</option>
            </select>
        </div>
    </div>
</div> --}}
{{-- Sumber Dana --}}
{{-- <div class="row mb-3">
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
</div> --}}
{{-- Tahun Anggaran --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>TAHUN ANGGARAN</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="text" value="{{ $datapengadaan->data_tahun }}" id="data_tahun" name="data_tahun" class="form-control" placeholder="TAHUN ANGGARAN">
    </div>
    </div>
</div>
{{-- Nama Kegiatan --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>NAMA KEGIATAN/PAKET LELANG</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="text" value="{{ $datapengadaan->data_paket_pekerjaan }}" id="data_paket_pekerjaan" name="data_paket_pekerjaan" class="form-control" placeholder="NAMA KEGIATAN">
    </div>
    </div>
</div>
{{-- Sub Kegiatan --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>SUB KEGIATAN</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="text" value="{{ $datapengadaan->sub_kegiatan }}" id="sub_kegiatan" name="sub_kegiatan" class="form-control" placeholder="SUB KEGIATAN">
    </div>
    </div>
</div>
{{-- Tahun Anggaran--}} 
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>TAHUN ANGGARAN</b></div>
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
{{-- PAGU Anggaran --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>PAGU ANGGARAN</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="number" readonly value="{{ $datapengadaan->pagu_anggaran }}" id="pagu_anggaran" name="pagu_anggaran" class="form-control" placeholder="PAGU ANGGARAN">
    </div>
    </div>
</div>
{{-- HPS Anggaran --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>HPS ANGGARAN</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="number" value="{{ $datapengadaan->data_hps }}" id="data_hps" name="data_hps" class="form-control" placeholder="HPS ANGGARAN">
    </div>
    </div>
</div>
{{-- Kode Rekening Kegiatan --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>KODE REKENING KEGIATAN</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="text" value="{{ $datapengadaan->data_kode_rekening }}" id="data_kode_rekening" name="data_kode_rekening" class="form-control" placeholder="KODE REKENING KEGIATAN">
    </div>
    </div>
</div>
{{-- Lokasi Pekerjaan --}}
<div class="row">
    <div class="col-12">
        <div class="form-label"><b>LOKASI PEKERJAAN</b></div>
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="text" value="{{ $datapengadaan->data_lokasi }}" id="data_lokasi" name="data_lokasi" class="form-control" placeholder="LOKASI PEKERJAAN">
    </div>
    </div>
</div>
{{-- Range Tanggal --}}
<div class="row">
    <div class="form-label"><b>RANGE TANGGAL</b></div>
    <div class="col-6">
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="date" value="{{ $datapengadaan->data_rpelaksanaan_a }}" id="data_rpelaksanaan_a" name="data_rpelaksanaan_a" class="form-control" placeholder="TANGGAL MULAI">
    </div>
    </div>
    {{-- Tanggal Selesai --}}
    <div class="col-6">
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="date" value="{{ $datapengadaan->data_rpelaksanaan_b }}" id="data_rpelaksanaan_b" name="data_rpelaksanaan_b" class="form-control" placeholder="TANGGAL SELESAI">
    </div>
    </div>
    {{-- Jangka Waktu --}}
    <div class="form-label"><b>JANGKA WAKTU</b></div>
    <div class="col-12">
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="text" value="{{ $datapengadaan->data_jwaktu_pelaksanaan }}" id="data_jwaktu_pelaksanaan" name="data_jwaktu_pelaksanaan" class="form-control" placeholder="JANGKA WAKTU">
    </div>
    </div>
    {{-- JENIS TAHUN --}}
    <div class="form-label"><b>JENIS TAHUN</b></div>
    <div class="col-12">
        <div class="input-icon mb-3">
        <span class="input-icon-addon">
            <!-- Download SVG icon from http://tabler-icons.io/i/user -->
            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            </svg>
          </span>
        <input type="text" readonly value="{{ $datapengadaan->jns_tahun }}" id="jns_tahun" name="jns_tahun" class="form-control" placeholder="JENIS TAHUN">
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
{{-- Javascript --}}
@push('myscript')
    <script>
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