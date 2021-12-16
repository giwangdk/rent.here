@extends('landing.layouts.master')

@section('title', 'Rent Here')


@section('content')
<div class="book-page" style="margin-top: 70px;">
    <div class="container">
      <div class="row">
          <div class="col-12 text-center">
            <a class="navbar-brand" href="./index.html" style="width:120px; margin-left:-12px;" aria-label="Front">
                <img class="navbar-brand-logo w-100" src="{{asset('dashboard/assets/img/logo rent here (1).png')}}" alt="Logo">
           </a>
            <h2 style="font-weight:600">Booking Mobil</h2>
            <span class="text-muted">Lorem ipsum dolor sit amet consectetur</span>
              <hr>
          </div>
        <div class="left-section col-12">
          <div class="card">
            @auth
              <form action="/confirm" method="POST">
                @csrf
                <div class="row">
                <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="email"
                    placeholder="Enter your name.."
                    name="name" value={{Auth::user()->name}}>
                </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                  <div class="form-group">
                  <label for="no">No. Telp</label>
                  <input type="text" class="form-control" id="no"
                    placeholder="Enter your phone Number.."
                    name="phone_num" value={{Auth::user()->phone_num}}>
                </div>
                </div>
                </div>
                <div class="form-group">
                  <label for="email">Alamat</label>
                  <textarea type="text" class="form-control" id="address"
                    placeholder="Enter your email.."
                    name="address" cols="20" rows="10">{{Auth::user()->address}}</textarea>
                </div>

                <div class="row">
                  
                <div class="col-lg-6 col-sm-12">
                    <div class="form-group">
                        <label for="">Mobil</label>
                    <div class="input-group">
                        <select name="car" class="custom-select">
                    @foreach ($cars as $car)
                        <option value="{{$car->id}}">
                            {{$car->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="form-group">
                        <label for="">With Driver?</label>
                    <div class="input-group">
                        <select name="with_driver" class="custom-select">
                        <option value="yes">
                            YES</option>
                            <option value="no">
                                NO</option>
                    </select>
                    </div>
                </div>

                </div>
                <div class="form-group d-none">
                  <label for="total">Total</label>
                  <input type="text" class="form-control" id="total"
                    name="total" value="200000">
                </div>
                <button class="btn btn-book">Booking Mobil</button>
              </form>
              @else
              <h5>Anda belum login!</h5>
              <a href={{route('login')}} class="btn btn-primary">Login to see detail</a>
              @endauth
          </div>
        
        
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection

