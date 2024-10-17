@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Data Mahasiswa</h4>
                    <form class="forms-sample" action="/mahasiswa/store" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="user_id">Pilih User</label>                            
                            <select name="user_id" id="" class="form-select">
                                <option value="Pilih" disabled selected>Pilih</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Pilih Prodi</label>
                            <select name="prodi_id" id="" class="form-select">
                                <option value="Pilih" disabled selected>Pilih</option>
                                @foreach ($prodi as $item)
                                    <option value="{{ $item->id }}">{{ $item->kode }} - {{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>                            
                            <div class="form-check">
                                <label for="pria" class="form-check-label">
                                    <input type="radio" name="jenis_kelamin" id="pria" class="form-check-input">
                                    Pria
                                </label>
                            </div>
                            <div class="form-check">
                                <label for="wanita" class="form-check-label">
                                    <input type="radio" name="jenis_kelamin" id="wanita" class="form-check-input">
                                    Wanita
                                </label>
                            </div>                                                        
                            @error('jenis_kelamin')
                                <span style="color: red;">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
