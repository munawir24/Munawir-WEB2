@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-secondary">
                <div class="card-header bg-dark text-light text-bold">Data Nilai
                    <a href="{{route('tambah-nilai')}}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-success text-light">
                                <th class="text-center">NO</th>
                                <th class="text-center">NPM</th>
                                <th class="text-center">NAMA MAHASISWA</th>
                                <th class="text-center">NAMA MAKUL</th>
                                <th class="text-center">SKS</th>
                                <th class="text-center">NILAI</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                            @foreach ($nilai as $nl)
                            <tr class="bg-light">
                                <td class="text-center">{{ $nl->id }}</td>
                                <td>{{ $nl->mahasiswa->npm }}</td>
                                <td>{{ $nl->mahasiswa->nama_mahasiswa }}</td>
                                <td>{{ $nl->makul->nama_makul }}</td>
                                <td class="text-center">{{ $nl->makul->sks }}</td>
                                <td class="text-center">{{ $nl->nilai}}</td>
                                <td>
                                    <a href="{{ route('edit-nilai', $nl->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus-nilai', $nl->id) }}"
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