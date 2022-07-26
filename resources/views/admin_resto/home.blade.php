@extends('layout.admin')
@section('container')
<div class="tombol text-right mt-5">
    <form action="{{ route('admin_resto.logout') }}" method="post">
        @csrf
        <button class="btn btn-danger">Logout</button>
    </form>
</div>
<div style="height: 750px;">
    <div class="font text-center"><br>
        <h1>Selamat Datang Admin Restoran</h1>
    </div>
    <a href="/admin_resto/profile/{{$_COOKIE['restoranid']}}" style="text-decoration: none;">
        <div class="col-md-12 mt-5 tombol1">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <h1 style="color:black;" class="font mt-2">Profile</h1>
                </div>
            
            </div>
        </div>

    </a>
    <!-- 1 diganti id restoran -->
    <a href="/admin_resto/halamanrestoran/{{$_COOKIE['restoranid']}}" style="text-decoration: none;">
        <div class="col-md-12 mt-5 tombol1">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <h1 style="color:black;" class="font mt-2">Restoran</h1>
                </div>
            
            </div>
        </div>

    </a>
    <a href="/admin_resto/history/{{$_COOKIE['restoranid']}}" style="text-decoration: none;">
        <div class="col-md-12 mt-5 tombol1">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <h1 style="color:black;" class="font mt-2">History</h1>
                </div>
            
            </div>
        </div>

    </a>
    <a href="/admin_resto/booking/{{$_COOKIE['restoranid']}}" style="text-decoration: none;">
        <div class="col-md-12 mt-5 tombol1">
            <div class="row ">
                <div class="col-md-12 text-center">
                    <h1 style="color:black;" class="font mt-2">Booking</h1>
                </div>
            
            </div>
        </div>

    </a>
</div>







{{-- <div class="col-md-12 kotak mt-5"style="height: 600px;">
    <div class="row">
        <h3 class="mt-2 ml2 text-center">Selamat Datang, Admin Resto!</h3>
    </div>
    <div class="row kolom text-center">
        <a href="/resto/profile" target="blank"><button class="ml-5 btn btn-secondary">Profile</button></a>
        <a href="/resto/halamanresto"><button class="ml-5 btn btn-secondary">Restoran</button></a>
        <a href="/resto/history"><button class="ml-5 btn btn-secondary">History</button></a>
        <a href="/resto/booking"><button class="ml-5 btn btn-secondary">Booking</button></a>
    
        
    </div> --}}
</div>
@include('layout.footer')
@endsection()