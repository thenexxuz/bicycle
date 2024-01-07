@extends('layouts.app')

@section('content')
    <div class="col-md-12 m-auto">
        <div class="card">
            <div class="card-header bg-primary">
                My Bicycles
                <span class="float-end">
                    <a class="text-decoration-none text-light" href="{{ route('bikes.create') }}">
                        <i class="fa-solid fa-circle-plus"></i>
                    </a>
                </span>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Owner</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Price</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Category</th>
                        <th scope="col">Wheel Size</th>
                    </tr>
                    </thead>
                    <tbody>
                        @isset($bikes)
                            @foreach($bikes as $bike)
                                <tr >
                                    <td>{{ $bike->owner }}</td>
                                    <td>{{ $bike->brand }}</td>
                                    <td>{{ $bike->price }}</td>
                                    <td>{{ $bike->gender ? "Men's Bike" : "Women's Bike"  }}</td>
                                    <td>{{ $bike->category }}</td>
                                    <td>{{ $bike->wheel_size }}</td>
                                </tr>
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection