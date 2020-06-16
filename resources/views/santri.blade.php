@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Daftar Calon santri baru albinaa</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Asal sekolah</th>
              <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($santri as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s ->nama }}</td>
                <td>{{ $s ->alamat }}</td>
                <td>{{ $s ->asal_sekolah }}</td>
                <td><a href="/daftar/{{ $s -> id }}"><button class="btn btn-success btn-sm text-white">Lihat</button></a></td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection