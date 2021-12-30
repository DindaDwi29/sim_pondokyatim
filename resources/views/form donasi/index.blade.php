@extends('adminlte::page')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Form Donasi</h1>
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
                    <div class="card-header">
                        Donaso
                        <a href="{{ route('kegiatan.create') }}" class="btn btn-sm btn-outline-primary float-right">Buat
                            Donasi</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Gambar</th>
                                    <th>Isi</th>
                                    <th>Tanggal Kegiatan</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($kegiatan as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="image"></td>
                                        <td>{{ $data->isi }}</td>
                                        <td>{{ $data->tgl_kegiatan }}</td>
                                        <td>
                                            <form action="{{ route('kegiatan.destroy', $data->judul) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('kegiatan.edit', $data->judul) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('kegiatan.show', $data->judul) }}"
                                                    class="btn btn-outline-warning">Tampil</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Hapus</button>
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