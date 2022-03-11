@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Data Pengasuh</div>
                    <div class="card-body">
                        <form action="{{ route('pengasuh.update', $pengasuh->id) }}" method="post">
                            @csrf
                            @method('put')

                            <!-- <div class="form-group">
                                <label for="">ID Pengasuh</label>
                                <input type="text" name="id_pengasuh" value="{{ $pengasuh->id_pengasuh }}"
                                    class="form-control @error('id_pengasuh') is-invalid @enderror">
                                @error('id_pengasuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> -->
                            <div class="form-group">
                                <label for="">Nama Pengasuh</label>
                                <input type="text" name="nama_pengasuh" value="{{ $pengasuh->nama_pengasuh }}"
                                    class="form-control @error('nama_pengasuh') is-invalid @enderror">
                                @error('nama_pengasuh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                            <select name="jk" class="form-control @error('jk') is-invalid @enderror">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki - Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ $pengasuh->tgl_lahir }}"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
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