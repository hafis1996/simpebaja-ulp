{{-- <div class="form-group">
    <label for="satker_id">Satker ID</label>
    <input type="text" class="form-control" name="satker_id" id="satker_id" value="{{ old('satker_id', $skpd_list->satker_id ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_kat_id">SKPD Kat ID</label>
    <input type="text" class="form-control" name="skpd_kat_id" id="skpd_kat_id" value="{{ old('skpd_kat_id', $skpd_list->skpd_kat_id ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_kode">SKPD Kode</label>
    <input type="text" class="form-control" name="skpd_kode" id="skpd_kode" value="{{ old('skpd_kode', $skpd_list->skpd_kode ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_nama">SKPD Nama</label>
    <input type="text" class="form-control" name="skpd_nama" id="skpd_nama" value="{{ old('skpd_nama', $skpd_list->skpd_nama ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_inisial">SKPD Inisial</label>
    <input type="text" class="form-control" name="skpd_inisial" id="skpd_inisial" value="{{ old('skpd_inisial', $skpd_list->skpd_inisial ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_alamat">SKPD Alamat</label>
    <input type="text" class="form-control" name="skpd_alamat" id="skpd_alamat" value="{{ old('skpd_alamat', $skpd_list->skpd_alamat ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_telp">SKPD Telp</label>
    <input type="text" class="form-control" name="skpd_telp" id="skpd_telp" value="{{ old('skpd_telp', $skpd_list->skpd_telp ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_pimpinan">SKPD Pimpinan</label>
    <input type="text" class="form-control" name="skpd_pimpinan" id="skpd_pimpinan" value="{{ old('skpd_pimpinan', $skpd_list->skpd_pimpinan ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_pimpinan_nip">SKPD Pimpinan NIP</label>
    <input type="text" class="form-control" name="skpd_pimpinan_nip" id="skpd_pimpinan_nip" value="{{ old('skpd_pimpinan_nip', $skpd_list->skpd_pimpinan_nip ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_pengajuan">SKPD Pengajuan</label>
    <input type="checkbox" name="skpd_pengajuan" id="skpd_pengajuan" value="1" {{ old('skpd_pengajuan', $skpd_list->skpd_pengajuan ?? false) ? 'checked' : '' }}>
</div>
<div class="form-group">
    <label for="skpd_verifikasi">SKPD Verifikasi</label>
    <input type="checkbox" name="skpd_verifikasi" id="skpd_verifikasi" value="1" {{ old('skpd_verifikasi', $skpd_list->skpd_verifikasi ?? false) ? 'checked' : '' }}>
</div>
<div class="form-group">
    <label for="skpd_e_lelang">SKPD E-Lelang</label>
    <input type="checkbox" name="skpd_e_lelang" id="skpd_e_lelang" value="1" {{ old('skpd_e_lelang', $skpd_list->skpd_e_lelang ?? false) ? 'checked' : '' }}>
</div>

 --}}


<div class="form-group">
    <label for="skpd_id">SKPD ID</label>
    <input type="text" name="skpd_id" id="skpd_id" class="form-control" value="{{ old('skpd_id', $skpd_list->skpd_id ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_kelompok">Kelompok</label>
    <select name="skpd_kelompok" id="skpd_kelompok" class="form-control">
        <option value="#" >-PILIH KELOMPOK SKPD-</option>
        <option value="BADAN" {{ old('skpd_kelompok', $skpd_list->skpd_kelompok ?? '') == 'BADAN' ? 'selected' : '' }}>BADAN</option>
        <option value="DINAS" {{ old('skpd_kelompok', $skpd_list->skpd_kelompok ?? '') == 'DINAS' ? 'selected' : '' }}>DINAS</option>
        <option value="KECAMATAN" {{ old('skpd_kelompok', $skpd_list->skpd_kelompok ?? '') == 'KECAMATAN' ? 'selected' : '' }}>KECAMATAN</option>
        <option value="BAGIAN" {{ old('skpd_kelompok', $skpd_list->skpd_kelompok ?? '') == 'BAGIAN' ? 'selected' : '' }}>BAGIAN</option>
    </select>
</div>
<div class="form-group">
    <label for="satker_id">Satker ID</label>
    <input type="text" name="satker_id" id="satker_id" class="form-control" value="{{ old('satker_id', $skpd_list->satker_id ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_kat_id">SKPD Kat ID</label>
    <input type="text" name="skpd_kat_id" id="skpd_kat_id" class="form-control" value="{{ old('skpd_kat_id', $skpd_list->skpd_kat_id ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_kode">SKPD Kode</label>
    <input type="text" name="skpd_kode" id="skpd_kode" class="form-control" value="{{ old('skpd_kode', $skpd_list->skpd_kode ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_nama">SKPD Nama</label>
    <input type="text" name="skpd_nama" id="skpd_nama" class="form-control" value="{{ old('skpd_nama', $skpd_list->skpd_nama ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_inisial">SKPD Inisial</label>
    <input type="text" name="skpd_inisial" id="skpd_inisial" class="form-control" value="{{ old('skpd_inisial', $skpd_list->skpd_inisial ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_alamat">SKPD Alamat</label>
    <input type="text" name="skpd_alamat" id="skpd_alamat" class="form-control" value="{{ old('skpd_alamat', $skpd_list->skpd_alamat ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_telp">SKPD Telepon</label>
    <input type="text" name="skpd_telp" id="skpd_telp" class="form-control" value="{{ old('skpd_telp', $skpd_list->skpd_telp ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_pimpinan">SKPD Pimpinan</label>
    <input type="text" name="skpd_pimpinan" id="skpd_pimpinan" class="form-control" value="{{ old('skpd_pimpinan', $skpd_list->skpd_pimpinan ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_pimpinan_nip">SKPD Pimpinan NIP</label>
    <input type="text" name="skpd_pimpinan_nip" id="skpd_pimpinan_nip" class="form-control" value="{{ old('skpd_pimpinan_nip', $skpd_list->skpd_pimpinan_nip ?? '') }}">
</div>
<div class="form-group">
    <label for="skpd_pengajuan">SKPD Pengajuan</label>
    <input type="checkbox" name="skpd_pengajuan" id="skpd_pengajuan" value="1" {{ old('skpd_pengajuan', $skpd_list->skpd_pengajuan ?? false) ? 'checked' : '' }}>
</div>
<div class="form-group">
    <label for="skpd_verifikasi">SKPD Verifikasi</label>
    <input type="checkbox" name="skpd_verifikasi" id="skpd_verifikasi" value="1" {{ old('skpd_verifikasi', $skpd_list->skpd_verifikasi ?? false) ? 'checked' : '' }}>
</div>
<div class="form-group">
    <label for="skpd_e_lelang">SKPD E-Lelang</label>
    <input type="checkbox" name="skpd_e_lelang" id="skpd_e_lelang" value="1" {{ old('skpd_e_lelang', $skpd_list->skpd_e_lelang ?? false) ? 'checked' : '' }}>
</div>
