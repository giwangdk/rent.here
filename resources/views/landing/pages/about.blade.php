@extends('landing.layouts.master')

@section('title', 'Rent Here')


@section('content')
<div class="about-page">
  <div class="container">
    <div class="about-section">
      <div class="row d-flex align-items-center">
      <div class="left-section col-lg-6 col-md-12">
        <img src="{{asset('landing/images/Ilustrasi about.png')}}" class="w-100" alt="">
      </div>
      <div class="right-section col-lg-6 col-md-12">
        <div class="card">
          <h2>About Us</h2>
          <p>Rent Here, layanan penyedia jasa sewa atau rental mobil harian, bulanan dan tahunan di Kota Depok. Layanan sewa atau rental mobil yang kami layani dengan beragam pilihan jenis mobil yang menarik dan didukung oleh tenaga kerja yang profesional, kami yakin dapat memenuhi seluruh kebutuhan transportasi konsumen, terutama dari segi keamanan, keselamatan, kenyamanan dan kepuasan saat melakukan perjalanan dengan harga yang terjangkau.

            </p>
        </div>
      </div>
    </div>
    </div>
    <div class="contact-section">
      <h2>Contact Us</h2>
      <div class="row">
      <div class="left-section col-lg-6 col-md-12">
        <div class="maps">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="530" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-org.net"></a><br><style>.mapouter{}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {}</style></div></div>
        </div>
      </div>
      <div class="right-section col-lg-6 col-md-12">
        
        <div class="">
          <p>
            Dalam hal ini kami Rent Here memiliki keberagaman pilihan sewa mobil diantaranya Camry, Vios, Xenia, Avanza, Kijang, Rush,Terios, Pajero, Grand Max, Hi-Max, Carry. Beragam tipe kendaraan ini ditunjang dengan keberagam paket rental mobil mulai dari masa sewa 6 jam, 12 jam, 18 jam dan bisa juga fullday. Jasa sewa mobil yang kami sediakan memiliki standar layanan yang selalu kami jaga demi mempertahankan kualitas untuk penyewa.</p>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection

