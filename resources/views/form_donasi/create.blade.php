@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Donasi</h1>
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
                <div class="card-header">Data Donasi</div>
                <div class="card-body">
                   <form action="{{route('form_donasi.store')}}" method="post">
                        @csrf
                       
                        <div class="form-group">
                            <label for="">Masukan Nama Donatur</label>
                            <input type="text" name="nama_donatur" class="form-control @error('nama_donatur') is-invalid @enderror">
                             @error('nama_donatur')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Telepon</label>
                            <input type="text" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                             @error('no_telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nominal</label>
                            <input type="text" name="nominal" class="form-control @error('nominal') is-invalid @enderror">
                             @error('nominal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Transfer</label>
                            <input type="date" name="tgl_transfer" class="form-control @error('tgl_transfer') is-invalid @enderror">
                             @error('tgl_transfer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama Bank</label>
                            <input type="text" name="nama_bank" class="form-control @error('nama_bank') is-invalid @enderror">
                             @error('nama_bank')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Rekening</label>
                            <input type="text" name="no_rek" class="form-control @error('no_rek') is-invalid @enderror">
                             @error('no_rek')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Transfer Ke Bank</label>
                            <input type="text" name="tranfer_ke_bank" class="form-control @error('tranfer_ke_bank') is-invalid @enderror">
                             @error('tranfer_ke_bank')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
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