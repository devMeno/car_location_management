@extends('base')

@section('title', $car->exists ? 'Add a car' : 'Update the car')

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route($car->exists ? 'admin.car.update' : 'admin.car.store') }}" method="POST">
        @csrf
        @method($car->exists ? 'PUT' : 'POST')

        <button class="btn btn-primary">
            @if ($car->exists)
                Update the car
            @else
                Add the car
            @endif
        </button>
    </form>

@endsection
