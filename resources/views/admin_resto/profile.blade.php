@extends('layout.resto')
@section('container')
    <div class="col">
        <h3 class="mt-0 text-left">
            <button class="btn btn-danger btn" onclick="window.location.href = 'http://127.0.0.1:8000/admin_resto/home';"onclick="history.href">Back</button>
        </h3>
    </div>
<div class="col-md-12 text-center">
    <div class="row text-center mt-5">
        <div class="col-md-12 text-center kotakprofil">
            <h3 class="mt-3">Profil Restoran</h3>
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h5>Nama Restoran</h5>
                    <h6>...</h6>
                </div>
                <div class="col-md-6 mt-5">
                    <h5>Pemilik</h5>
                    <h6>...</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <h5>Alamat Restoran</h5>
                    <h6>...</h6>
                </div>
                <div class="col-md-6 mt-3">
                    <h5>email</h5>
                    <h6>...</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <h5>No. Telp.</h5>
                    <h6>...</h6>
                </div>
                <div class="col-md-6 mt-3">
                    <h5>bergabung Sejak</h5>
                    <h6>...</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <h5>Deskripsi</h5>
                    <h6>...</h6>
                </div>
                <div class="col-md-6 mt-3">
                    <h5>kapasitas</h5>
                    <h6>...</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <button class="btn mb-5">
                        <i>Edit Profil</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()