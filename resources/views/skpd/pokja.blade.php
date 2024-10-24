{{-- <!-- resources/views/pokja/index.blade.php -->
@extends('layouts.skpd.tabler')
@section('content')

    <div class="container">
        <h1>Pokja List</h1>
        <br>
        <a href="{{ route('skpd.createpokja') }}" class="btn btn-primary">Add New Pokja</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>No SK</th>
                    <th>Handphone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pokja as $p)
                    <tr>
                        <td>{{ $p->id_pokja }}</td>
                        <td>{{ $p->nip }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->jabatan }}</td>
                        <td>{{ $p->no_sk }}</td>
                        <td>{{ $p->handphone }}</td>
                        <td>{{ $p->email }}</td>
                        <td>
                            <a href="{{ route('skpd.showpokja', $p->id_pokja) }}" class="btn btn-info">View</a>
                            <a href="{{ route('skpd.editpokja', $p->id_pokja) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('skpd.destroypokja', $p->id_pokja) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection --}}





<!-- resources/views/skpd/pokja.blade.php -->
{{-- @extends('layouts.skpd.tabler')
@section('content') --}}
{{-- <div class="container">
    <h1>Pokja List</h1>
    <br>
    <a href="{{ route('skpd.createpokja') }}" class="btn btn-primary">Add New Pokja</a>
   
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No SK</th>
                <th>Handphone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokja as $p)
                <tr>
                    <td>{{ $p->id_pokja }}</td>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>{{ $p->no_sk }}</td>
                    <td>{{ $p->handphone }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="{{ route('skpd.showpokja', $p->id_pokja) }}" class="btn btn-info">View</a>
                        <a href="{{ route('skpd.editpokja', $p->id_pokja) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('skpd.destroypokja', $p->id_pokja) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('skpd.createAnggota', $p->id_pokja) }}" class="btn btn-secondary">Add New Anggota</a>
                    </td>
                </tr>
                <br>

                <!-- Display anggota for this pokja -->
                <tr>
                    <td colspan="8">
                        <h5>Anggota List for {{ $p->nama }}</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>No SK</th>
                                    <th>Handphone</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($p->anggota as $a)
                                    <tr>
                                        <td>{{ $a->nip }}</td>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->jabatan }}</td>
                                        <td>{{ $a->no_sk }}</td>
                                        <td>{{ $a->handphone }}</td>
                                        <td>{{ $a->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}


<!-- resources/views/skpd/pokja.blade.php -->

{{-- <div class="container">
    <h1>Pokja List</h1>
    <br>
    <a href="{{ route('skpd.createpokja') }}" class="btn btn-primary">Add New Pokja</a>
   
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No SK</th>
                <th>Handphone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokja as $p)
                <tr>
                    <td>{{ $p->id_pokja }}</td>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>{{ $p->no_sk }}</td>
                    <td>{{ $p->handphone }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="{{ route('skpd.showpokja', $p->id_pokja) }}" class="btn btn-info">View</a>
                        <a href="{{ route('skpd.editpokja', $p->id_pokja) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('skpd.destroypokja', $p->id_pokja) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('skpd.createAnggota', $p->id_pokja) }}" class="btn btn-secondary">Add New Anggota</a>
                    </td>
                </tr>
                <!-- Display anggota for this pokja -->
                <tr>
                    <td colspan="8">
                        <h5>Anggota List for {{ $p->nama }}</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>No SK</th>
                                    <th>Handphone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($p->anggota as $a)
                                    <tr>
                                        <td>{{ $a->nip }}</td>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->jabatan }}</td>
                                        <td>{{ $a->no_sk }}</td>
                                        <td>{{ $a->handphone }}</td>
                                        <td>{{ $a->email }}</td>
                                        <td>
                                            <a href="{{ route('skpd.editAnggota', $a->id_anggota) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('skpd.destroyAnggota', $a->id_anggota) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection --}}





<!-- resources/views/skpd/pokja.blade.php -->

{{-- <div class="container">
    <h1>Pokja List</h1>
    <br>
    <a href="{{ route('skpd.createpokja') }}" class="btn btn-primary">Add New Pokja</a>
   
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No SK</th>
                <th>Handphone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokja as $p)
                <tr>
                    <td>{{ $p->id_pokja }}</td>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>{{ $p->no_sk }}</td>
                    <td>{{ $p->handphone }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="{{ route('skpd.showpokja', $p->id_pokja) }}" class="btn btn-info">View</a>
                        <a href="{{ route('skpd.editpokja', $p->id_pokja) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('skpd.destroypokja', $p->id_pokja) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('skpd.createAnggota', $p->id_pokja) }}" class="btn btn-secondary">Add New Anggota</a>
                    </td>
                </tr>
                <!-- Display anggota for this pokja -->
                <tr>
                    <td colspan="8">
                        <h5>Anggota List for {{ $p->nama }}</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>No SK</th>
                                    <th>Handphone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($p->anggota as $a)
                                    <tr>
                                        <td>{{ $a->nip }}</td>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->jabatan }}</td>
                                        <td>{{ $a->no_sk }}</td>
                                        <td>{{ $a->handphone }}</td>
                                        <td>{{ $a->email }}</td>
                                        <td>
                                            <a href="{{ route('skpd.editAnggota', $a->id_anggota) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('skpd.destroyAnggota', $a->id_anggota) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
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
    <h1>Pokja List</h1>
    <br>
    <a href="{{ route('skpd.createpokja') }}" class="btn btn-primary">Add New Pokja</a>
   
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No SK</th>
                <th>Handphone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokja as $p)
                <tr>
                    <td>{{ $p->id_pokja }}</td>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>{{ $p->no_sk }}</td>
                    <td>{{ $p->handphone }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="{{ route('skpd.showpokja', $p->id_pokja) }}" class="btn btn-info">View</a>
                        <a href="{{ route('skpd.editpokja', $p->id_pokja) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('skpd.destroypokja', $p->id_pokja) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('skpd.createAnggota', $p->id_pokja) }}" class="btn btn-secondary">Add New Anggota</a>
                        <button class="btn btn-info" onclick="toggleAnggotaList('{{ $p->id_pokja }}')">Show Anggota</button>
                    </td>
                </tr>
                <!-- Display anggota for this pokja -->
                <tr id="anggota-list-{{ $p->id_pokja }}" style="display:none;">
                    <td colspan="8">
                        <h5>Anggota List for {{ $p->nama }}</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>No SK</th>
                                    <th>Handphone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($p->anggota as $a)
                                    <tr>
                                        <td>{{ $a->nip }}</td>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->jabatan }}</td>
                                        <td>{{ $a->no_sk }}</td>
                                        <td>{{ $a->handphone }}</td>
                                        <td>{{ $a->email }}</td>
                                        <td>
                                            <a href="{{ route('skpd.editAnggota', $a->id_anggota) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('skpd.destroyAnggota', $a->id_anggota) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@section('scripts')
