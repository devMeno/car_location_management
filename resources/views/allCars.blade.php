@extends('homebase')

@section('title', 'All of ours cars')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="GET" class="container d-flex gap-3">
            <input type="number" placeholder="Maximum budget" class="form-control" name="price"
                value="{{ $input['price'] ?? '' }}">
            <input type="submit" class="btn btn-primary">
        </form>
    </div>

    <div class="container">
        <div class="row py-2">
            @forelse ($cars as $car)
                <div class="col-md-3 my-2">
                    @include('shared.car_card', $car)
                </div>
            @empty
                <div class="col my-2 text-center fw-bolder">
                    Aucun réultat trouvé !
                </div>
            @endforelse
        </div>
    </div>
@endsection
