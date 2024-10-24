{{-- @extends('layouts.skpd.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    FORM PERMOHONAN LELANG ULP (Disposisi)
                </div>
                <h2 class="page-title">
                    Ogan Komering Ulu - Disposisi
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                <div class="table-responsive mt-2">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>SKPD ID</th>
                             
                                <th>REKENING</th>
                                <th>PAKET</th>
                                <th>PAGU</th>
                                <th>SUMBER</th>
                                <th>JENIS KONTRAK</th>
                                <th>HPS</th>
                                <th>WAKTU</th>
                                <th>PROSES</th>
                                <th>NO. SURAT</th>
                                <th>TGL. SURAT</th>
                                <th>JENIS TAHUN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datapengadaan as $s)
                            <tr>
                                <td>{{ $loop->iteration + $datapengadaan->firstItem() - 1 }}</td>
                                <td>{{ $s->skpd_id }}</td>
                              
                                <td>{{ $s->data_kode_rekening }}</td>
                                <td>{{ $s->data_paket_pekerjaan }}</td>
                                <td>{{ formatRupiah($s->pagu_anggaran) }}</td>
                                <td>{{ $s->dana_nama }}</td>
                                <td>{{ $s->kontrak_nama }}</td>
                                <td>{{ formatRupiah($s->data_hps) }}</td>
                                <td>{{ $s->data_jwaktu_pelaksanaan }}</td>
                                <td>
                                    <a href="{{ route('disposisi.detail', $s->data_id) }}" >
                                      Lihat Detail
                                     </a>
                                </td>

                                <td>{{ $s->no_surat }}</td>
                                <td>{{ $s->tgl_surat }}</td>
                                <td>{{ $s->data_tahun }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $datapengadaan->links() }}
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Permohonan Lelang Disposisi</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode Rekening</th>
                <th>Nama Paket</th>
                <th>Pagu Anggaran</th>
                <th>No Surat</th>
                <th>Tanggal Surat</th>
                <th>Jenis Kontrak</th>
                <th>Proses</th> <!-- Kolom untuk proses -->
            </tr>
        </thead>
        <tbody>
            @foreach($datapengadaan as $item)
                <tr>
                    <td>{{ $item->data_kode_rekening }}</td>
                    <td>{{ $item->data_paket_pekerjaan }}</td>
                    <td>{{ $item->pagu_anggaran }}</td>
                    <td>{{ $item->no_surat }}</td>
                    <td>{{ $item->tgl_surat }}</td>
                    <td>{{ $item->kontrak_nama }}</td>
                    <td>
                        <!-- Detail Proses -->
                        <div class="detail-proses">
                            <!-- Tambahkan info detail tentang pengadaan di sini jika dibutuhkan -->
                            <p>Detail Pengadaan: {{ $item->data_paket_pekerjaan }} - {{ $item->pagu_anggaran }}</p>
                        
                            <!-- Dropdown untuk memilih Pokja -->
                            <select class="form-control pilih-pokja" data-pengadaan-id="{{ $item->data_id }}">
                                <option value="">-- Pilih Pokja --</option>
                                @foreach($pokjaList as $pokja)
                                    <option value="{{ $pokja->id_pokja }}">{{ $pokja->nama }}</option> <!-- Menggunakan id_pokja -->
                                @endforeach
                            </select>

                            <!-- Tabel anggota Pokja akan dimuat di sini -->
                            <div class="mt-2 anggota-container" id="anggota-container-{{ $item->data_id }}">
                                <!-- Anggota Pokja akan ditampilkan di sini dengan AJAX -->
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $datapengadaan->links() }} <!-- Pagination -->

</div>

<!-- AJAX untuk Fetch Anggota Berdasarkan Pokja yang dipilih -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.pilih-pokja').on('change', function() {
        var pokjaId = $(this).val();
        var pengadaanId = $(this).data('pengadaan-id');
        var anggotaContainer = $('#anggota-container-' + pengadaanId);

        if (pokjaId) {
            // Fetch anggota Pokja menggunakan AJAX
            $.ajax({
                url: `/pokja/${pokjaId}/anggota`,  // Pastikan route ini benar
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var anggotaHtml = '<h5>Anggota Pokja:</h5><ul>';
                    $.each(data, function(index, anggota) {
                        anggotaHtml += `<li>${anggota.nama} - ${anggota.jabatan}</li>`;
                    });
                    anggotaHtml += '</ul>';
                    anggotaContainer.html(anggotaHtml);
                },
                error: function(xhr, status, error) {
                    anggotaContainer.html('<p class="text-danger">Error loading anggota data.</p>');
                    console.error('Error:', error); // Menampilkan error di console
                }
            });
        } else {
            anggotaContainer.html('<p>Belum ada pokja yang dipilih.</p>');
        }
    });
});


</script>
@endsection


