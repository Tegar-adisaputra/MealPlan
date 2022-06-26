@extends('layout.admin')
@section('container')
<div class="col-md-12 kotak1 mt-5">
    <div class="col">
        <h3 class="mt-0 text-left">
            <button class="btn btn-danger btn" href="">Back</button>
        </h3>
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
@endsection()