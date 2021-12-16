@extends('landing.layouts.master')

@section('title', 'Rent Here')


@section('content')
<div class="layanan-page">
    <div class="hero-layanan">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
            <h2>Layanan Rental Mobil</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestias?</p>
        </div>
      </div>
    </div>
  </div>

  <div class="list-cars">
    <div class="container">
      <div class="row">
        <div class="card-group mt-5">
            @forelse ($categories as $category)
            <a class="col-lg-6 col-md-12 " href="#">
              <div class="card" style="max-height:320px; overflow:hidden">
                <div class="card-top text-center ">
                  <img style="max-width:280px" src="{{Storage::url($category->photo)}}" alt="" srcset="" class="w-100">
                </div>
                <div class="card-body mt-1">
                  <h5>{{$category->name}}</h3>
                  <p style="font-size: 12px">{!!$category->description!!}</p>
                </div>
              </div>
            </a>
            @empty
                
            @endforelse
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
