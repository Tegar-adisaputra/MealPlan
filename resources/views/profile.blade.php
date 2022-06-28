@extends('layout/layout')
@section('container')
@include('layout.header')
@include('sweetalert::alert')
<br>

<div class="card">
    <div class="card-body">
        <h4><i class="fa-solid fa-circle-user"></i> Profil Saya</h4>
        <table class="table">
            <tbody>
                <tr>
                    <td>Username</td>
                    <td width="10">:</td>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td width="10">:</td>
                    <td>{{ $user->nohp }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td width="10">:</td>
                    <td>{{ $user->email }}</td>
                </tr>
        </table>
    </div>
</div>

<br>
<div class="card">
    <div class="card-body">
        <h4><i class="fa-solid fa-pen-to-square"></i> Edit Profile</h4>
        <form action="{{ route('profile') }}{{-- /profile --}}" class="{{ ($active === "profile") ? 'active' : '' }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="username" class="col-md-2 col-form-label text-md-right">{{ __('Username') }}</label>
                <div class="col-md-6">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{ $user->username }}" required autocomplete="username">
                    
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="nohp" class="col-md-2 col-form-label text-md-right">No. HP</label>
                <div class="col-md-6">
                    <input type="text" name="nohp" class="form-control @error('nohp') is-invalid @enderror" id="nohp" value="{{ $user->nohp }}" required autocomplete="nohp">
                    
                    @error('nohp')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ $user->email }}" required autocomplete="email">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="col-md-6">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                <div class="col-md-6">
                    <input type="password" name="password_confirmation" class="form-control" id="password-confirm">
                </div>
            </div>
            
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-2">
                    <input type="submit" value="Save">
                </div>
            </div>
    </div>
</div>
<br>
           
@include('layout.footer')

@endsection()