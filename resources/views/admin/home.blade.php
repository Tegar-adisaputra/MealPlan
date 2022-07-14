@extends('layout.admin')
@section('container')
<div class="tombol text-right mt-5">
    <form action="{{ route('admin.logout') }}" method="post">
        @csrf
        <button class="btn btn-danger">Logout</button>
    </form>
    <h1 class="text-left mt-2 font">Administrator</h1>
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 kotak1">
        <a href="/admin/restoterdaftar" style="text-decoration:none;">
        <h1 class="mt-2" style="color:#707070;">Restoran Terdaftar</h1>
        </a>
    </div>
    <div class="col-md-3"></div>
</div>
<!--<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="col-md-6 kotak1">
        <a href="#" style="text-decoration:none;">
        <h1 class="mt-2" style="color:#707070;">Request Pending</h1>
        </a>
    </div>
    <div class="col-md-3"></div>
</div>-->
<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="col-md-6 kotak1">
        <a href="/admin/history" style="text-decoration:none;">
        <h1 class="mt-2" style="color:#707070;">History</h1>
        </a>
    </div>
    <div class="col-md-3"></div>
</div>

@endsection()