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
                <th class="text-center align-middle">No.</th>
                <th class="text-center align-middle">Id Booking</th>
                <th class="text-center align-middle">Nama Pemesan</th>
                <th class="text-center align-middle">Nama Restoran</th>
                <th class="text-center align-middle">Tanggal Booking</th>
                <th class="text-center align-middle">Kode Booking</th>
                {{-- <th class="text-center align-middle">QR Code</th> --}}
            </tr>
            
            <?php $no=1; ?>
            @foreach ($history as $data)
            <tr>
                <td class="text-center align-middle"> {{ $no++ }} </td>
                <td class="text-center align-middle">{{ $data->id_booking }}</td>
                <td class="text-center align-middle">{{ $data->nama_pemesan }}</td>
                <td class="text-center align-middle">{{ $data->nama_resto }}</td>
                <td class="text-center align-middle">{{ $data->created_at }}</td>
                <td class="text-center align-middle">{{ $data->kode }}</td>
                {{-- <td class="text-center align-middle">
                    <button class="btn btn-primary">Detail</button>
                </td> --}}
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection()