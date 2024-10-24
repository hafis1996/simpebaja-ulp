{{-- form edit  --}}
<form action="/permohonanlelang/{{ $datapengadaan->data_id }}/update" method="POST" id="frmPermohonan" enctype="multipart/form-data">
    @csrf
     @method('PUT')
    {{-- No Surat --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label"><b>NOMOR SURAT</b></div>
            <div class="input-icon mb-3">
                <input type="text" value="{{ $datapengadaan->no_surat }}" id="no_surat" name="no_surat" class="form-control" placeholder="NOMOR SURAT">
            </div>
        </div>
    </div>
    {{-- Tgl Surat --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label"><b>TANGGAL SURAT</b></div>
            <div class="input-icon mb-3">
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
                        <option value="{{ $d->jenis_id }}" {{ $d->jenis_id == $datapengadaan->jenis_id ? 'selected' : '' }}>{{ $d->nama_pengadaan }}</option>
                    @endforeach 
                </select>
            </div>
        </div>
    </div>
    {{-- Additional fields here --}}
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary w-100">Simpan</button>
    </div>
</form> 

