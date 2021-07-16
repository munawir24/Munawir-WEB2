@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-danger text-light text-center">Edit Mahasiwa</div>

                <div class="card-body bg-info">
                    <form action="{{ route('update-mahasiswa', $mahasiswa->id) }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label for="">NPM</label>
                            <input type="number" name="npm" class="form-control col-md-12" placeholder="Masukkan NPM"
                                value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->npm }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama_mahasiswa" class="form-control col-md-12"
                                placeholder="Masukkan Nama"
                                value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->nama_mahasiswa }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control col-md-12"
                                placeholder="Masukkan Tempat Lahir"
                                value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control col-md-12"
                                value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select type="text" name="jenis_kelamin" id="" class="form-control col-md-12">
                                <option value="L" {{ $mahasiswa->jenis_kelamin=='L' ? 'selected':''}}>Laki-laki</option>
                                <option value="P" {{ $mahasiswa->jenis_kelamin=='P' ? 'selected':''}}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="tet" name="telepon" class="form-control col-md-12"
                                placeholder="Masukkan Telepon"
                                value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->telepon }}">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control col-md-12"
                                placeholder="Masukkan Alamat"
                                value="{{ is_null ($mahasiswa) ? '' : $mahasiswa->alamat }}">
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