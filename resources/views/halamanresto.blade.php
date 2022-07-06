@extends('layout/layout')
@section('container')
@include('layout.header')
<div id="demo" class="carousel slide mt-5" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ '/uploader/'.$restoran['gambar'] }}" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Soto Betawi Bu Dian</h3>
        <p>Rumah Makan Soto Betawi Asli</p>
      </div>   
    </div>
    <!-- <div class="carousel-item">
      <img src="/img/sotobetawi_budian (1).jpeg" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Soto Betawi Bu Dian</h3>
        <p>Rumah Makan Soto Betawi Asli</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/img/sotobetawi_budian (2).jpeg" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Soto Betawi Bu Dian</h3>
        <p>Rumah Makan Soto Betawi Asli</p>
      </div>   
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="col-md-12">
    <div class="row text-center">
        <div class="col-md-5"></div>
        <div class="col-md-4 text-center">
            <a href="/booking" style="text-decoration: none;" onclick="ShowDiv()">
                <div class="tombol mt-3">
                    <h3 style="padding-top: 5px;">Book Now</h3>
                </div>
            </a>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<div class="container mt-3 mb-3 ">
    <div class="row desc">
        <div class="col-md-6 mt-3">
        <h1 class="font">{{ $restoran['nama_resto'] }}</h1>
        <h5>{{ $restoran['alamat_resto'] }}</h5>
        <hr>
        <p>{{$restoran['deskripsi_resto']}}</p><br><br><br>
        <p>Kontak: <br>
          {{$restoran['no_telp']}}
        </p>
        </div>
        <div class="col-md-6 mt-5">
        <iframe class="mb-3"src="{{ $restoran['map_resto'] }}" 
            width="525" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
    <!-- <div class="row mt-5 desc">
        <div class="col-md-12 mt-3 font">
            <h2>Review</h2>
        </div>
        <div class="col-md 12">
            <hr>
            <br>
            <div class="reviewbox">
                {{-- <h5><b>Rizky</b></h5> --}}
                <p class="font-weight-light font-italic">"<i>Belum ada review</i>"</p>
            </div>
            
        </div>
        
    </div> -->
</div>
<style>
  body {
    margin: 0;
    padding: 0;
    background: linear-gradient(120deg, #79b4b7, #79b4b7);
    height: 100vh;
    font-family: "Acme", sans-serif;
    color: #f8f0df;
}
.desc {
    color: #f8f0df;
    background-color: #5c9497;
    border-radius: 5px;
}
.font {
    color: #f8f0df;
    font-size: 40px;
    font-family: "Acme", sans-serif;
    text-shadow: 1px 2px 2px #707070;
}
.h1h {
    font-size: larger;
    font-family: "Dela Gothic One", cursive;
    color: #707070;
    padding-left: 50px;
    padding-top: 20px;
}
.header {
    background-color: #f8f0df;
    height: 95px;
    width: 100%;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 99;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
}
/* Dropdown Button */
.dropbtn {
    background-color: #707070;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    border-radius: 12px;
    text-align: right;
    margin-left: 100px;
    bottom: 55px;
    left: 900px;
    position: relative;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
    right: 310px;
    height: 15px;
    width: 450px;
}
.sapa {
    text-decoration: none;
    margin-left: 295px;
    color: whitesmoke;
    width: 330px;
    text-align: center;
    bottom: 15px;
    position: relative;
    font-size: 22px;
}
.sapa:hover {
    opacity: 0.8;
    transition: 0.7;
    color: #f8f0df;
}
/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #faf2e1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-top: 32px;
    border-radius: 10px;
    transition: 2s;
    margin-left: 150px;
    width: 200px;
    text-decoration: none;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: #707070;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
    background-color: #e1d9c6;
    border-radius: 10px;
    text-decoration: none;
    color: black;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
    transition: 0.6s;
    color: black;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #777676;
    transition: 0.5s;
    border-radius: 10px;
}
.footer-basic {
    padding: 40px 0;
    background-color: #ffffff;
    color: #4b4c4d;
}

.footer-basic ul {
    padding: 0;
    list-style: none;
    text-align: center;
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 0;
}

.footer-basic li {
    padding: 0 10px;
}

.footer-basic ul a {
    color: inherit;
    text-decoration: none;
    opacity: 0.8;
}

.footer-basic ul a:hover {
    opacity: 1;
}

.footer-basic .social {
    text-align: center;
    padding-bottom: 25px;
}

.footer-basic .social > a {
    font-size: 24px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    display: inline-block;
    text-align: center;
    border-radius: 50%;
    border: 1px solid #ccc;
    margin: 0 8px;
    color: inherit;
    opacity: 0.75;
}

.footer-basic .social > a:hover {
    opacity: 0.9;
}

.footer-basic .copyright {
    margin-top: 15px;
    text-align: center;
    font-size: 13px;
    color: #aaa;
    margin-bottom: 0;
}
.font {
    color: #f8f0df;
    font-size: 40px;
    font-family: "Acme", sans-serif;
    text-shadow: 1px 2px 2px #707070;
}
.font2 {
    color: #707070;
    font-size: 40px;
    font-family: "Acme", sans-serif;
    text-shadow: 1px 1px 2px #6e6e6e;
}
.font3 {
    color: #707070;
    font-family: "Acme", sans-serif;
}
.tombol {
    z-index: 99;
    background-color: #f8f0df;
    width: 200px;
    height: 50px;
    border-radius: 15px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    transition-duration: 0.6s;
    font-family: "Dela Gothic One", cursive;
    color: #707070;
    position: -webkit-sticky;
    position: sticky;
    top: 500;
}
.tombol:hover {
    background-color: #e3dac7;
    transition-duration: 0.6s;
}
</style>
@include('layout.footer')
@endsection()