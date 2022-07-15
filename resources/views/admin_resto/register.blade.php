@extends('layout.resto')
@section('container')
@include('sweetalert::alert')

<section class="vh-100 mt-4">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
        <h1 class="text-white mb-4 font">Daftar Menjadi Mitra MealPlan</h1>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body register">
          <form action="{{-- {{ route('admin_resto.create') }} --}}{{ route('admin_resto.register') }}" method="post" enctype="multipart/form-data">
            @if (Session::get('success'))
              <div class="alert alert-success">
                  {{ Session::get('success') }}
              </div>
            @endif
            @if (Session::get('fail'))
              <div class="alert alert-danger">
                  {{ Session::get('fail') }}
              </div>
            @endif
            @csrf
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Nama Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" 
                  value="{{ old('name') }}"/>
                  @error('name')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Username</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="text" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" 
                  value="{{ old('username') }}"/>
                  @error('username')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Deskripsi Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <textarea type ="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="3" placeholder="deskripsi"
                  value="{{ old('deskripsi') }}"/></textarea>
                  @error('deskripsi')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                <div class="small text-muted mt-2">*<i>Deskripsikan restoran Anda yang menarik agar dapat menarik minat pelanggan</i></div>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">No. Telepon Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="text" name="no_telp" class="form-control form-control-lg @error('no_telp') is-invalid @enderror"
                  value="{{ old('no_telp') }}"/>
                  @error('no_telp')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Upload Foto Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required name="gambar" class="form-control form-control-lg @error('gambar') is-invalid @enderror" id="formFileLg" type="file"/>
                  @error('gambar')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                <div class="small text-muted mt-2">*<i>Upload foto terbaik menu dan restoran Anda untuk ditampilkan</i></div>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="example@example.com"
                  value="{{ old('email') }}"/>
                  @error('email')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Nama Pemilik</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="text" name="nama_pemilik" class="form-control form-control-lg @error('nama_pemilik') is-invalid @enderror"
                  value="{{ old('nama_pemilik') }}"/>
                  @error('nama_pemilik')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Nomor HP Pemilik</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="text" name="nohp_pemilik" class="form-control form-control-lg @error('nohp_pemilik') is-invalid @enderror"
                  value="{{ old('nohp_pemilik') }}"/>
                  @error('nohp_pemilik')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Alamat Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="text" name="alamat" class="form-control form-control-lg @error('alamat') is-invalid @enderror"
                  value="{{ old('alamat') }}"/>
                  @error('alamat')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Link Map restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <textarea type="text" name="map_resto" class="form-control @error('map_resto') is-invalid @enderror" rows="3" placeholder="link" 
                  value="{{ old('map_resto') }}"></textarea>
                  @error('map_resto')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                <div class="small text-muted mt-2">*<i>Buka restoran di google map, klik bagikan lalu klik sematkan peta, copy link https nya saja.</i></div>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Provinsi</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="text" name="provinsi" class="form-control form-control-lg @error('provinsi') is-invalid @enderror"
                  value="{{ old('provinsi') }}"/>
                  @error('provinsi')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Kabupaten/Kota</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="text" name="kotakabupaten" class="form-control form-control-lg @error('kotakabupaten') is-invalid @enderror"
                  value="{{ old('kotakabupaten') }}"/>
                  @error('kotakabupaten')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Kapasitas Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="number" min="10" placeholder="10" name="kapasitas" class="form-control form-control-lg @error('kapasitas') is-invalid @enderror"
                  value="{{ old('kapasitas') }}"/>
                  <div class="small text-muted mt-2">
                    *<i>Minimal kapasitas mitra MealPlan adalah 10 orang</i>
                  </div>
                  @error('kapasitas')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Password</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input required type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="password"/>
                  @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="px-5 py-4">
              {{-- <input required type="submit" class="btn btn-secondary" value="Register"> --}}
              <button type="submit" class="btn btn-lg" >Register</button>
            </div>
            <h6 class="text-center">Sudah jadi mitra?<b><a href="{{ route('admin_resto.login') }}{{-- /admin_resto/login --}}" style="color:black;"> Login!</a></b></h6>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection()