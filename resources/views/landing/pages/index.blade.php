@extends('landing.layouts.master')

@section('title', 'Rent Here')


@section('content')
<div class="content">
    <div class="hero">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="left-section">
                <h1>Premium class car rental in depok!</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem itaque iure incidunt, maiores ea
                  consectetur totam aliquam veritatis optio beatae, delectus eum doloribus laboriosam ipsum ullam dolorem
                  mollitia nihil. In?</p>
                <button class="btn btn-start">get started</button>
              </div>
            </div>
            <div class="col-md 12 col-lg-6">
              <div class="right-section">
                <img src="{{asset('landing/images/abstract-get-lost.png')}}" alt="">
                <div class="resource">
                  <a href="https://icons8.com/illustrations/author/60872b904391d1000c87ab70">Marina Mogulskaya</a> from <a
                    href="https://icons8.com/illustrations">Ouch!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="how-it-works">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <span class="badge  badge-rental">How</span>
              <h2>How it Works?</h2>
            </div>
            <div class="card-group mt-5">
              <div class="col-lg-3 col-md-6 ">
              <div class="card">
                <div class="card-top text-center ">
                  <i class="fas fa-search-location fa-2x"></i>
                </div>
                <div class="card-body">
                  <h5>Pilih Lokasi Anda</h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, aliquid.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
              <div class="card">
                <div class="card-top text-center ">
                  <i class="fas fa-calendar-week fa-2x"></i>
                </div>
                <div class="card-body">
                  <h5>Tentukan Jadwal Anda</h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
              <div class="card">
                <div class="card-top text-center ">
                  <i class="fas fa-car fa-2x"></i>
                </div>
                <div class="card-body">
                  <h5>Pilih Lokasi Anda</h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, aliquid.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 ">
              <div class="card">
                <div class="card-top text-center ">
                  <i class="fas fa-book-reader fa-2x"></i>
                </div>
                <div class="card-body">
                  <h5>Booking mobil pilihan anda</h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="why-us">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="left-section">
                <img src="{{asset("landing/images/bermuda-car-service-1.png")}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="right-section">
                <span class="badge badge-rental">Why us?</span>
                <h1>All the good service will be provide to you!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, quam?</p>
                <ul>
                  <li>Harga sewa di Rent Here terjangkau.</li>
                  <li>Driver yang berpengalaman</li>
                  <li>Ada berbagai macam pilihan mobil</li>
                  <li>Mobil-mobil yang terawat dan layak pakai</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="category">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <span class="badge  badge-rental">Category</span>
              <h2>What we have?</h2>
            </div>
            <div class="card-group mt-5">
              <a class="col-lg-6 col-md-12 " href="#">
              <div class="card">
                <div class="card-top text-center ">
                  <img src="./images/7513097232_7935b8bd99.jpg.crdownload" alt="" srcset="">
                </div>
                <div class="card-body">
                  <h5>Sport Utility Vehicle (SUV)</h3>
                  <p>adalah kendaraan penumpang yang memiliki kemampuan untuk mengangkut penumpang sekaligus barang dengan lincah..</p>
                </div>
              </div>
            </a>
             <a class="col-lg-6 col-md-12 " href="#">
              <div class="card">
                <div class="card-top text-center ">
                  <img src="./images/7513097232_7935b8bd99.jpg.crdownload" alt="" srcset="">
                </div>
                <div class="card-body">
                  <h5>Sport Utility Vehicle (SUV)</h3>
                  <p>adalah kendaraan penumpang yang memiliki kemampuan untuk mengangkut penumpang sekaligus barang dengan lincah..</p>
                </div>
              </div>
            </a>
            <a class="col-lg-6 col-md-12 " href="#">
              <div class="card">
                <div class="card-top text-center ">
                  <img src="./images/7513097232_7935b8bd99.jpg.crdownload" alt="" srcset="">
                </div>
                <div class="card-body">
                  <h5>Sport Utility Vehicle (SUV)</h3>
                  <p>adalah kendaraan penumpang yang memiliki kemampuan untuk mengangkut penumpang sekaligus barang dengan lincah..</p>
                </div>
              </div>
            </a>
            <a class="col-lg-6 col-md-12 " href="#">
              <div class="card">
                <div class="card-top text-center ">
                  <img src="./images/7513097232_7935b8bd99.jpg.crdownload" alt="" srcset="">
                </div>
                <div class="card-body">
                  <h5>Sport Utility Vehicle (SUV)</h3>
                  <p>adalah kendaraan penumpang yang memiliki kemampuan untuk mengangkut penumpang sekaligus barang dengan lincah..</p>
                </div>
              </div>
            </a>
            
            </div>
          </div>
        </div>
      </div>
  
      <div class="cta">
        <div class="container">
          <div class="text-center d-flex justify-content-center">
            <div class="col-10">
              <h2>Are you ready to rent your dream car for your trip?</h2>
            <a href="#" class="btn btn-contact">Contact Us!</a>
          </div>
          </div>
        </div>
      </div>
</div>
@endsection

