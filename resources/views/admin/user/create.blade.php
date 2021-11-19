@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Laporan</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Laporan keuangan</div>
                <div class="card-body">
                    <form action="{{route('laporan.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Id Laporan:</label>
                        <input type="text" name="idLaporan" class="form-control @error('idLaporan') is-invalid @enderror">
                        @error('idLaporan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Id Pengeluaran :</label>
                        <input type="text" name="pengeluaran_id" class="form-control @error('pengeluaran_id') is-invalid @enderror">
                        @error('pengeluaran_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Id Donasi :</label>
                        <input type="text" name="donasi_id" class="form-control @error('donasi_id') is-invalid @enderror">
                        @error('donasi_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Id Konfirmasi :</label>
                        <input type="text" name="konfirmasi_id" class="form-control @error('konfirmasi_id') is-invalid @enderror">
                        @error('konfirmasi_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Pemasukan:</label>
                        <input type="text" name="pemasukan" class="form-control @error('pemasukan') is-invalid @enderror">
                        @error('pemasukan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Pengeluaran :</label>
                        <input type="text" name="pengeluaran" class="form-control @error('pengeluaran') is-invalid @enderror">
                        @error('pengeluaran')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Saldo :</label>
                        <input type="text" name="saldo" class="form-control @error('saldo') is-invalid @enderror">
                        @error('saldo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="reset" class="btn btn-outline-warning">Reset</button>
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
