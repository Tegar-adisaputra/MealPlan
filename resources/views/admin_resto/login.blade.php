@extends('layout.resto')
@section('container')

{{-- <div class="notif">
    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" style="border-radius:10px;" role="alert">
        {{ session('loginError') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
</div> --}}

{{-- <div class="row login"> --}}
    {{-- <div class="col-lg-3 col-md-2"></div>
    <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-key mt-3">
            <i class="fa fa-key" aria-hidden="true"></i>
        </div>
        <div class="col-lg-12 login-title">
            Mitra MealPlan
        </div> --}}

        {{-- <div class="col-lg-12 login-form"> --}}
            {{-- <div class="col-lg-12 login-form">
                <form action="{{ route('admin_resto.check') }}{{-- /admin_resto/login --}}{{-- " method="post">
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf  --}}
                    {{-- <div class="form-group">
                        <label class="form-control-label">USERNAME</label>
                        <span></span>
                        <input type="text" name="username" id="username" class="@error('username') is-invalid @enderror form-control" required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror 
                    </div> --}}
                    {{-- <div class="form-group">
                        <label class="form-control-label">PASSWORD</label>
                        <span></span>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div> --}}
                    {{-- <div class="col-lg-12 loginbttm">
                        <div class="col-lg-6 login-btm login-text">
                            <!-- Error Message -->
                        </div>
                        <div class="col-lg-6 mb-3">
                            <button type="submit" class="btn btn-outline">LOGIN</button>
                        </div>
                        <div class="col-lg-5">
                            <p>Ingin menjadi mitra? 
                                <b><a href="{{ route('admin_resto.register') }}{{-- /admin_resto/register --}}{{-- " target="blank" style="color: black;">Daftar sekarang!</a></b>
                            </p>
                        </div>
                    </div> --}}
{{--                 </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-2"></div>
    </div>
@endsection() --}}