@extends('layout/layout')
@section('container')
@include('sweetalert::alert')
    
   <div class="notif">
      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" style="border-radius:10px;" role="alert">
          {{ session('loginError') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
    </div>

    <div class="center">
      <h1 class="font2">Login</h1>
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="txt_field">
          <input type="text" name="username" class="@error('username') is-invalid @enderror" id="username" required value="{{ old('username') }}">
          <span></span>
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
         @enderror
        </div>
        <div class="txt_field">
          <input type="password" name="password" id="password" required>
          <span></span>
          <label for="password">Password</label>
        </div>
{{--         <div class="pass">Forgot Password?</div> --}}
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="{{ route('register') }}"><b>Register</b></a>
        </div>
      </form>
    </div>
@endsection()