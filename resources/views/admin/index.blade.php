@extends('base')

@section('title', 'All cars')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.car.create') }}" class="btn btn-primary">Add a car</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Fuel Type</th>
                <th>Transmission Type</th>
                <th>Description</th>
                <th>Numbers of places</th>
                <th>Color</th>
                <th>Price</th>
                <th>Available</th>
                <th>Image1</th>
                <th>Image2</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td> {{ $car->brand }} </td>
                    <td> {{ $car->model }} </td>
                    <td> {{ $car->fuel }} </td>
                    <td> {{ $car->transmission }} </td>
                    <td> {{ $car->description }} </td>
                    <td> {{ number_format($car->places, 0) }} </td>
                    <td> {{ $car->color }} </td>
                    <td> {{ number_format($car->price, 0) }} </td>
                    <td> {{ $car->available }} </td>
                    <td> {{ $car->image1_path }} </td>
                    <td> {{ $car->image2_path }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
