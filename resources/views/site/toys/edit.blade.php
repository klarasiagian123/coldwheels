@extends('site.layouts.main')

@section('title', 'Edit')

@section('extra-css')
    <!-- start here -->
@endsection

@section('extra-styles')
    <!-- start here -->
@endsection

@section('content')



    <!-- Container Start -->
    <br>
    <br>
    <br>
    <br>
    <div class="container mt-5">
        <div class="card-header border-0 pt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 mt-5">Edit Toys</span>
                <br>
                <br>
            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <form action="{{ route('site.toys.postUpdate', $data->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="topic" class="form-label">Cars</label>
                                <input type="text" name="item" class="form-control" value="{{$data->item}}">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="topic" class="form-label">Type</label>
                                <input type="text" name="type" class="form-control" value="{{$data->type}}">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <label for="topic" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" value="{{$data->price}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="topic" class="form-label">Image</label>
                                <img src="{{ asset('global/img/' . $data->img) }}" style="width: 15%" class="img-thumbnail">
                                <br>
                                <br>
                                <input type="file" name="img" class="form-control" value="{{$data->img}}">
                            </div>
                        </div>
                        <br>
                        <a href="{{ route('site.toys.getIndex') }}" class="btn btn-danger">back</a>
                        <input type="hidden" name="hidden_id" value="{{ $data->id }}">
                        <button type="submit" class="btn btn-success mx-2 ">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Container End -->


@endsection

@section('extra-content')
    <!-- start here -->
@endsection

@section('extra-js')
    <!-- start here -->
@endsection

@section('extra-script')
    <!-- start here -->
@endsection
