@extends('layout.resto')
@section('container')
@include('sweetalert::alert')

<div class="notif">
    @if(session()->has('updateProfileSukses'))
      <div class="alert alert-success alert-dismissible fade show" style="border-radius:10px;" role="alert">
        {{ session('updateProfileSukses') }}
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
    <form action="{{ route('admin_resto.updateprofile', ['id' => $_COOKIE['restoranid']]) }}" method="post">
        @csrf
        <div class="row text-center mt-5">
            <div class="col-md-12 text-center kotakprofil">
                <h3 class="mt-3">Profil Restoran</h3>
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <label>Nama Pemilik</label>
                        <input name="nama_pemilik" type="text" class="form-control" value="{{ $restoran['nama_pemilik'] }}">
                    </div>
                    <div class="col-md-6 mt-5">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control" value="{{ $restoran['email'] }}">
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label>No Telepon</label>
                        <input name="no_telp" type="text" class="form-control" value="{{ $restoran['no_telp'] }}">
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>Bergabung Sejak</label>
                        <input name="created_at" type="date" class="form-control" value="{{ $restoran['created_at'] }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label>Kapasitas</label>
                        <input name="kapasitas" type="text" class="form-control" value="{{ $restoran['kapasitas'] }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn mb-5">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div><br><br>
@endsection()