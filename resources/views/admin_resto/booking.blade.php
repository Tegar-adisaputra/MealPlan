@extends('layout.resto')
@section('container')
@include('sweetalert::alert')

 <div class="notif">
    @if(session()->has('updateTanggalSukses'))
      <div class="alert alert-success alert-dismissible fade show" style="border-radius:10px;" role="alert">
        {{ session('updateTanggalSukses') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif


<br>
<div class="col">
    <h3 class="mt-0 text-left">
        <button class="btn btn-danger btn" onclick="window.location.href = 'http://127.0.0.1:8000/admin_resto/home';"onclick="history.href">Back</button>
    </h3>
</div>

<div class="col-md-12 text-center">
    <div class="row text-center mt-5">
        <div class="col-md-12 text-center kotakprofil mb-3">
            <div class="col-md-12 kotak mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin_resto.updatetanggal', ['id' => $_COOKIE['restoranid']]) }}" method="post">
                            @csrf
                            <label for="pengaturan_tanggal_booking">
                                Pengaturan Tanggal Booking
                            </label>
                            <input type="number" min="0" id="pengaturan_tanggal_booking" name="pengaturan_tanggal_booking" value="{{ $pengaturan_maksimal_booking }}">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center kotakprofil">
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
                            <th>Kode</th>
                            <th>Pilihan</th>
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
                            <td>
                                <a href="{{ route('admin_resto.setuju', ['id' => $_COOKIE['restoranid']]) }}" class="btn btn-success">Setuju</a>
                                <a href="{{ route('admin_resto.tolak', ['id' => $_COOKIE['restoranid']]) }}" class="btn btn-danger">Tolak</a>
                            </td>
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