@extends('site.layouts.main')

@section('title', 'Create')

@section('extra-css')
    <!-- start here -->
@endsection

@section('extra-styles')
    <!-- start here -->
@endsection

@section('content')

    @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <br>
    <br>
    <br>
    <br>
    <!-- Container Start -->

    <div class="container mt-5">
        <div class="card-header border-0 pt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1 mt-5">Add Toys</span>
                <br>
                <br>
            </h3>
        </div>

        <div class="class mb-3">
            <div class="card-header border-0">
                <div class="class-body">
                    <form action="{{route('site.toys.postStore')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="mb-4">
                            <div class="form-group">
                                <strong></strong>
                                <input type="text" name="item" class="form-control" placeholder="Cars">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <strong></strong>
                                <input type="text" name="type" class="form-control" placeholder="Type">
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-group">
                                <strong></strong>
                                <input type="text" name="price" class="form-control" placeholder="Price">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong></strong>
                                <input type="file" name="img" class="form-control" placeholder="Image">
                            </div>
                        </div>
                        <br>
                        <a href="{{route('site.toys.getIndex')}}" class="btn btn-danger">back</a>
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
