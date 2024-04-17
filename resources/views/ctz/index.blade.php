@extends('layouts.master')

@section('web-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Kartu Keluarga</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Kartu Keluarga</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card p-4">
                    <div class="card-header">
                        <a href="{{ route('ctz-create') }}" role="button" class="btn btn-success">Tambah Penduduk</a>
                    </div>
                    <div class="card-body">
                        <table id="table-kk" class="table table-striped">
                            <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Detail Profil</th>
                                <th>Detail KK</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ctzs as $ctz)
                                <tr>
                                    <td>{{ $ctz->nik }}</td>
                                    <td>{{ $ctz->nama }}</td>
                                    <td>
                                        <div><b>Alamat: </b>{{ $ctz->alamat }}</div>
                                        <div><b>Tanggal Lahir: </b>{{ $ctz->tgl_lahir }}</div>
                                        <div><b>Gol Darah: </b>{{ $ctz->gol_darah }}</div>
                                        <div><b>Agama: </b>{{ $ctz->agama }}</div>
                                    </td>
                                    <td>{{ $ctz->kartuKeluarga->no }} - {{ $ctz->kartuKeluarga->nama_kepala }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection

@section('ExtraCSS')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('ExtraJS')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $('#table-kk').DataTable();
    </script>
@endsection
