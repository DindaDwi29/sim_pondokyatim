@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Data Donasi</div>
                    <div class="card-body">
                        <form action="{{ route('form_donasi.update', $form_donasi->id) }}" method="post">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="">Nama Donatur</label>
                                <input type="text" name="nama_donatur" value="{{ $form_donasi->nama_donatur }}"
                                    class="form-control @error('nama_donatur') is-invalid @enderror">
                                @error('nama_donatur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" value="{{ $form_donasi->email }}"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">No Telepon</label>
                                <input type="text" name="no_telp" value="{{ $form_donasi->no_telp }}"
                                    class="form-control @error('no_telp') is-invalid @enderror">
                                @error('no_telp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nominal</label>
                                <input type="text" name="nominal" value="{{ $form_donasi->nominal }}"
                                    class="form-control @error('nominal') is-invalid @enderror">
                                @error('nominal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Transfer</label>
                                <input type="date" name="tgl_transfer" value="{{ $form_donasi->tgl_transfer }}"
                                    class="form-control @error('tgl_transfer') is-invalid @enderror">
                                @error('tgl_transfer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Bank</label>
                                <select name="nama_bank" class="form-control @error('nama_bank') is-invalid @enderror">
                                    <option value="">Pilih Bank</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BRI">BRI</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="BNI">BNI</option>
                                </select>
                                @error('nama_bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                            <div class="form-group">
                                <label for="">No Rekening</label>
                                <input type="text" name="no_rek" value="{{ $form_donasi->no_rek }}"
                                    class="form-control @error('no_rek') is-invalid @enderror">
                                @error('no_rek')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Trabsfer Ke Bank</label>
                                <select name="transfer_ke_bank" class="form-control @error('transfer_ke_bank') is-invalid @enderror">
                                    <option value="">Pilih Bank</option>
                                    <option value="BCA">BCA 2828 555 222</option>
                                    <option value="BRI">BRI 040 101 000 232 308</option>
                                    <option value="Mandiri">Mandiri 132 004 118 5555</option>
                                    <option value="BNI">BNI 123 3333 120</option>
                                </select>
                                @error('transfer_ke_bank')
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