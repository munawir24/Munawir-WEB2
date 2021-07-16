@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary">
                <div class="card-header bg-dark text-light">Data Mata Kuliah
                    <a href="{{ route('tambah-makul') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-success text-light">
                                <th class="text-center">NO </th>
                                <th class="text-center">KODE MAKUL</th>
                                <th class="text-center">NAMA MAKUL</th>
                                <th class="text-center">SKS</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                            @foreach ($makul as $mk)
                            <tr class="bg-light">
                                <td class="text-center">{{ $mk->id }}</td>
                                <td>{{ $mk->kd_makul }}</td>
                                <td>{{ $mk->nama_makul }}</td>
                                <td class="text-center">{{ $mk->sks }}</td>
                                <td class="text-center">
                                    <a href="{{ route('edit-makul', $mk->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus-makul', $mk->id) }}"
                                        class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection