@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-success text-light text-center">Input Data Mahasiswa</div>

                <div class="card-body bg-info">
                    <form action="{{ route('simpan-mahasiswa')}}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label for="">NPM</label>
                            <input type="number" name="npm" class="form-control col-md-12" placeholder="Masukkan NPM">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama_mahasiswa" class="form-control col-md-12"
                                placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-12"
                                placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-12">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select type="text" name="jenis_kelamin" id="" class="form-control col-md-12">
                                <option value="">--- Jenis Kelamin ---</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="tet" name="telepon" class="form-control col-md-12"
                                placeholder="Masukkan Telepon">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control col-md-12"
                                placeholder="Masukkan Alamat">
                        </div>
                        <div class="box-footer bg-transparent" align="center">
                            <button type="submit" class="btn btn-success" name="simpan">SIMPAN</button>
                            <a href="{{route('mahasiswa')}}" class="btn btn-danger">BATAL</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection