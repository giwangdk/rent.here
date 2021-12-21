@extends('landing.layouts.master')

@section('title', 'Rent Here')


@section('content')
<div class="book-page" style="margin-top: 70px;">
    <div class="container mt-5">
      <div class="d-flex">
        <div class="h-100 mt-5">
        <h1>Konfirmasi Pembayaran</h1>
        </div>
        <div class="card mt-5 mx-5 w-50 align-items-center">
          <table class="table table-dark ">
            <tbody>
              <tr>
                <td >Name</td>
                <td >{{$transaction->name}}</td>
            </tr>
            <tr>
              <td>No HP</td>
              <td>{{$transaction->phone_num}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{$transaction->address}}</td>
              </tr>
              <tr>
                <td>Mobil</td>
                <td>{{$transaction->car}}</td>
              </tr>
              <tr>
                <td>total</td>
                <td>Rp. {{$transaction->total}}</td>
              </tr>
            </tbody>
          </table>
            <a class="btn btn-primary" href="https://wa.me/+6285156238962">Konfirmasi Via Whatsapp</a>
        </div>
      </div>
    </div>
  </div>
@endsection

