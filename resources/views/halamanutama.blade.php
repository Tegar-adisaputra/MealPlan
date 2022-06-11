@extends('layout/layout')
@section('container')
@include('layout.header')
@include('layout.splashscreen')
   <!-- <div class="splash text-center">
        <h1 class="fade-in">MealPlan</h1>
    </div> -->
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
    {{-- <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li> --}}
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/sotobetawi_budian.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Soto Betawi Bu Dian</h3>
        <p>Rumah Makan Soto Betawi Asli</p>
      </div>   
    </div>
    {{-- <div class="carousel-item">
      <img src="img/dummy.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Coming Soon</h3>
        {{-- <p>Aneka Dessert</p> --}}
      {{-- </div>   
    </div>
    <div class="carousel-item">
      <img src="img/dummy.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Coming Soon</h3>
        <p>Western Food</p>
      </div>   
    </div> --}}
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- {{-- <h2 class="mt-5 font">Terdekat</h2>
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
    </div> --}} -->


    <h2 class="mt-3 font">Daftar Restoran</h2>
    <div class="scrolling-wrapper row flex-row flex-nowrap mt-2 pb-4 pt-2">
    @foreach($data as $resto)  
    <div class="col-3">
      <a href="/halamanresto/{{$resto["id"]}}">
          <div class="card card-block card-1">
            <img src="/img/{{ $resto['gambar'] }}" alt="" class="gambarresto">
            <hr>
            <center>
              <h3 class="font3">{{ $resto['nama_resto'] }}</h3>
            </center>
          </div>
        </a>
			</div>
      @endforeach
			<div class="col-3">
				<div class="card card-block card-1">
          <img src="img/dummy.jpg" alt="" class="gambarresto">
            <hr>
            <center>
              <h3 class="font3">Coming Soon</h3>
            </center>
        </div>
			</div>
      <div class="col-3">
				<div class="card card-block card-1">
          <img src="img/dummy.jpg" alt="" class="gambarresto">
            <hr>
            <center>
              <h3 class="font3">Coming Soon</h3>
            </center>
        </div>
			</div>
      <div class="col-3">
				<div class="card card-block card-1">
          <img src="img/dummy.jpg" alt="" class="gambarresto">
            <hr>
            <center>
              <h3 class="font3">Coming Soon</h3>
            </center>
        </div>
			</div>
      <div class="col-3">
				<div class="card card-block card-1">
          <img src="img/dummy.jpg" alt="" class="gambarresto">
            <hr>
            <center>
              <h3 class="font3">Coming Soon</h3>
            </center>
        </div>
			</div>
      
			{{-- <div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div>
			<div class="col-3">
				<div class="card card-block card-1"></div>
			</div> --}}
    </div>


@include('layout.footer')
@endsection
