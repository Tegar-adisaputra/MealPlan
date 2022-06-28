@extends('layout.resto')
@section('container')
<section class="vh-100 mt-4">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
        <h1 class="text-white mb-4 font">Daftar Menjadi Mitra MealPlan</h1>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body register">
          <form action="/resto/register" method="post">
            @csrf
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Username</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" 
                  id="username" required value="{{ old('username') }}"/>
                  @error('username')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Nama Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" name="nama_resto" class="form-control form-control-lg @error('nama_resto') is-invalid @enderror" 
                  id="nama_resto" required value="{{ old('nama_resto') }}"/>
                  @error('nama_resto')
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
                <input type="text" nama="nama_pemilik" class="form-control form-control-lg @error('nama_pemilik') is-invalid @enderror"
                  id="nama_pemilik" required value="{{ old('nama_pemilik') }}" />
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
                <input type="text" nama="noHP_pemilik" class="form-control form-control-lg @error('noHP_pemilik') is-invalid @enderror"
                  id="noHP_pemilik" required value="{{ old('noHP_pemilik') }}" />
                  @error('noHP_pemilik')
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
                <input type="text" nama="alamat_resto" class="form-control form-control-lg @error('alamat_resto') is-invalid @enderror"
                  id="alamat_resto" required value="{{ old('alamat_resto') }}" />
                  @error('alamat_resto')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">No. Telepon Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" nama="noTelp_resto" class="form-control form-control-lg @error('noTelp_resto') is-invalid @enderror"
                  id="noTelp_resto" required value="{{ old('noTelp_resto') }}" />
                  @error('noTelp_resto')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="email" nama="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="example@example.com"
                  id="email" required value="{{ old('email') }}" />
                  @error('email')
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
                <input type="text" nama ="map_resto" class="form-control @error('map_resto') is-invalid @enderror" rows="3" placeholder="link" 
                  id="map_resto" required value="{{ old('map_resto') }}" />
                  @error('map_resto')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                <div class="small text-muted mt-2">*<i>Buka restoran di google map, klik bagikan lalu klik sematkan peta, copy link https nya saja.</i></div>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Deskripsi</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type ="text" nama="deskripsi_resto" class="form-control @error('deskripsi_resto') is-invalid @enderror" rows="3" placeholder="deskripsi"
                  id="deskripsi_resto" required value="{{ old('deskripsi_resto') }}" />
                  @error('deskripsi_resto')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                <div class="small text-muted mt-2">*<i>Deskripsikan restoran Anda yang menarik agar dapat menarik minat pelanggan</i></div>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Upload Foto Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input nama="gambar" class="form-control form-control-lg @error('gambar') is-invalid @enderror" id="formFileLg" type="file" required />
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
                <h6 class="mb-0">Password</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="password" nama="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="password" 
                  id="password" required />
                  @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <hr class="mx-n3">
            <div class="px-5 py-4">
              <input type="submit" class="btn btn-secondary" value="Register">
              {{-- <button type="submit" class="btn btn-lg" >Kirim</button> --}}
            </div>
            <h6 class="text-center">Sudah jadi mitra?<b><a href="/resto/login" style="color:black;"> Login!</a></b></h6>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection()