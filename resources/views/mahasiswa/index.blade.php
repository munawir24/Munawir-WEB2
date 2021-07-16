@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-secondary">
                <div class="card-header bg-dark text-light">Data Mahasiswa
                    <a href="{{ route('tambah-mahasiswa') }}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr class="bg-success text-light">
                                <th class="text-center">NO</th>
                                <th class="text-center">NPM</th>
                                <th class="text-center">NAMA LENGKAP</th>
                                <th class="text-center">Tempat Tanggal Lahir</th>
                                <th class="text-center">JENIS KELAMIN</th>
                                <th class="text-center">TELEPON</th>
                                <th class="text-center">ALAMAT</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                            @foreach ($mahasiswa as $mhs)
                            <tr class="bg-light">
                                <td class="text-center">{{ $mhs->id }}</td>
                                <td>{{ $mhs->npm }}</td>
                                <td>{{ $mhs->nama_mahasiswa }}</td>
                                <td>{{ $mhs->tempat_lahir.', '.$mhs->tgl_lahir }}</td>
                                <td>{{ $mhs->jenis_kelamin =="L"?'Laki-laki':'Perempuan' }}</td>
                                <td>{{ $mhs->telepon }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td class="text-center">
                                    <a href="{{ route('edit-mahasiswa', $mhs->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ route('hapus-mahasiswa', $mhs->id) }}"
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