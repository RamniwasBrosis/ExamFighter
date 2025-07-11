@extends('layouts.fullwidth')
@section('content')
    <div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
        <div class="login-form">
            <div class="text-center">
                <h3 class="title">Account Locked</h3>
                <p>Sign in to your account to start using W3CRM</p>
            </div>
            <form action="{{url('index')}}">

                <div class="mb-4 position-relative">
                    <label class="mb-1 text-dark">Password</label>
                    <input type="password" id="dz-password" class="form-control" value="123456">
                    <span class="show-pass eye">
                        <i class="fa fa-eye-slash"></i>
                        <i class="fa fa-eye"></i>
                    </span>

                </div>
                <div class="form-row d-flex justify-content-between mt-4 mb-2">
                    <div class="mb-4">
                        <div class="form-check custom-checkbox mb-3">
                            <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                            <label class="form-check-label" for="customCheckBox1">Remember my preference</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <a href="{{url('page-forgot-password')}}" class="btn-link text-primary">Forgot Password?</a>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <button type="submit" class="btn btn-primary btn-block">Unlock</button>
                </div>
                <h6 class="login-title"><span>Or continue with</span></h6>

                <div class="mb-3">
                    <ul class="d-flex align-self-center justify-content-center">
                        <li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
                        <li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
                        <li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
                    </ul>
                </div>
                <p class="text-center">Not registered?
                    <a class="btn-link text-primary" href="{{url('page-register')}}">Register</a>
                </p>
            </form>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6">
        <div class="pages-left h-100">
            <div class="login-content">
                <a href="{{url('index')}}"><img src="{{asset('images/logo-full.png')}}" class="mb-3 logo-dark" alt=""></a>
                <a href="{{url('index')}}"><img src="{{asset('images/logi-white.png')}}" class="mb-3 logo-light" alt=""></a>

                <p>CRM dashboard uses line charts to visualize customer-related metrics and trends over time.</p>
            </div>
            <div class="login-media text-center">
                <img src="{{asset('images/login.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection
