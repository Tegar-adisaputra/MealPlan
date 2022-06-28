@extends('layout.admin')
@section('container')

<button class="btn btn-danger mt-5 ">tombol</button>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4 kotak mt-5">
            <h1>test</h1>
        </div>
        <div class="col-md-4 kotak mt-5">
            <h1>test</h1>
        </div>
        <div class="col-md-4 kotak mt-5">
            <h1>test</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 login-box">
            <h1 class="text-center">test</h1>
            <button class="btn btn-success">tombol</button>
            <h1>tabel</h1>
            <table class="table table-striped">
                <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>alamat</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>tegar</td>
                    <td>sregseng</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<a href="#" style="text-decoration:none;">
<div class="col-md-12 mt-5 tombol1">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="font mt-2">Profile</h1>
        </div>
    </div>
</div>
</a>
<a href="#" style="text-decoration:none;">
<div class="col-md-12 mt-5 tombol1">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="font mt-2">Profile</h1>
        </div>
    </div>
</div>
</a>
@endsection()