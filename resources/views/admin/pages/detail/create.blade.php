@extends('admin.layouts.master')

@section('title')
Detail
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Detail</h2>
            <p class="dashboard-subtitle">
                Create New Detail
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('detail.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                         
                                <div class="form-group">
                                    <label for="">Car</label>
                                <div class="input-group">
                                    <select name="car_id" class="custom-select">
                                @foreach ($cars as $car)
                                    <option value="{{$car->id}}">
                                        {{$car->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                                </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Tahun Pembuatan</label>
                                            <input type="text" name="tahun_pembuatan" id="" class="form-control" value="{{old('tahun_pembuatan', '')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Warna Mobil</label>
                                            <input type="text" name="warna_mobil" id="" value="{{old('warna_mobil', '')}}"class="form-control" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Kapasitas</label>
                                            <input type="text" name="kapasiatas_penumpang" id="" class="form-control" value="{{old('kapasitas_penumpang', '')}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label >Deskripsi</label>
                                            <textarea class="form-control" id="editor" name="deskripsi" rows="3" value="{{old('deskripsi', '')}}"></textarea>
                                            </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-success px-5">
                                            Save Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </mt-2>
        </div>
    </div>
</div>

@endsection
@push('script')
<script>
    CKEDITOR.replace( 'editor' );
</script>
@endpush