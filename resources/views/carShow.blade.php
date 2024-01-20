@extends('homebase')

@section('title', $car->model)

@section('content')

    <div class="container mt-5">
        <h1> {{ $car->brand }} {{ $car->model }} </h1>
        <div class="d-flex">
            <div class="col">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/storage/{{ $car->image1_path }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/{{ $car->image2_path }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col px-2">
                <p><span class="fw-bolder">Number of places:</span> {{ $car->places }} </p>
                <p><span class="fw-bolder">Color:</span> {{ $car->color }} </p>
                <p><span class="fw-bolder">Fuel type:</span> {{ $car->fuel }} </p>
                <p><span class="fw-bolder">Transmission type:</span> {{ $car->transmission }} </p>
                <p><span class="fw-bolder">Daily rent price:</span> {{ $car->price }} </p>
                <p><span class="fw-bolder">Short description:</span> {{ $car->description }} </p>
                <div class="btn btn-outline-primary w-100">Rent</div>
            </div>
        </div>
    </div>

@endsection
