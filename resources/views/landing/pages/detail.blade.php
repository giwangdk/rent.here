@extends('landing.layouts.master')

@section('title', 'Rent Here')

@push('style')
    <style>
      tbody>tr>th{
        font-weight: 200;
      }
    </style>
@endpush

@section('content')
<div class="detail-page">
  <div class="container">
    <div class="detail-section d-flex justify-content-between align-items-center">
      <div class="row">
      <div class="left-section col-lg-5 col-md-12">
        <img src="{{Storage::url($category->photo)}}" alt="" srcset="" class="w-100">
      </div>
      <div class="right-section col-lg-7 col-md-12">
        <div class="card">
          <h2>{{$category->name}}</h2>
          <p>{!!$category->description!!}</p>
          <div class="car-list">
            <h4>Mobil yang tersedia di jasa kami : </h4>
            <ul class="ml-3">
            @forelse ($cars as $item)
              <li>{{$item->name}}</li>
            @empty
                
            @endforelse
            </ul>
          </div>
        </div>
    </div>
  </div>
</div>
<div class="price-section mt-5">
  <h3>Detail dan Harga Mobil</h3>
  <table class="table table-striped">
<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Mobil</th>
  <th scope="col">Tahun</th>
  <th scope="col">Warna</th>
  <th scope="col">Kapasitas</th>
  <th scope="col">Deskripsi</th>
  <th scope="col">Harga</th>
  <th scope="col">+Driver</th>
  <th >Status</th>
  <th>Action</th>
</tr>
</thead>
<tbody>
  @php
    $id= 1  
  @endphp
    @forelse ($cars as $car)
      <tr>
          <th >{{$id++}}</th>
          <th>{{$car->name}}</th>
        @foreach ($car->details as $item)    
          <th>{{$item->tahun_pembuatan}}</th>
          <th>{{$item->warna_mobil}}</th>
          <th>{{$item->kapasitas_penumpang}}</th>
          <th>{!!$item->deskripsi!!}</th>
        @endforeach
        @foreach ($car->prices as $item)
            
        <th >{{number_format($item->price)}}</th>
        <th>{{number_format(200000)}}</th>
        <th class="badge badge-success p-2 mt-3 " style="font-size: 10px">{{$car->status}}</th>
        <th><a href="{{route('book', $item->id)}}" class="btn btn-book">Book</a></th>
        @endforeach
      </tr>
  @empty
      
  @endforelse>
</tbody>
</table>
</div>
</div>
</div>
@endsection

