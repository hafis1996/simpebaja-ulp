{{-- <!DOCTYPE html>
<html> --}}

    @extends('layouts.skpd.tabler')
@section('content')
{{-- <head>
    <title>Add User ULP</title>
</head>
<body> --}}
  

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div class="container">
      <h1>Add New User ULP</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        {{-- <div class="form-group">
            <label for="ulp_id">ULP ID:</label>
            <input type="text" name="ulp_id" id="ulp_id" class="form-control" required>
        </div> --}}
        <div class="form-group">
            <label for="ulp_nip">NIP:</label>
            <input type="text" name="ulp_nip" id="ulp_nip" class="form-control">
        </div>
        <div class="form-group">
            <label for="ulp_nama">Nama:</label>
            <input type="text" name="ulp_nama" id="ulp_nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="ulp_alamat">Alamat:</label>
            <textarea name="ulp_alamat" id="ulp_alamat" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="ulp_email">Email:</label>
            <input type="email" name="ulp_email" id="ulp_email" class="form-control">
        </div>
        <div class="form-group">
            <label for="ulp_hp">No HP:</label>
            <input type="text" name="ulp_hp" id="ulp_hp" class="form-control">
        </div>
        <div class="form-group">
            <label for="ulp_username">Username:</label>
            <input type="text" name="ulp_username" id="ulp_username" class="form-control">
        </div>
        <div class="form-group">
            <label for="ulp_password">Password:</label>
            <input type="password" name="ulp_password" id="ulp_password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="ulp_password_confirmation">Confirm Password:</label>
            <input type="password" name="ulp_password_confirmation" id="ulp_password_confirmation" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="level">Level:</label>
            <select name="level" id="level" required class="form-control">
                <option value="superadmin">Super Admin</option>
                <option value="admin">Admin</option>
            </select>
        </div>
        <div >
            <button type="submit" class="btn btn-primary">Add User ULP</button>
        </div>
    </form>
</div>
{{-- </body> --}}
{{-- </html> --}}
@endsection


