@extends('layouts.app')

@section('content')
<div class="jumbotron">
  @if(session('mssg'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('mssg') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
  <div class="container">
    <h1 class="display-5">Pendaftaran santri baru</h1>
    <p>Assalamu'alaikum, selamat datang di halaman pendaftaran santri baru albinaa tahun ajaran 2021-2022.<br> Silahkan klik link dibawah untuk melanjutkan pendaftaran.</p>
    <p><a class="btn btn-primary btn-lg" href="/daftar/create" role="button">Daftar &raquo;</a></p>
  </div>
</div>
@endsection