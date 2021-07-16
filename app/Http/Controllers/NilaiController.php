<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Makul;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['makul','mahasiswa'])->get();
        return view('nilai.index', compact('nilai'));
    }
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        return view('nilai.tambah',compact('mahasiswa','makul'));
    }
    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Success','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);// select * from mahasiswa where id=$id
        return view('nilai.edit', compact('nilai','mahasiswa','makul'));
    }
    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Data Berhasil Diubah','success');
        return redirect()->route('nilai');
    }
    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Ok, Data Berhasil Dihapus','success');
        return redirect()->route('nilai');
    }
}