<script>
function toggleAnggotaList(pokjaId) {
    const anggotaList = document.getElementById(`anggota-list-${pokjaId}`);
    if (anggotaList) {
        if (anggotaList.style.display === "none") {
            anggotaList.style.display = "table-row";
        } else {
            anggotaList.style.display = "none";
        }
    } else {
        console.error(`No element found with ID 'anggota-list-${pokjaId}'`);
    }
}
</script>
@endsection
@endsection --}}

@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Pokja List</h1>
    <a href="{{ route('skpd.createPokja') }}" class="btn btn-primary">Add New Pokja</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No SK</th>
                <th>Handphone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokja as $p)
                <tr>
                    <td>{{ $p->id_pokja }}</td>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jabatan }}</td>
                    <td>{{ $p->no_sk }}</td>
                    <td>{{ $p->handphone }}</td>
                    <td>{{ $p->email }}</td>
                    <td>
                        <a href="{{ route('skpd.showPokja', $p->id_pokja) }}" class="btn btn-info">View</a>
                        
                        <a href="{{ route('skpd.editPokja', $p->id_pokja) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('skpd.destroyPokja', $p->id_pokja) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        {{-- <a href="{{ route('skpd.createAnggota', $p->id_pokja) }}" class="btn btn-secondary">Add New Anggota</a> --}}
                        {{-- <button class="btn btn-info" onclick="toggleAnggotaList('{{ $p->id_pokja }}')">Show Anggota</button> --}}
                      
                        <a href="{{ route('skpd.showAnggota', $p->id_pokja) }}" class="btn btn-success">Show Anggota</a>


                    </td>
                </tr>
                <tr id="anggota-list-{{ $p->id_pokja }}" style="display:none;">
                    <td colspan="8">
                        <h5>Anggota List for {{ $p->nama }}</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>No SK</th>
                                    <th>Handphone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($p->anggota as $a)
                                    <tr>
                                        <td>{{ $a->nip }}</td>
                                        <td>{{ $a->nama }}</td>
                                        <td>{{ $a->jabatan }}</td>
                                        <td>{{ $a->no_sk }}</td>
                                        <td>{{ $a->handphone }}</td>
                                        <td>{{ $a->email }}</td>
                                        <td>
                                            <a href="{{ route('skpd.editAnggota', $a->id_anggota) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('skpd.destroyAnggota', $a->id_anggota) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function toggleAnggotaList(pokjaId) {
        const anggotaList = document.getElementById(`anggota-list-${pokjaId}`);
        if (anggotaList.style.display === 'none') {
            anggotaList.style.display = '';
        } else {
            anggotaList.style.display = 'none';
        }
    }
</script>
@endsection
