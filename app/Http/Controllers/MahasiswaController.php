<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
Use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    public function create()
    {
        return view('mahasiswa.tambah');
    }
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        alert()->success('Success','Data Berhasil Disimpan');
        return redirect()->route('mahasiswa');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);// select * from mahasiswa where id=$id
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        toast('Data Berhasil Diubah','success');
        return redirect()->route('mahasiswa');
    }
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Ok, Data Berhasil Dihapus','success');
        return redirect()->route('mahasiswa');
    }
}
