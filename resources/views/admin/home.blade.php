@extends('layout.admin')
@section('container')
<div class="tombol text-right mt-5">
    <form action="{{ route('admin.logout') }}" method="post">
        @csrf
        <button class="btn btn-danger">Logout</button>
    </form>
    <h1 class="text-left mt-2 font">Administrator</h1>
</div>

<div class="col-md-12 mt-5 text-center">
    <div class="row text-center">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 kotak1">
            <a href="/admin/restoterdaftar" style="text-decoration:none;">
                <h1 class="mt-2" style="color:#707070;">Daftar Restoran</h1>
            </a>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row text-center mt-4">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 kotak1">
            <a href="/admin/restoterdaftar" style="text-decoration:none;">
                <h1 class="mt-2" style="color:#707070;">Request Pending</h1>
            </a>
        </div>
        <div class="col-md-3">
        </div>
    </div>
    <div class="row text-center mt-4">
        <div class="col-md-3">
        </div>
        <div class="col-md-6 kotak1">
            <a href="/admin/restoterdaftar" style="text-decoration:none;">
                <h1 class="mt-2" style="color:#707070;">Riwayat Transaksi</h1>
            </a>
        </div>
        <div class="col-md-3">
        </div>
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