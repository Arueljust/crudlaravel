@extends('admin.app')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h5 class="text-bold">Tambah Data</h5>
                <a href="{{ url('pegawai') }}" class="btn  btn-sm text-bold btn-light text-dark">Kembali</a>
            </div>
        </div>
        <!-- form start -->
        <form method="post" action="{{ route('pegawai.store') }}">
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Pegawai</label>
                    <div>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input Nama Pegawai"
                             name="nama"
                            value="{{ old('nama') }}" required autocomplete="name" autofocus>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Input Alamat"
                             name="alamat" value="{{ old('alamat') }}" required
                            autocomplete="name" autofocus>
                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <div>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Input No Telp"
                             name="no_telp" value="{{ old('no_telp') }}" required
                            autocomplete="name" autofocus>
                        @error('no_telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
