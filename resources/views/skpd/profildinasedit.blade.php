<form action="/profildinasskpd/{{ $skpdprofildinas->skpd_id }}/update" method="POST" id="frmProfilDinasSkpd" enctype="multipart/form-data">
    @csrf
    {{-- KODE REKENING SKPD --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label">KODE REKENING SKPD</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input class="btn btn-success w-100" type="text" readonly value="{{ $skpdprofildinas->skpd_kode }}" id="skpd_kode" name="skpd_kode" class="form-control" placeholder="KODE REKENING SKPD">
        </div>
        </div>
    </div>
    {{-- NAMA SKPD --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label">NAMA SKPD</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input type="text" value="{{ $skpdprofildinas->skpd_nama }}" id="skpd_nama" name="skpd_nama" class="form-control" placeholder="NAMA SKPD">
        </div>
        </div>
    </div>
    {{-- INISIAL SKPD --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label">INISIAL SKPD</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input type="text" value="{{ $skpdprofildinas->skpd_inisial }}" id="skpd_inisial" name="skpd_inisial" class="form-control" placeholder="INISIAL SKPD">
        </div>
        </div>
    </div>
     {{-- ALAMAT KANTOR SKPD --}}
     <div class="row">
        <div class="col-12">
            <div class="form-label">ALAMAT KANTOR SKPD</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input type="text" value="{{ $skpdprofildinas->skpd_alamat }}" id="skpd_alamat" name="skpd_alamat" class="form-control" placeholder="ALAMAT SKPD">
        </div>
        </div>
    </div>
    {{-- TELPON --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label">TELPON KANTOR</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input type="number" value="{{ $skpdprofildinas->skpd_telp }}" id="skpd_telp" name="skpd_telp" class="form-control" placeholder="TELPON KANTOR">
        </div>
        </div>
    </div>
    {{-- KEPALA DINAS --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label">KEPALA DINAS</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input type="text" value="{{ $skpdprofildinas->skpd_pimpinan }}" id="skpd_pimpinan" name="skpd_pimpinan" class="form-control" placeholder="KEPALA DINAS">
        </div>
        </div>
    </div>
    {{-- NIP KEPALA DINAS --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label">NIP KEPALA DINAS</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input type="number" value="{{ $skpdprofildinas->skpd_pimpinan_nip }}" id="skpd_pimpinan_nip" name="skpd_pimpinan_nip" class="form-control" placeholder="NIP KEPALA DINAS">
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