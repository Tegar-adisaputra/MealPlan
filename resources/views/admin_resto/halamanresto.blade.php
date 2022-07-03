@extends('layout.resto')
@section('container')
@include('sweetalert::alert')

{{-- <div class="notif">
    @if(session()->has('updateRestoSukses'))
      <div class="alert alert-success alert-dismissible fade show" style="border-radius:10px;" role="alert">
        {{ session('updateRestoSukses') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
</div> --}}


    <div class="col">
        <h3 class="mt-0 text-left">
            <button class="btn btn-danger btn" onclick="window.location.href = 'http://127.0.0.1:8000/admin_resto/home';"onclick="history.href">Back</button>
        </h3>
    </div>
<div class="col-md-12 text-center">
    <div class="row text-center mt-5">
        <!-- id diambil dari url -->
        <form action="{{ route('updaterestoran', ['id' => 1]) }}" method="post">
            @csrf
            <div class="col-md-12 text-center kotakprofil">
                <h3 class="mt-3">Halaman Restoran</h3>
                <div class="row p-5">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="d-block">Nama Resto</label>
                                <input name="nama_resto" type="text" class="form-control" value="{{ $restoran['nama_resto'] }}">
                            </div>
                            <div class="col-md-12">
                                <label class="d-block">Deskripsi Resto</label>
                                <input name="deskripsi_resto" type="text" class="form-control" value="{{ $restoran['deskripsi_resto'] }}">
                            </div>
                            <div class="col-md-12">
                                <label class="d-block">No Telepon</label>
                                <input name="no_telp" type="text" class="form-control" value="{{ $restoran['no_telp'] }}">
                            </div>
                            <!-- <div class="col-md-12">
                                <label class="d-block">Gambar</label>
                                <input name="gambar" type="file" class="form-control" value="{{ $restoran['gambar'] }}">
                            </div> -->
                            <div class="col-md-12">
                                <label class="d-block">Alamat Resto</label>
                                <textarea name="alamat_resto" class="form-control" id="" cols="30" rows="3">
                                    {{ $restoran['alamat_resto'] }}
                                </textarea>
                            </div>
                            <div class="col-md-12">
                                <label class="d-block">Maps</label>
                                <textarea name="map_resto" class="form-control" id="" cols="30" rows="3">
                                    {{ $restoran['map_resto'] }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <iframe class="mb-3"src="{{ $restoran['map_resto'] }}" 
                                    width="525" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn mb-5">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection()