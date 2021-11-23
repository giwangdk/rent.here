@extends('admin.layouts.master')

@section('title')
    Add new Price
@endsection
@section('content')
<div class="container-fluid">
    <div class="dashboard-heading">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Add New Make Up Artist Photo<!</h3>
            </div>
        </div>
    </div>
    <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul >
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}/</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card mt-2">
                    <div class="card-body">
                            <form class="" action="{{route('price.index')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="price" name="price" id="" class="form-control" value="{{old('price', '')}}" required>
                                    </div>
                                </div>
                                <label for="">Car</label>
                                <div class="input-group">
                                    <select name="car_id" class="custom-select">
                                @foreach ($car as $car)
                                    <option value="{{$car->id}}">
                                        {{$car->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="col text-right mt-4">
                                    <button type="submit" class="btn btn-primary ">Add</button>
                                </div>
                                
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection