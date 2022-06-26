@extends('layout.resto')
@section('container')
<div class="row login">
    <div class="col-lg-3 col-md-2"></div>
    <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-key mt-3">
            <i class="fa fa-key" aria-hidden="true"></i>
        </div>
        <div class="col-lg-12 login-title">
            Mitra MEALPLAN
        </div>

        <div class="col-lg-12 login-form">
            <div class="col-lg-12 login-form">
                <form>
                    <div class="form-group">
                        <label class="form-control-label">USERNAME</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">PASSWORD</label>
                        <input type="password" class="form-control" i>
                    </div>
                    <div class="col-lg-12 loginbttm">
                        <div class="col-lg-6 login-btm login-text">
                            <!-- Error Message -->
                        </div>
                        <div class="col-lg-6 mb-3">
                            <button type="submit" class="btn btn-outline">LOGIN</button>
                        </div>
                        <div class="col-lg-5">
                            <p>Ingin menjadi mitra? 
                                <b><a href="/resto/register" target="blank" style="color: black;">Daftar sekarang!</a></b>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-2"></div>
    </div>
@endsection()