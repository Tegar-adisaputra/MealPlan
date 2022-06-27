@extends('layout.admin')
@section('container')
<div class="tombol text-right mt-5">
    <form action="{{ route('admin.logout') }}" method="post">
        @csrf
        <button class="btn btn-danger">Logout</button>
    </form>
    <h1 class="text-left mt-2 font">Administrator</h1>
</div>
<div class="col-md-12 kotak mt-5">
    <div class="row">
        <h3 class="mt-2 ml-2 text-center">Restoran Terdaftar</h3>
    </div>
    <div class="row kolom">
        <table class="table table-striped text-center ">
            <tr>
                <th>id</th>
                <th>Nama Restoran</th>
                <th>Alamat</th>
                <th>Pilihan</th>
            </tr>
            @foreach ($data as $resto)
            <tr>
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
        <table class="table table-striped text-center ">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Nama Restoran</th>
                <th>Alamat</th>
                <th>Pilihan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2 Juli 2022</td>
                <td>Angkringan</td>
                <td>Ukraina</td>
                <td>
                    <button class="btn btn-success">Setujui</button>
                    <button class="btn btn-primary">Detail</button>
                    <button class="btn btn-danger ml-5">Tolak</button>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection()