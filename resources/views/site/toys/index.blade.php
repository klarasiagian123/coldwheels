@extends('site.layouts.main')

@section('title', 'Toys')


@section('extra-css')
    <!-- start here -->

@endsection

@section('extra-styles')
    <!-- start here -->



@endsection

@section('content')



    <br>
    <br>
    <br>
    <br>
    <div class="container mt-5">
        <div class="card-header border-0 pt-4">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold fs-3 mb-1">ColdWheels Toys</span>
                <br>
                <a href="{{ route('site.toys.getCreate') }}" class="btn btn-primary mb-5 float-start mt-4">+ Add
                    New</a>

            </h3>
        </div>

        <table class="table align-middle mb-0 bg-transparent">
            <thead class="bg-transparent">
                <tr>
                    <th>Cars</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($toy as $row )

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('global/img/' . $row->img) }}" alt=""
                                style="width: 180px">
                            <div class="ms-3">
                                <p class="fw-bold mb-1 text-light">{{$row->item}}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1 text-light">{{$row->type}}</p>
                    </td>
                    <td>
                        <span class="fw-normal mb-1 text-light">{{$row->price}}</span>
                    </td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('site.toys.getEdit', $row->id)}}" class="btn btn-success btn-sm"><span data-feather="edit" class="mb-1" ></span>Edit</a>
                            <a href="{{route('site.toys.getDestroy', $row->id)}}" class="btn btn-danger btn-sm"><span data-feather="trash" class="mb-1" ></span>Hapus</a>
                        </form>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
    </div>






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
