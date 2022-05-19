@extends('layout/layout')
@section('container')
    <div class="center">
    <h1>Register</h1>
      <form action="/register" method="post">
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
          <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" required>
          <span></span>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
         @enderror
        </div>
        
        <input type="submit" value="Register">
        <div class="signup_link">
          Already a member? <a href="/login"><b>Login</b></a>
        </div>
      </form>
    </div>    
@endsection()