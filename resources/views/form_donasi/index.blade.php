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
                        Donasi
                        <a href="{{ route('kegiatan.create') }}" class="btn btn-sm btn-outline-primary float-right">Buat
                            Donasi</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Donatur</th>
                                    <th>Email</th>
                                    <th>No Telp</th>
                                    <th>Nominal</th>
                                    <th>Tanggal Transfer</th>
                                    <th>Nama Bank</th>
                                    <th>No Rekening</th>
                                    <th>Transfer Ke Bank</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($form_donasi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_donatur }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->no_telp }}</td>
                                        <td>{{ $data->nominal }}</td>
                                        <td>{{ $data->tgl_transfer }}</td>
                                        <td>{{ $data->nama_bank }}</td>
                                        <td>{{ $data->no_rek }}</td>
                                        <td>{{ $data->transfer_ke_bank }}</td>
                                        <td>
                                            <form action="{{ route('form_donasi.destroy', $data->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('form_donasi.edit', $data->id) }}"
                                                    class="btn btn-outline-info">Edit</a>
                                                <a href="{{ route('form_donasi.show', $data->id) }}"
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