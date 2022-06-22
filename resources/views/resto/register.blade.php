@extends('layout.resto')
@section('container')
<section class="vh-100 mt-4">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">
        <h1 class="text-white mb-4 font">Daftar menjadi mitra MealPlan</h1>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body register">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Nama Restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" class="form-control form-control-lg" />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Nama Pemilik</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" class="form-control form-control-lg" />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Nomor hp Pemilik</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" class="form-control form-control-lg" />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Alamat</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" class="form-control form-control-lg" />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">No. Telfon</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" class="form-control form-control-lg" />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="email" class="form-control form-control-lg" placeholder="example@example.com" />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Link Map restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <textarea class="form-control" rows="3" placeholder="link"></textarea>
                <div class="small text-muted mt-2">*<i>Buka restoran di google map, klik bagikan lalu klik sematkan peta, copy link https nya saja.</i></div>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Deskripsi</h6>
              </div>
              <div class="col-md-9 pe-5">
                <textarea class="form-control" rows="3" placeholder="deskripsi"></textarea>
                <div class="small text-muted mt-2">*<i>Deskripsikan restoran anda yang menarik agar dapat menarik minat pelanggan</i></div>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Upload Foto restoran</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                <div class="small text-muted mt-2">*<i>Upload foto terbaik menu dan restoran anda untuk ditampilkan</i></div>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">
                <h6 class="mb-0">Password</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="password" class="form-control form-control-lg" placeholder="password" />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="px-5 py-4">
              <button type="submit" class="btn btn-lg">Kirim</button>
            </div>
            <h6 class="text-center">Sudah jadi mitra?<b><a href="/resto/login" style="color:black;"> Login!</a></b></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection()