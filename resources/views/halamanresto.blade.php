@extends('layout/layout')
@section('container')
@include('layout.splashscreen')
@include('layout.header')
<div id="demo" class="carousel slide mt-5" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/resto1.png" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Rumah Makan Antar</h3>
        <p>Masakan jawa, Sunda, dll</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/resto2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Sweet House</h3>
        <p>Aneka Dessert</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/resto3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Daniel's Cuisine</h3>
        <p>Western Food</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
{{-- <a href="#" style="text-decoration: none;" onclick="ShowDiv()">
<div class="tombol mt-3">
    <h3 style="padding-top: 5px;">Book Now</h3>
    </div>
</a> --}}
<div class="container mt-3 mb-3 ">
    <div class="row desc">
        <div class="col-md-6 mt-3">
        <h1 class="font">Restoran Antar</h1>
        <h5>jalan kebayoran baru No.15, Jakarta Selatan</h5>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Beatae animi maxime nihil reiciendis autem quidem laudantium 
            magnam deleniti inventore possimus. Pariatur sint illum temporibus 
            cupiditate officia error iure, enim ipsam quasi. Amet placeat 
            dignissimos tempora nemo magni minus sequi a incidunt rem deleniti, 
            maxime fuga itaque, nostrum aspernatur, perspiciatis quis?</p>
        </div>
        <div class="col-md-6 mt-5">
        <iframe class="mb-3"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4716.652539852231!2d106.80075010891677!3d-6.2351299000680145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c76e93c1857863b!2sUniversitas%20Al-Azhar%20Indonesia!5e0!3m2!1sid!2sid!4v1652788207985!5m2!1sid!2sid" 
            width="525" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
    <div class="row mt-5 desc">
        <div class="col-md-12 mt-3 font">
            <h2>Review</h2>
        </div>
        <div class="col-md 12">
            <hr>
            <br>
            <div class="reviewbox">
                <h5><b>Rizky</b></h5>
                <p>"<i>Tempat bagus banget luas</i>"</p>
            </div>
            
        </div>
        
    </div>
</div>
@include('layout.footer')
@endsection()