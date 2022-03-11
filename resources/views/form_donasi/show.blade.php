@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Tampil Data Donasi</div>
                    <div class="card-body">
                        <form action="{{ route('form_donasi.update', $form_donasi->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama Donatur</label>
                                <input type="text" name="nama_donatur" value="{{ $form_donasi->nama_donatur }}"disabled
                                    class="form-control @error('nama_donatur') is-invalid @enderror">
                                @error('nama_donatur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{ $form_donasi->email }}"disabled
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_telp" value="{{ $form_donasi->no_telp }}"disabled
                                    class="form-control @error('no_telp') is-invalid @enderror">
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nominal</label>
                                <input type="text" name="nominal" value="{{ $form_donasi->nominal }}"disabled
                                    class="form-control @error('nominal') is-invalid @enderror">
                                @error('nominal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Transfer</label>
                                <input type="date" name="tgl_transfer" value="{{ $form_donasi->tgl_transfer }}"disabled
                                    class="form-control @error('tgl_transfer') is-invalid @enderror">
                                @error('tgl_transfer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Bank</label>
                                <input type="text" name="nama_bank" value="{{ $form_donasi->nama_bank }}"disabled
                                    class="form-control @error('nama_bank') is-invalid @enderror">
                                @error('nama_bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Rekening</label>
                                <input type="text" name="no_rek" value="{{ $form_donasi->no_rek }}"disabled
                                    class="form-control @error('no_rek') is-invalid @enderror">
                                @error('no_rek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tranfer Ke Bank</label>
                                <input type="text" name="transfer_ke_bank" value="{{ $form_donasi->transfer_ke_bank }}"disabled
                                    class="form-control @error('transfer_ke_bank') is-invalid @enderror">
                                @error('transfer_ke_bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <a href="{{url('admin/form_donasi')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection