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
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button text-center bg-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Make a reservation
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <form action="{{ route('admin.car.store', $order) }}" method="POST">
                        @csrf
                        <div class="row mx-auto py-3" style="width: 90%">
                            <div class="col">
                                <label for="car">Car</label>
                                <input class="form-control mb-2" id="car" type="text" name="user_id"
                                    value="{{ $order->car }}" disabled>
                            </div>
                            <div class="col">
                                <label for="user_id">Username</label>
                                <input class="form-control mb-2" id="user_id" type="text" name="user_id"
                                    value="{{ $order->user_id }}" placeholder="User1" disabled>
                            </div>
                            <div class="col">
                                @include('shared.input', [
                                    'label' => 'MTN MoMo phone number',
                                    'name' => 'num',
                                    'type' => 'number',
                                    'value' => $order->num,
                                ])
                            </div>
                            <div class="col">
                                @include('shared.input', [
                                    'label' => 'Day of reservation',
                                    'name' => 'day',
                                    'type' => 'date',
                                    'value' => $order->date,
                                ])
                            </div>
                            <div class="col">
                                @include('shared.input', [
                                    'label' => 'Number of renring days',
                                    'name' => 'daynum',
                                    'type' => 'number',
                                    'value' => $order->number_of_days,
                                ])
                            </div>
                            <div class="col">
                                @include('shared.input', [
                                    'label' => 'Number of car',
                                    'name' => 'cars',
                                    'type' => 'number',
                                    'value' => $order->number_of_car,
                                ])
                            </div>
                            <input type="submit" class="btn btn-primary w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
