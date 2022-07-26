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
            <div class="col-md-12 kotak mt-5">
                <div class="row">
                    <h3 class="mt-2 ml-2 text-center">History Pesanan</h3>
                </div>
                <div class="row kolom">
                    <table class="table table-striped text-center ">
                        <tr>
                            <th>No</th>
                            <th>Pemesan</th>
                            <th>Kapasitas</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Kode</th>
                            <th>Status</th>
                        </tr>
                        <?php $no=1; ?>
                        @foreach ($booking as $data)
                        <tr>
                            <td class="text-center align-middle"> {{ $no++ }} </td>
                            <td class="text-center align-middle">{{ $data->nama_pemesan }}</td>
                            <td class="text-center align-middle">{{ $data->jumlah_kursi }}</td>
                            <td class="text-center align-middle">{{ $data->tanggal }}</td>
                            <td class="text-center align-middle">{{ $data->jam_masuk }}</td>
                            <td class="text-center align-middle">{{ $data->kode }}</td>
                            <td class="text-center align-middle">{{ $data->status }}</td>
                        </tr>
                        @endforeach
                        <!-- <tr>
                            <td>1</td>
                            <td>Aditya</td>
                            <td>5 Orang</td>
                            <td>8 Juli 2022</td>
                            <td>16.00</td>
                            <td>
                                <button class="btn btn-success">Setujui</button>
                                <button class="btn btn-danger ml-3">Tolak</button>
                            </td>
                        </tr> -->
                    </table>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection()