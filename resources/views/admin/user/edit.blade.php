@extends('admin.app')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h5 class="text-bold">Edit Data </h5>
                <a href="{{ route('user.index') }}" class="btn  btn-sm text-bold btn-light text-dark">Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('user.update', $data->id) }}">
            <div class="card-body">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror"
                        name="nik" value="{{ $data->nik }}" required autocomplete="nik" autofocus>
                    @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama_pelanggan">Nama</label>
                    <input id="nama_pelanggan" type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror"
                        name="nama_pelanggan" value="{{ $data->nama_pelanggan }}" required autocomplete="nama_pelanggan" autofocus>
                    @error('nama_pelanggan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat">ALAMAT</label>
                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                        value="{{ $data->alamat }}" required autocomplete="alamat" autofocus>
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ $data->email }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_telp">NO TELP</label>
                    <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp"
                        value="{{ $data->no_telp }}" required autocomplete="no_telp" autofocus>
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
                <a href="{{ url('user') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
