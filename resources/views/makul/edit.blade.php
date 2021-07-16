@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-danger text-light text-center">Edit Mata Kuliah</div>

                <div class="card-body bg-info">
                    <form action="{{ route('update-makul', $makul->id) }}" method="POST" class="form-item">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Makul</label>
                            <input type="text" name="kd_makul" class="form-control col-md-12"
                                value="{{ is_null ($makul) ? '' : $makul->kd_makul }}" ">
                    </div>
                    <div class=" form-group">
                            <label for="nama">Nama Makul</label>
                            <input type="text" name="nama_makul" class="form-control col-md-12"
                                value="{{ is_null ($makul) ? '' : $makul->nama_makul }}">
                        </div>
                        <div class="form-group">
                            <label for="">SKS</label>
                            <input type="number" name="sks" class="form-control col-md-12"
                                value="{{ is_null ($makul) ? '' : $makul->sks }}"">
                    </div>
                    <div class=" box-footer bg-transparent" align="center">
                            <button type="submit" class="btn btn-success" name="simpan">SIMPAN</button>
                            <a href="{{route('makul')}}" class="btn btn-danger">BATAL</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection