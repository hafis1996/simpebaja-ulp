{{-- 


@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Daftar Pesan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Kepada</th>
                <th>Pesan</th>
                <th>Data Paket Pekerjaan</th> 
                <th>Tanggal</th>
            </tr>
        </thead>
        
        <tbody>
    @foreach($messages as $message)
        <tr>
            <td>{{ $message->toUserSkpd->user_nama }}</td>
            <td style="color: red;">{{ $message->message }}</td> 
            <td>{{ $message->dataPengadaan->data_paket_pekerjaan ?? 'Data tidak tersedia' }}</td>
            <td>{{ $message->created_at->format('d-M-Y H:i:s') }}</td>
        </tr>
    @endforeach
</tbody>

    </table>
</div>
@endsection

  --}}

  {{-- @extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Daftar Pesan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
    <thead>
        <tr>
            <th>Kepada</th>
            <th>SKPD Nama</th>
            <th>Pesan</th>
            <th>Data Paket Pekerjaan</th>
            <th>Tanggal</th>
            <th>Aksi</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->toUserSkpd->user_nama }}</td>
                <td>{{ $message->toUserSkpd->skpdList->skpd_nama ?? 'Data tidak tersedia' }}</td> 
                <td style="color: red;">{{ $message->message }}</td>
                <td>{{ $message->dataPengadaan->data_paket_pekerjaan ?? 'Data tidak tersedia' }}</td>
                <td>{{ $message->created_at->format('d-M-Y H:i:s') }}</td>

                 <td>
                    
                    <a href="{{ route('messages.show', $message->id) }}" class="btn btn-primary btn-sm">Lihat</a>

                   
                    <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-warning btn-sm">Edit</a>

                
                    <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


</div>
@endsection --}}

@extends('layouts.skpd.tabler')
@section('content')
<div class="container">
    <h1>Daftar Pesan</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
    <thead>
        <tr>
            <th>Kepada</th>
            <th>SKPD Nama</th>
            <th>Pesan</th>
            <th>Data Paket Pekerjaan</th>
            <th>Tanggal</th>
            <th>Status</th> <!-- Kolom untuk Status -->
            <th>Aksi</th> 
        </tr>
    </thead>
    <tbody>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->toUserSkpd->user_nama }}</td>
                <td>{{ $message->toUserSkpd->skpdList->skpd_nama ?? 'Data tidak tersedia' }}</td>
                <td style="color: red;">{{ $message->message }}</td>
                <td>{{ $message->dataPengadaan->data_paket_pekerjaan ?? 'Data tidak tersedia' }}</td>
                {{-- <td>{{ $message->created_at->format('d-M-Y H:i:s') }}</td> --}}
                <td>{{ $message->created_at->setTimezone('Asia/Jakarta')->format('d-M-Y H:i:s') }}</td>

                <td>
                    @if ($message->status == 0)
                        <span class="badge bg-danger text-white">Belum evaluasi</span> 
                        <br>
                        {{ $message->created_at->setTimezone('Asia/Jakarta')->format('d-M-Y H:i:s') }}
                    @elseif ($message->status == 1)
                        <span class="badge bg-success text-white">Sudah evaluasi</span> 
                        <br>
                        {{ $message->updated_at->setTimezone('Asia/Jakarta')->format('d-M-Y H:i:s') }}
                    @endif
                </td>


                <td>
                    <a href="{{ route('messages.show', $message->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                    <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection

