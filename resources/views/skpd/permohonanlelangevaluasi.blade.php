@extends('layouts.skpd.tabler')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    FORM PERMOHONAN LELANG ULP
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
            <div class="col-12">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            @if (Session::get('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (Session::get('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="table-responsive mt-2">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>SKPD ID</th>
                                <th>PENGINPUT</th>
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
                                <td>{{ $s->penginput_id }}</td>
                                <td>{{ $s->data_kode_rekening }}</td>
                                <td>{{ $s->data_paket_pekerjaan }}</td>
                                <td>{{ formatRupiah($s->pagu_anggaran) }}</td>
                                <td>{{ $s->dana_nama }}</td>
                                <td>{{ $s->kontrak_nama }}</td>
                                <td>{{ formatRupiah($s->data_hps) }}</td>
                                <td>{{ $s->data_jwaktu_pelaksanaan }}</td>
                                <td>
                                    <a href="{{ route('messages.create', ['to_user_id' => $s->penginput_id]) }}" class="btn btn-success btn-sm">
                                        Kirim Pesan
                                    </a>

                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmDisposisiModal{{ $s->data_id }}">Disposisi</button>
                                    <!-- Modal konfirmasi -->
                                    <div class="modal fade" id="confirmDisposisiModal{{ $s->data_id }}" tabindex="-1" role="dialog" aria-labelledby="confirmDisposisiLabel{{ $s->data_id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmDisposisiLabel{{ $s->data_id }}">Konfirmasi Disposisi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin akan mendisposisikan data ini?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <form action="{{ route('disposisi.update', $s->data_id) }}" method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $s->no_surat }}</td>
                                <td>{{ date('d-M-Y', strtotime($s->tgl_surat)) }}</td>
                                <td>{{ $s->jns_tahun }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-12">
                {{ $datapengadaan->links() }} {{-- Pagination link --}}
            </div>
        </div>
    </div>
</div>
@endsection
