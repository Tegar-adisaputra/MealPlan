@extends('layout.layout')
@section('container')
<button class="btn btn-secondary mt-4" onclick="history.back()">Back</button>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <h1 class="mt-3 font">History</h1>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row kotak mt-2">
        <table class="table table-striped">
            <tr>
                <th class="text-center align-middle">Booking ID</th>
                <th class="text-center align-middle">Nama Pemesan</th>
                <th class="text-center align-middle">Nama Restoran</th>
                <th class="text-center align-middle">Tanggal Booking</th>
                <th class="text-center align-middle">Waktu Booking</th>
                <th class="text-center align-middle">Aksi</th>
            </tr>
            <tr>
                <td class="text-center align-middle">1</td>
                <td class="text-center align-middle">1</td>
                <td class="text-center align-middle">test</td>
                <td class="text-center align-middle">test</td>
                <td class="text-center align-middle">test</td>
                <td class="text-center align-middle">
                    <button class="btn btn-primary">Detail</button>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection()