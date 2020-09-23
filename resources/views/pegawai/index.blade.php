@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-10">
        <div>
            <a href="{{ route('pegawai.create') }}" class="btn-sm btn-danger"> Tambah Data Pegawai</a>
        </div>
        
        <div class="card">
            <div class="card-header"> Data Pegawai </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>Id Pegawai</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                    </tr>
                    @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->id_pegawai }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td>{{ $data->alamat }}</td>
                        </tr>    
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection