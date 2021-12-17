@extends('admin.layouts.master')

@section('title')
    Dashboard Admin Transaction
@endsection
@section('content')
<div class="page-breadcrumb container-fluid mt-5">
    <div class="row">
        <div class="col-7 align-self-center">
            <h2 class="page-title  font-weight-bold mb-1">List of Transactions<!</h3>
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
            <div class="transactiond">
                <div class="transactiond-body">
                    <div class="table-responsive">
                        <table class="table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>No Telp</th>
                                    <th>Address</th>
                                    <th>Car</th>
                                    <th>With Driver</th>
                                    <th>Total</th>
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
                {data: 'name', name: 'name'},
                {data: 'phone_num', name: 'No telp'},
                {data: 'address', name: 'address'},
                {data: 'car.name', name: 'car'},
                {data: 'with_driver', name: 'with driver'},
                {data: 'total', name: 'total'}
            ],
        })
    </script>
@endpush