@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Biodata calon santri baru</h1>
    <form action="/daftar" method="POST">
    @csrf
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="FULAN NAMA PANJANG FULAN" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tempat_lahir">Tempat lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Somewhere" required>
            </div>
            <div class="form-group col-md-3">
                <label for="tgl_lahir">Tanggal lahir</label>
                <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="20 juli 2999" required>
            </div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Somewhere" required>
        </div>
        <div class="form-group">
            <label for="asal_sekolah">Asal sekolah</label>
            <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Somewhere" required>
        </div>
        <input type="submit" value="Simpan">
    </form>
</div>
@endsection