@extends('layouts.master')

@section('web-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Data Kartu Keluarga</h1>
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
                    <div class="card-body">

                        @if($errors->any())
                            <div class="alert alert-danger">
                                {{ implode('', $errors->all(':message')) }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('kk-update', ['kartuKeluarga' => $kk->no]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="no-kk">Nomor Kartu Keluarga</label>
                                <input type="text" class="form-control" id="no-kk"
                                       placeholder="Contoh: 3171021415230005" name="no" required readonly
                                       maxlength="16" value="{{ $kk->no }}">
                            </div>
                            <div class="form-group">
                                <label for="nama-kk">Nama Kepala Keluarga</label>
                                <input type="text" class="form-control" id="nama-kk" placeholder="Contoh: John Doe"
                                       required name="nama_kepala" maxlength="100" value="{{ $kk->nama_kepala }}" autofocus>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection

@section('ExtraCSS')

@endsection

@section('ExtraJS')

@endsection
