@extends('layout/layout')
@section('container')
@include('layout.splashscreen')
@include('layout.header')

<!-- fitur search coming soon -->
<!-- <div class="searchbar mt-5">
    <form>
        <input class="kolomsearch"type="text" placeholder="Search..." name="search">
        <i class=" btn fas fa-search searchbtn"></i>
    </form>
</div> -->
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
<h2 class="mt-3">Terdekat</h2>
    <div class="scrolling-wrapper row flex-row flex-nowrap mt-2 pb-4 pt-2">
      <div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
    </div>
    <h2 class="mt-3">Resto Pilihan</h2>
    <div class="scrolling-wrapper row flex-row flex-nowrap mt-2 pb-4 pt-2">
      <div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
    </div>

<!-- <div class="scrollmenu mt-5">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="#support">Support</a>
  <a href="#blog">Blog</a>
  <a href="#tools">Tools</a>  
  <a href="#base">Base</a>
  <a href="#custom">Custom</a>
  <a href="#more">More</a>
  <a href="#logo">Logo</a>
  <a href="#friends">Friends</a>
  <a href="#partners">Partners</a>
  <a href="#people">People</a>
  <a href="#work">Work</a>
</div> -->
@include('layout.footer')
@endsection
