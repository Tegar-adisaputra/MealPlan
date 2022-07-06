@extends('layout.resto')
@section('container')


<br>
<div class="col">
    <h3 class="mt-0 text-left">
        <button class="btn btn-danger btn" onclick="window.location.href = 'http://127.0.0.1:8000/admin_resto/home';"onclick="history.href">Back</button>
    </h3>
</div>

<div class="col-md-12 text-center">
    <div class="row text-center mt-5">
        <div class="col-md-12 text-center kotakprofil">
            <!-- <h3 class="mt-3">Daftar Pesanan</h3>
            <div class="row">
            <div class="row kolom">
        <table class="table table-striped text-center ">
                <tr>
                    <div class="col md-6">
                    <h3>No</h3>
                    </div>
                    <div class="col md-6">
                    <h3>Pemesan</h3>
                    </div>
                    <div class="col md-3">
                    <h3>Kapasitas</h3>
                    </div>
                    <div class="col md-3">
                    <h3>Tanggal</h3>
                    </div>
                    <div class="col md-3">
                    <h3>Jam</h3>
                    </div>
                    <div class="col md-3">
                    <h3>Pilihan</h3>
                    <button class="btn btn-success">Edit</button>
                        <button class="btn btn-primary">Detail</button>
                        <button class="btn btn-danger ml-5">Hapus</button>
                    </div>
                </tr> -->

                <div class="col-md-12 kotak mt-5">
    <div class="row">
        <h3 class="mt-2 ml-2 text-center">Daftar Pesanan</h3>
    </div>
    <div class="row kolom">
        <table class="table table-striped text-center ">
            <tr>
                <th>No</th>
                <th>Pemesan</th>
                <th>Kapasitas</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Pilihan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Aditya</td>
                <td>5 Orang</td>
                <td>8 Juli 2022</td>
                <td>16.00</td>
                <td>
                    <button class="btn btn-success">Setujui</button>
                    <button class="btn btn-danger ml-3">Tolak</button>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection()