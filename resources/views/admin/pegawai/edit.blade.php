@extends('admin.app')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h5 class="text-bold">Edit Data </h5>
                <a href="{{ route('pegawai.index') }}" class="btn  btn-sm text-bold btn-light text-dark">Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('pegawai.update', $data->id) }}">
            <div class="card-body">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nama">Nama Pegawai</label>
                    <input id="name" type="text" class="form-control @error('nama') is-invalid @enderror"
                        name="nama" value="{{ $data->nama }}" required autocomplete="name" autofocus>
                    @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input id="name" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                        value="{{ $data->alamat }}" required autocomplete="name" autofocus>
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                        value="{{ $data->no_telp }}" required autocomplete="name" autofocus>
                    @error('no_telp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-outline-danger">Save</button>
                <a href="{{ url('pegawai') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
