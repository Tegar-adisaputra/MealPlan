@extends('layout.admin')
@section('container')
<div class="col-md-12 mt-5">
    <div class="col">
        <h3 class="mt-0 text-left">
            <button class="btn btn-secondary btn"onclick="history.back()">Back</button>
        </h3>
    </div>
<div class="col-md-12 kotak mt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 class="mt-3 text-center">Restoran Terdaftar</h3>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row kolom">
        <table class="table table-striped text-center ">
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Nama Restoran</th>
                    <th>Alamat</th>
                    <th>Pilihan</th>
                </tr>
                    @foreach ($data as $resto)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $resto['id'] }}</td>
                    <td>{{ $resto['nama_resto'] }}</td>
                    <td>{{ $resto['alamat_resto'] }}</td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-primary">Detail</button>
                        <button class="btn btn-danger ml-5">Hapus</button>
                    </td>
                </tr>
                    @endforeach
            </table>
    </div>
</div>
<div class="col-md-12 kotak mt-5">
    <div class="row">
        <h3 class="mt-2 ml-2 text-center">Request Pending</h3>
    </div>
    <div class="row kolom">
        <form action="{{route('admin.halaman_restoran')}}" method="post">
            @csrf
            <table class="table table-striped text-center ">
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Nama Restoran</th>
                    <th>Alamat</th>
                    <th>Pilihan</th>
                </tr>
                @foreach($data as $resto)
                <tr>
                    <input type="hidden" value="{{$resto['username']}}" name="username">
                    <input type="hidden" value="{{$resto['deskripsi_resto']}}" name="deskripsi_resto">
                    <input type="hidden" value="{{$resto['no_telp']}}" name="no_telp">
                    <input type="hidden" value="{{$resto['nama_pemilik']}}" name="nama_pemilik">
                    <input type="hidden" value="{{$resto['nohp_pemilik']}}" name="nohp_pemilik">
                    <input type="hidden" value="{{$resto['alamat_resto']}}" name="alamat_resto">
                    <input type="hidden" value="{{$resto['map_resto']}}" name="map_resto">
                    <input type="hidden" value="{{$resto['provinsi']}}" name="provinsi">
                    <input type="hidden" value="{{$resto['kabupatenkota']}}" name="kabupatenkota">
                    <input type="hidden" value="{{$resto['kapasitas']}}" name="kapasitas">
                    <input type="hidden" value="{{$resto['password']}}" name="password">
                    <input type="hidden" value="{{$resto['maksimal_booking']}}" name="maksimal_booking">
                    <input type="hidden" value="{{$resto['gambar']}}" name="name">
                    <input type="hidden" value="{{$resto['nama_resto']}}" name="nama_resto">
                    <input type="hidden" value="{{$resto['alamat']}}" name="alamat">
                    <input type="hidden" value="{{$resto['email']}}" name="email">
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $resto['created_at'] }}</td>
                    <td>{{ $resto['nama_resto'] }}</td>
                    <td>{{ $resto['alamat_resto'] }}</td>
                    <td>
                        <button class="btn btn-success" type="submit">Setujui</button>
                        <button class="btn btn-primary">Detail</button>
                        <button class="btn btn-danger ml-5">Tolak</button>
                    </td>
                </tr>
                @endforeach()
            </table>
        </form>
    </div>
</div>
@endsection()