@extends('admin.layouts.master')

@section('title')
    Edit Car
@endsection
@section('content')
<div class="container-fluid">
    <div class="dashboard-heading">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Add New Car<!</h3>
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
                            <form class="" action="{{route('car.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" 
                                name="name" placeholder="Name of Car"
                                value="{{$item->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" id="" class="form-control" required ">
                                        <option value="BOOKED">BOOKED</option>
                                        <option value="UNBOOK">UNBOOK</option>
                                    </select>
                                </div>

                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" 
                                    name="photo" id="validatedCustomFile" value="{{$item->photo}}"required>
                                    <label class="custom-file-label" for="validatedCustomFile">
                                        Upload car's photo
                                    </label>
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Category</label>
                                <div class="input-group">
                                    <select name="category_id" class="custom-select">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                </div>
                                <div class="col text-right">
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
@push('script')
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endpush