@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Detail calon santri baru</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">{{ $santri->nama }}</h1>
                <div class="row">
                    <div class="col-sm-4 text-left">Alamat :</div>
                    <div class="col-sm-8 text-left">{{ $santri->alamat }}</div>
                    <div class="col-sm-4 text-left">tempat dan tanggal lahir :</div>
                    <div class="col-sm-8 text-left">{{ $santri->tempat_lahir }}, {{ $santri->tgl_lahir }}</div>
                    <div class="col-sm-4 text-left">Asal sekolah :</div>
                    <div class="col-sm-8 text-left">{{ $santri->asal_sekolah }}</div>
                </div>
                <a href="/daftar"><button type="button" class="btn btn-lg btn-outline-primary">Kembali</button></a>
            </div>
        </div>
    </div>

    @endsection