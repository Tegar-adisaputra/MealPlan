@extends('layout.layout')
@section('container')
<button class="btn btn-info mt-3" onclick="history.back()">Kembali</button>
<h1 class="font text-center mt-3">
    Order Booking
</h1>
<div class="col-md-12 kotak">
    <div class="row">
        <div class="col-md-7 font3">
            <h2 class="text-center mt-2">{{ $restoran['nama_resto'] }}</h3>
            <h3>{{ $restoran['alamat_resto'] }}</h3>
            <h4>Kapasitas tersedia : <b> {{ $restoran['kapasitas'] }}</b></h4>
            <p>{{ $restoran['deskripsi_resto'] }}</p>
        </div>
        <div class="col-md-5">
            <img src="/img/abuba.jpg" style="width:400px;" class="mt-3 mb-3" alt="">
        </div>
    </div>
</div>
<div class="col-md-12 kotak font3 mt-5">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2 class="text-center mt-5">
                Booking Form
            </h2>

            <form action="{{ route('booking') }}"  method="post">
                @csrf
                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                        <h6 class="mb-0">Nama Pemesan</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <input type="text" name="nama_pemesan" class="form-control form-control-lg " 
                        value="" required/>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                        <h6 class="mb-0">Jumlah Kursi</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <input type="number" name="jumlah_kursi" class="form-control form-control-lg " placeholder="Masukan jumlah kursi"value="" required/>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                        <h6 class="mb-0">Tanggal</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <input type="date" name="tanggal" class="form-control form-control-lg " 
                        value="" max="{{ $tanggal_maksimal_booking }}" required/>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <hr class="mx-n3">
                <div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                        <h6 class="mb-0">Waktu</h6>
                    </div>
                    <div class="col-md-5 pe-5">
                        <label for="waktumasuk">Masuk</label>
                        <input type="time" name="masuk" class="form-control form-control-lg " 
                        value="" required/>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="col-md-4 pe-5">
                        <label for="waktukeluar">Keluar</label>
                        <input type="time" name="keluar" class="form-control form-control-lg " 
                        value="" required/>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <hr class="mx-n3"><div class="row align-items-center pt-4 pb-3">
                    <div class="col-md-3 ps-5">
                        <h6 class="mb-0">Catatan Khusus</h6>
                    </div>
                    <div class="col-md-9 pe-5">
                        <label for="catatan">*Optional</label>
                        <input type="text" name="catatan" class="form-control form-control-lg " 
                        value=""/>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="col-md-12 mt-5">
                    <div class="row text-center">
                        <div class="col-md-4"></div>
                        <input type="hidden" id="" name="kode" value="{{ uniqid() }}">
                        <input type="hidden" id="" name="nama_resto" value="{{ $restoran['nama_resto'] }}">
                        <input type="hidden" id="" name="id_resto" value="{{ $restoran['id'] }}">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-lg text-center">Book Now!</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@include('layout.footer')
@endsection()