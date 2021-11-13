@extends('admin.layouts.master')

@section('title')
    Dashboard Admin Detail
@endsection
@section('content')
<div class="page-breadcrumb container-fluid mt-5">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title  font-weight-bold mb-1">List of Details!</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('detail.create')}}" class="btn btn-primary mb-3">
                        Add Detail
                    </a>
                    <div class="table-responsive">
                        <table class="table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Car</th>
                                    <th>Tahun</th>
                                    <th>Warna</th>
                                    <th>Kapasitas</th>
                                    <th>Deskripsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverside: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'car.name', name: 'car.name'},
                {data: 'tahun_pembuatan', name: 'tahun_pembuatan'},
                {data: 'warna_mobil', name: 'warna_mobil'},
                {data: 'kapasitas_penumpang', name: 'kapasitas_penumpang'},
                {data: 'deskripsi', name: 'deskripsi'},
                {
                    data: 'action', 
                    name: 'action',
                    orderable: false,
                    scrollable: false,
                    width: '15%',
                },
            ],
        })
    </script>
@endpush