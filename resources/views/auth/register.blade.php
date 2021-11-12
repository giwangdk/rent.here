@extends('landing.layouts.auth')

@section('content')
<div class="sign-up-page">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="left-section col-md-12 col-lg-6">
                <div class="card">
                    <a class="navbar-brand" href="./index.html" style="width:120px; margin-left:-12px;" aria-label="Front">
                        <img class="navbar-brand-logo w-100" src="{{asset('dashboard/assets/img/logo rent here (1).png')}}" alt="Logo">
                   </a>
                    <h2>Create your account!</h2>
                    <span class="text-muted">Lorem ipsum dolor sit amet consectetur</span>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="form-group">
                                    <label for="no">No. Telp</label>
                                    <input id="phone_num" type="text"
                                        class="form-control @error('phone_num') is-invalid @enderror" name="phone_num"
                                        value="{{ old('phone_num') }}" required autocomplete="phone_num" autofocus>

                                    @error('phone_num')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea id="address" type="address" @error('address') is-invalid @enderror"
                                name="address" value="{{ old('address') }}" class="form-control" required> </textarea>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <button class="btn btn-register">Create Account</button>
                    </form>
                    <a href="{{route('login')}}" class="btn btn-login">Login</a>
                </div>


            </div>
            <div class="right-section col-md-12 col-lg-6">
                <div class="">
                    <img src="{{asset('landing/images/Register ya.png')}}" class="w-100" alt="">
                  </div>


            </div>
        </div>
    </div>
</div>



@endsection
