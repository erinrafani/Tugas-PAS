@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-12">
                <h1 class="m-0">Laporan Keuangan</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-25">
            <div class="card">
                <div class="card-header">
                    Laporan Keuangan
                    <a href="{{route('laporan.create')}}" class="float-right btn btn-sm btn-outline-primary">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Id Laporan</th>
                                <th>Id Pengeluaran</th>
                                <th>Id Donasi</th>
                                <th>Id Konfirmasi</th>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                                <th>Saldo</th>
                            </tr>
                            @foreach($laporan as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->pengeluaran_id}}</td>
                                    <td>{{$data->donasi_id}}</td>
                                    <td>{{$data->konfirmasi_id}}</td>
                                    <td>{{$data->pemasukan}}</td>
                                    <td>{{$data->pengeluaran}}</td>
                                    <td>{{$data->saldo}}</td>
                                    <td>
                                        <form action="{{route('laporan.destroy', $data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{route('laporan.edit', $data->id)}}" class="btn btn-outline-info">Edit</a>
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
