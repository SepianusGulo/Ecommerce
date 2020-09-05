<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public  function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('backend.siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
        \App\Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'Yeah! Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('backend.siswa.edit');
    }
}
