@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-success text-light text-center">Input Data Nilai</div>

                <div class="card-body bg-info">
                    <form action="{{ route('simpan-nilai')}}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Mahasiswa</label>
                            <select name="mahasiswa_id" class="form-control col-md-12">
                                @foreach($mahasiswa as $m)
                                <option value="{{$m->id}}">{{$m->nama_mahasiswa}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Makul</label>
                            <select name="makul_id" class="form-control col-md-12">
                                @foreach($makul as $m)
                                <option value="{{$m->id}}">{{$m->nama_makul}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="">Nilai</label>
                            <input type="number" name="nilai" class="form-control col-md-12"
                                placeholder="Masukkan Nilai">
                        </div>
                        <div class="box-footer bg-transparent" align="center">
                            <button type="submit" class="btn btn-success" name="simpan">SIMPAN</button>
                            <a href="{{route('nilai')}}" class="btn btn-danger">BATAL</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection