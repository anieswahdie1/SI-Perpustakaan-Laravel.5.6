@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header"> Input Data Pegawai </div>
            <div class="card-body">
                <!-- untuk menampilkan list daftar error -->
                @if (Count($errors) > 0) <!-- hitung jumlah error, jika lebih dari 0 kerjakan berikut -->
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $pesan) <!-- tampung semua error ke dalam variabel $pesan -->
                                <li>{{ $pesan }}</li> <!-- list error -->
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pegawai.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="id_pegawai">ID Pegawai</label>
                        <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" placeholder="ID Pegawai">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Pegawai">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" >
                            <option value="">-- Pilih --</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Nomor HP</label>
                        <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="Nomor HP">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection