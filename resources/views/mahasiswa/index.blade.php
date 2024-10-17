@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="mahasiswa/create" class="btn btn-sm btn-primary">Tambah Data</a>
                    <p class="card-title mb-0">Data Mahasiswa</p>
                    <div class="table-responsive">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>HP</th>
                                    <th>Prodi</th>
                                    <th>Kelas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @empty($mahasiswa)
                                    <tr>
                                        <td colspan="6">Tidak ada data</td>
                                    </tr>
                                @else
                                    @foreach ($mahasiswa as $item)
                                        <tr>
                                            <td>{{ $item->nim }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td>{{ $item->user->email }}</td>
                                            <td>{{ $item->user->hp }}</td>
                                            <td>{{ $item->prodi->nama }}</td>
                                            <td>{{ $item->kelas }}</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning">Ubah</a>
                                                <a href="/mahasiswa/delete/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endempty
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
