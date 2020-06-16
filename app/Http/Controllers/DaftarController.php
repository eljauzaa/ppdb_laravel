<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;

class DaftarController extends Controller
{
    public function index(){
        $lihat_santri = Santri::all();

        return view('santri', [
            'santri' => $lihat_santri
        ]);
    }

    public function show($id){
        $santri = Santri::find($id);

        return view('show', ['santri' => $santri]);
    }

    public function create(){
        return view('create');
    }

    public function store(){
        $santri = new Santri();
        $santri->nama = request('nama');
        $santri->tempat_lahir = request('tempat_lahir');
        $santri->tgl_lahir = request('tgl_lahir');
        $santri->alamat = request('alamat');
        $santri->asal_sekolah = request('asal_sekolah');

        $santri->save();
        return redirect('/')->with('mssg', 'Data sudah tersimpan');
    }
}
