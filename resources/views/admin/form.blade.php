@extends('base')

@section('title', $car->exists ? 'Update the car' : 'Add a car')

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($car->exists ? 'admin.car.update' : 'admin.car.store', $car) }}" method="POST">
        @csrf
        @method($car->exists ? 'PUT' : 'POST')

        <div class="row">
            <div class="col row">
                @include('shared.input', [
                    'label' => 'Car\'s brand',
                    'name' => 'brand',
                    'type' => 'text',
                    'value' => $car->brand,
                ])
            </div>
            <div class="col row">
                @include('shared.input', [
                    'label' => 'Car\'s model',
                    'name' => 'model',
                    'type' => 'text',
                    'value' => $car->model,
                ])

            </div>
            <div class="col row">
                <div class="form-group mb-2">
                    <label for="fuel">Fuel type</label>
                    <select name="fuel" id="fuel" class="form-select">
                        <option value="essence">Essence</option>
                        <option value="gazoil">Diesel</option>
                        <option value="electric">Electric</option>
                    </select>
                </div>
            </div>

            <div class="col row">
                <div class="form-group mb-2">
                    <label for="transmission">Transmission type</label>
                    <select name="transmission" id="transmission" class="form-select">
                        <option value="automatic">Automatic</option>
                        <option value="manual">Manual</option>
                    </select>
                </div>
            </div>
        </div>

        @include('shared.input', [
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'value' => $car->description,
        ])

        <div class="row">
            <div class="col row">
                @include('shared.input', [
                    'label' => 'Number of places',
                    'name' => 'places',
                    'type' => 'number',
                    'value' => $car->places,
                ])
            </div>
            <div class="col row">
                @include('shared.input', [
                    'label' => 'Color',
                    'name' => 'color',
                    'type' => 'text',
                    'value' => $car->color,
                ])
            </div>
            <div class="col row">
                @include('shared.input', [
                    'label' => 'Rental price',
                    'name' => 'price',
                    'type' => 'number',
                    'value' => $car->price,
                ])
            </div>
        </div>

        @include('shared.input', [
            'label' => 'Image1',
            'name' => 'image1_path',
            'type' => 'file',
            'value' => $car->image1_path,
        ])

        @include('shared.input', [
            'label' => 'Image2',
            'name' => 'image2_path',
            'type' => 'file',
            'value' => $car->image2_path,
        ])

        @include('shared.checkbox', [
            'label' => 'Available',
            'name' => 'available',
            'value' => $car->available,
        ])


        <button class="btn btn-primary">
            @if ($car->exists)
                Update the car
            @else
                Add the car
            @endif
        </button>
    </form>

@endsection
