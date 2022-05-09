@extends('admin.app')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h5 class="text-bold">Detail </h5>
                <a href="{{ route('pegawai.index') }}" class="btn  btn-sm text-bold btn-light text-dark">Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">
            <table class="table table-striped table-bordered" id="datatable">
                <thead>
                    <tr>
                        <th>Kode Pegawai</th>
                        <td>{{ $data->kode_pegawai }}</td>
                    </tr>
                    <tr>
                        <th>Nama Pegawai</th>
                        <td>{{ $data->nama }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $data->alamat }}</td>
                    </tr>
                    <tr>
                        <th>No Telp</th>
                        <td>{{ $data->no_telp }}</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
