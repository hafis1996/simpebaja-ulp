<form action="/sumberdana/{{ $sumberdana->dana_id }}/update" method="POST" id="frmSumberDanaSkpd" enctype="multipart/form-data">
    @csrf
    {{-- ID Nama --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label">ID Dana SKPD</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input type="text" readonly value="{{ $sumberdana->dana_id }}" id="dana_id" name="dana_id" class="form-control" placeholder="dana_id">
        </div>
        </div>
    </div>
    {{-- Dana Nama --}}
    <div class="row">
        <div class="col-12">
            <div class="form-label">Sumber Dana SKPD</div>
            <div class="input-icon mb-3">
            <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                </svg>
              </span>
            <input type="text" value="{{ $sumberdana->dana_nama }}" id="dana_nama" name="dana_nama" class="form-control" placeholder="Nama Dana">
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