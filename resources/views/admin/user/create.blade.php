@extends('admin.app')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h5 class="text-bold">Tambah Data User</h5>
                <a href="{{ url('user') }}" class="btn  btn-sm text-bold btn-light text-dark">Kembali</a>
            </div>
        </div>
        <!-- form start -->
        <form method="post" action="{{ route('user.store') }}">
            <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <div>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                        placeholder="Input NIK" name="nik" value="{{ old('nik') }}" required autocomplete="name" autofocus>
                        @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="nama_pelanggan">Nama</label>
                    <div>
                        <input type="text" class="form-control @error('nama_pelanggan') is-invalid @enderror"
                            id="nama_pelanggan" placeholder="Input Nama Pelanggan" name="nama_pelanggan"
                            value="{{ old('nama_pelanggan') }}" required autocomplete="name" autofocus>
                        @error('nama_pelanggan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            placeholder="Input Alamat" name="alamat" value="{{ old('alamat') }}" required
                            autocomplete="name" autofocus>
                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <div>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Input @email" name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <div>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                            placeholder="Input No Telp" name="no_telp" value="{{ old('no_telp') }}" required
                            autocomplete="name" autofocus>
                        @error('no_telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="name" placeholder="Password">

                        @error('password')
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
