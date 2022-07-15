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
        </div>
    </div>    
</div>
@endsection()