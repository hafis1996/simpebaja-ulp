{{-- @extends('layouts.skpd.tabler')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <h2 class="page-title">
            Kirim Pesan ke Userskpd
        </h2>
    </div>
</div>

<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-12">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

              <form action="{{ route('messages.send') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="to_user_id" class="form-label">Pilih Userskpd</label>
        <select name="to_user_id" class="form-control">
            @foreach($userskpd as $user)
                <option value="{{ $user->id }}" {{ request('to_user_id') == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Pesan</label>
        <textarea name="message" class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>

            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.skpd.tabler')

@section('content')
<div class="container">
    <h1>Kirim Pesan Evaluasi</h1>

    <form action="{{ route('messages.send') }}" method="POST">
        @csrf
        <input type="hidden" name="to_user_id" value="{{ $toUser->user_id }}">
        
        <div class="form-group">
            <label for="message">Pesan</label>
            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
</div>
@endsection
