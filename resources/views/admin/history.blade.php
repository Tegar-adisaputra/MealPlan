@extends('layout.admin')
@section('container')
<button class="btn btn-secondary mt-4" onclick="history.back()">Back</button>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
            <h1 class="mt-3 font">Order History</h1>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row kotak mt-2">
        <table class="table table-striped">
            <tr>
                <th>No.</th>
                <th>id booking</th>
                <th>Nama Pemesan</th>
                <th>Nama Resto</th>
                <th>Tanggal Booking</th>
                <th>Pilihan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>tets</td>
                <td>test</td>
                <td>0101</td>
                <td>
                    <button class="btn btn-primary">Detail</button>
                    <button class="btn btn-info">Cetak</button>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection()