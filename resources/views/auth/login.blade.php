@extends('landing.layouts.auth')

@section('content')
<div class="sign-in-page">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="left-section col-md-12 col-lg-6">
          <div class="card">
            <a class="navbar-brand" href="./index.html" style="width:120px; margin-left:-12px;" aria-label="Front">
              <img class="navbar-brand-logo w-100" src="{{asset('dashboard/assets/img/logo rent here (1).png')}}" alt="Logo">
         </a>
            <h2>Login</h2>
            <span class="text-muted">Lorem ipsum dolor sit amet consectetur</span>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <button type="submit" class="btn btn-login">Login</button>
              </form>
              <a href="{{route('register')}}" class="btn btn-register">Create an Account</a>
          </div>
        
        
        </div>
        <div class="right-section col-md-12 col-lg-6">
          <div class="">
            <img src="{{asset('landing/images/Login ya.png')}}" class="w-100" alt="">
          </div>
        
        
        </div>
      </div>
    </div>
  </div>
@endsection
