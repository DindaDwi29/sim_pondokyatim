@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> Tampil Data Anak Asuh</div>
                    <div class="card-body">
                        <form action="{{ route('anak_asuh.update', $anak_asuh->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">ID Pengasuh</label>
                                <input type="text" name="id_pengasuh" value="{{ $anak_asuh->id_pengasuh }}" disabled
                                    class="form-control @error('id_pengasuh') is-invalid @enderror">
                                @error('id_pengasuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Anak</label>
                                <input type="text" name="nama_anak" value="{{ $anak_asuh->nama_anak }}" disabled
                                    class="form-control @error('nama_anak') is-invalid @enderror">
                                @error('nama_anak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" value="{{ $anak_asuh->jk }}" disabled
                                    class="form-control @error('jk') is-invalid @enderror">
                                @error('jk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ $anak_asuh->tgl_lahir }}" disabled
                                    class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" name="status" value="{{ $anak_asuh->status }}" disabled
                                    class="form-control @error('status') is-invalid @enderror">
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                            <a href="{{url('admin/anak_asuh')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection