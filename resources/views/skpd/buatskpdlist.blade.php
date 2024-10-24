@extends('layouts.skpd.tabler')
@section('content')
 <!-- Notification Messages -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            FORM CREATE SKPD LIST
          </div>
          <h2 class="page-title">
            Ogan Komering Ulu
          </h2>
        </div>
      </div>
    </div>
</div>
<br>
<div class="container">
    <h1>Create SKPD</h1>
    <form action="{{ route('skpd.storeskpdlist') }}" method="POST">
        @csrf
        @include('skpd.formskpdlist')
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection