@extends('layout/layout')
@section('container')
    {{-- <div class="splash text-center">
        <h1 class="fade-in">MealPlan</h1>
    </div> --}}
    
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
      <h1>Login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="txt_field">
          <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" required value="{{ old('email') }}">
          <span></span>
          <label for="email">Email</label>
          @error('email')
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
          Not a member? <a href="/register"><b>Register</b></a>
        </div>
      </form>
    </div>
@endsection()