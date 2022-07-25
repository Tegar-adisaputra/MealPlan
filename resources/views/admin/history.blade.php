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
                <th>Id Booking</th>
                <th>Nama Pemesan</th>
                <th>Nama Resto</th>
                <th>Tanggal Booking</th>
                <th>Pilihan</th>
            </tr>
            @foreach($data as $book)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$book['id_booking']}}</td>
                <td>{{ $book['nama_pemesan'] }}</td>
                <td>{{ $book['nama_resto'] }}</td>
                <td>{{ $book['created_at'] }}</td>
                <td>
                    <button class="btn btn-primary">Detail</button>
                    <button class="btn btn-info">Cetak</button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection()